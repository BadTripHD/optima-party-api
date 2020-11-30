<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;

class ApiPostController extends AbstractController
{
    /**
     * @Route("/api/post", name="api_post_index", methods={"POST"})
     */
    public function index(CategoryRepository $categoryRepository, NormalizableInterface $normalizable): Response
    {

        $posts = $categoryRepository->findAll();

        $postsNormalises = $normalizable->normalize($posts);

        dd($postsNormalises);

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ApiPostController.php',
        ]);
    }
}
