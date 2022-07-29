<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class LoadController extends AbstractController
{
    /** @Route("/load", name="load") */
    public function load(): JsonResponse
    {
        $counter = 0.0000000001;
        while($counter < 100000000000000000) {
            $counter += sqrt($counter);
        }

        return new JsonResponse(['Load generated!']);
    }

    /** @Route("/no-load", name="no_load") */
    public function noLoad(): JsonResponse
    {
        return new JsonResponse(['Ready to go!']);
    }
}