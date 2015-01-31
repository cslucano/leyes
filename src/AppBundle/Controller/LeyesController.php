<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Ley;
use Symfony\Component\HttpFoundation\Response;

class LeyesController extends BaseController
{
    public function getLeyesAction()
    {
        $leyes = $this->getDoctrine()->getRepository(Ley::class)->findAll();

        return new Response($this->serialize($leyes));
    }
}
