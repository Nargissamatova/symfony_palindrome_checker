<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PalindromeController extends AbstractController
{
    #[Route('/', name: "form")]
    public function checker(Request $request)
    {
        $word = $request->query->get('word', '');
        $wordResult = ' ';
        if (!empty($word)) {
        }

        return $this->render('form/index.html.twig');
    }
}
