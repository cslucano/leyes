<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Ley;
use AppBundle\LeyQueryFactory;
use Elastica\Facet\Terms;
use Elastica\Query;
use Elastica\ResultSet;
use Elastica\Type;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LeyesController extends BaseController
{
    public function getLeyesAction()
    {
        $leyes = $this->getDoctrine()->getRepository(Ley::class)->findAll();

        return new Response($this->serialize($leyes));
    }

    /**
     * @param Request $request
     * @return Response
     * @internal param $query
     */
    public function getLeyesQueryAction(Request $request)
    {
        $queryString = $request->get('q', '');

        $finder = $this->container->get('fos_elastica.finder.app.leyes');

        $results = $finder->find($queryString);

        return new Response($this->serialize($results));
    }

    /**
     * @param Request $request
     * @return Response
     * @internal param $query
     */
    public function getLeyesAgrupadoAction(Request $request)
    {
        $queryString = $request->get('q', '');

        $query = LeyQueryFactory
            ::create($queryString)
            ->agregarFacet('nomcongre', 'nomcongre')
            ->agregarFacet('nombredelformulario', 'nombredelformulario')
            ->agregarFacet('nombredelperiodoparlamentario', 'nombredelperiodoparlamentario')
            ->agregarFacet('codultesta', 'codultesta')
            ->agregarFacet('descomi', 'descomi')
            ->agregarFacet('desgrupparla', 'desgrupparla')
            ->agregarFacet('desgruppol', 'desgruppol')
            ->agregarFacet('nombredelacomision', 'nombredelacomision')
            ->agregarFacet('nombredelgrupoparlamentario', 'nombredelgrupoparlamentario')
            ->agregarFacet('promulgado', 'promulgado')
            ->getQuery()
        ;

        /** @var Type $type */
        $type = $this->container->get('fos_elastica.index.app.leyes');
        $result = $type->search($query);
//        var_dump($result); die();

        $content = $this->getContent($result, $queryString);

        return new Response($this->serialize($content));
    }

    public function getContent(ResultSet $result, $queryString)
    {
        $content = [];
        $content['root'][] = [
            'title' => $queryString,
            'count' => $result->getTotalHits()
        ];

        $facets = $result->getFacets();
        foreach($facets as $fname => $fcontent) {
            $content[$fname] = [];
            foreach($fcontent['terms'] as $fterm) {
                $content[$fname][] = [
                    'title' => $fterm['term'],
                    'count' => $fterm['count']
                ];
            }
        }

        return $content;
    }
}
