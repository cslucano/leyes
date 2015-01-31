<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Ley;
use Symfony\Component\HttpFoundation\JsonResponse;

class LeyesController extends BaseController
{
    public function getLeyesAction()
    {
        $leyes = $this->getDoctrine()->getRepository(Ley::class)->findAll();

        return new JsonResponse($this->serialize($leyes));
    }
}
