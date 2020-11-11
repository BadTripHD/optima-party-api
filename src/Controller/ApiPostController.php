<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiPostController extends AbstractController
{
    /**
     * @Route("/api/post", name="api_post_index", methods={"POST"})
     */
    public function index(CategoryRepository $categoryRepository): Response
    {

        $posts = $categoryRepository->findAll();

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ApiPostController.php',
        ]);
    }
}
