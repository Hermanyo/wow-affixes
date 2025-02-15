<?php
/**
 * Created by PhpStorm.
 * User: isak
 * Date: 1/31/18
 * Time: 9:20 AM
 */

namespace App\Controller;


use App\Service\WowWeek;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    public function __invoke(WowWeek $wowWeek)
    {
        return $this->render('homepage.html.twig', [
            'wowaffixes' => $wowWeek,
        ]);
    }
}
