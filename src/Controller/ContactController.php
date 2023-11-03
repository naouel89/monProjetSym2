<?php

// namespace App\Controller;

// use App\Entity\Contact;
// use App\Form\DemoFormType;
// use App\Form\ContactFormType;
// use Doctrine\ORM\EntityManager;
// use Doctrine\ORM\EntityManagerInterface;
// use Doctrine\ORM\Mapping\Entity;
// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\Mailer\MailerInterface;
// use Symfony\Component\Mime\Address;
// use Symfony\Component\Mime\Email;
// use Symfony\Bridge\Twig\Mime\TemplatedEmail;



// class ContactController extends AbstractController

// {
//     #[Route('/contact', name: 'app_contact')]
//     public function contactForm(Request $request, MailerInterface $mailer, EntityManagerInterface $entityManager): Response
//     {
//         // Créez une nouvelle instance de l'entité Contact
//         $contact = new Contact();



//         // Créez le formulaire en utilisant ContactFormType
//         $form = $this->createForm(ContactFormType::class, $contact);
//         $form->handleRequest($request);

//         // Vérifiez si le formulaire a été soumis et est valide
//         // traitemeent du formulaire
//         if ($form->isSubmitted() && $form->isValid()) {

//             // $contact = new Contact();

//             //on crée une instance de Contact
//             $contact = new Contact();
//             // Traitement des données du formulaire
//             $data = $form->getData();
//             //on stocke les données récupérées dans la variable $message
//             $contact = $data;
//             //insertion de l'objet dans la base sql
//             $entityManager->persist($contact);
//             $entityManager->flush();


//             // Créez l'objet Email avec les données du formulaire
//             $email = (new TemplatedEmail())
//                 ->from(new Address('jessus.n@gmail.com', 'Votre Nom'))
//                 ->to(new Address('exemple@exemple.com')) // Remplacez par l'adresse du destinataire
//                 ->subject('Nouveau message de contact')
                
                
//                 //on envoi la vu le chemin
                
//                 ->htmlTemplate('mailer/contact_mailer.html.twig')

//                 // on donne des variable on veux envoyé dans email
//                 ->context( [
//                     'objet' => $contact->getObjet(),
//                     'userEmail' => $contact->getEmail(),
//                     'message' => $contact->getMessage(),
//                 ]);

//             // Envoyez l'email via MailHog
//             $mailer->send($email);

//             // Redirigez l'utilisateur vers la page de confirmation après l'envoi du formulaire
//             return $this->redirectToRoute('app_accueil');
//         }

//         // Affichez le formulaire
//         return $this->render('contact/index.html.twig', [
//             'form' => $form->createView(),
//         ]);
//     }
// }
namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use App\Service\MailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, MailService $ms): Response
    {
        
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //on crée une instance de Contact
            $contact = new Contact();
           // Traitement des données du formulaire
            $data = $form->getData();
//             //on stocke les données récupérées dans la variable $message
            $contact = $data;

            $entityManager->persist($contact);
            $entityManager->flush();

            //envoi de mail avec notre service MailService
            $email = $ms->sendMail('hello@example.com', $contact->getEmail(), $contact->getObjet(), $contact->getMessage() );
//            dd($message->getEmail());

            // Vous pouvez rediriger l'utilisateur vers une page de confirmation
            return $this->redirectToRoute('app_accueil');
        }

        // Si le formulaire n'a pas encore été soumis ou n'est pas valide, afficher le formulaire
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}