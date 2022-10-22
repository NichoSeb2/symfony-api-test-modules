<?php

namespace App\Modules\QMS\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestModuleController extends AbstractController
{
    #[Route('/test', name: 'app_modules_qms_test')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'modules/QMS/Controller/TestModuleController.php',
        ]);
    }
}
