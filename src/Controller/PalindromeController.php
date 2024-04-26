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
        $answer = '';

        // Remove whitespace from the input string
        $cleanedWord = preg_replace('/\s+/', '', $word);

        if (!empty($cleanedWord)) {
            $reversedWord = strrev($cleanedWord);
            if ($cleanedWord === $reversedWord) {
                $answer = 'is a palindrome!';
            } else {
                $answer = 'is not a palindrome';
            }
        } else {
            $answer = 'No results';
        }

        return $this->render('form/index.html.twig', [
            'word' => $word,
            'answer' => $answer,
            'reversedWord' => $reversedWord,
        ]);
    }
}
