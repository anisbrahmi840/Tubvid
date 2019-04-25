<?php

namespace App\Controller;

use App\Repository\VideoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(VideoRepository $videoRepository)
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'videos' => $videoRepository->findBestVideos()
        ]);
    }
}
