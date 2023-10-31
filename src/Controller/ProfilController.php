<?php

namespace App\Controller;

use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;


class ProfilController extends AbstractController
{
    private $userRepo;
    private $security;

    public function __construct(UtilisateurRepository $userRepo, Security $security)
    {
        $this->userRepo = $userRepo;
        $this->security = $security;
    }

    #[Route('/profil', name: 'app_profil')]
    public function index(): Response
    {
        if ($this->security->getUser()) {
            $identifiant = $this->getUser()->getUserIdentifier();
            $info = $this->userRepo->findOneBy(["email" => $identifiant]);

            return $this->render('profil/index.html.twig', [
                'informations' => $info
            ]);
        } else {
            // Gérez le cas où l'utilisateur n'est pas connecté, par exemple, redirigez-le vers une page de connexion.
            return $this->redirectToRoute('app_login'); // Remplacez 'app_login' par la route de votre page de connexion.
        }
    }
}