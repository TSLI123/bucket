<?php

namespace App\Controller;

use PHPUnit\Util\Json;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{

    /**
     * @Route ("/", name="main_home")
     */
    public function home(): Response
    {
        return $this->render('main/home.html.twig');

    }

    /**
     * @Route ("/aboutUs", name="main_aboutUs")
     */
    public function about(): Response
    {
        $webPath = $projectDir = $this->getParameter('kernel.project_dir');
        $team =json_decode(file_get_contents($webPath."/data/team.json"));

        return $this->render('main/about.html.twig',[
            "team" => $team,
        ]);

    }
}