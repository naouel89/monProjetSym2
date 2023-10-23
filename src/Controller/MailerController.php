<?php

namespace App\Controller;

use SebastianBergmann\Template\Template;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Mime\Part\File;

use Symfony\Component\HttpFoundation\Request;


class MailerController extends AbstractController
{
    #[Route('/email', name: 'app_mailer')]
    public function sendEmail(MailerInterface $mailer): Response
    {
        try {
            $email = (new TemplatedEmail())
                ->from('jessus.n@gmail.com')
                ->to('test@example.com')
                ->subject('Time for Symfony Mailer!')
                ->text('Sending emails is fun again!')
                ->htmlTemplate('mailer/index.html.twig'); 
                // $email = (new TemplateEmail())
                // // ...
            
                // // utiliser la syntaxe 'cid:' + "nom de l'image intégrée " pour référencer l'image
                // ->html('<img src="cid:logo"> ... <img src="cid:footer-signature"> ...')
                
            
                // // utiliser la même syntaxe pour les images intégrées en tant que background
                // ->html('... <div background="cid:footer-signature"> ... </div> ...')
            ;
            $mailer->send($email);

            return new Response('Email sent successfully');
        } catch (\Exception $e) {
            return new Response('Error sending email: ' . $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}