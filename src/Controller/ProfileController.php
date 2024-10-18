<?php




namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfileController extends AbstractController
{
    // Route pour afficher les informations du profil de l'utilisateur connecté (URL : "/profile")
    #[Route('/profile', name: 'app_profile')]
    public function index(): Response
    {

        // return $this->render('profile/index.html.twig', [
        //     'controller_name' => 'ProfileController',
        // ]);
        // Retourne une réponse simple affichant les informations du profil
        return new Response(
            "
                    <html>
                        <body>
                        Affichage de mes informations de profil
                        </body>
                    </html>"
        );
    }

    // Route pour afficher le formulaire permettant de modifier les informations du profil (URL : "/profile/edit")
    #[Route('/profile/edit', name: 'app_profile_edit')]
    public function editProfile(): Response
    {
        // Retourne une réponse affichant un formulaire d'édition du profil
        return new Response(
            "
                    <html>
                        <body>
                        Affichage d'un formulaire pour modifier mes infos de profil
                        </body>
                    </html>"
        );
    }

    // Route pour afficher les annonces créées par l'utilisateur connecté (URL : "/profile/my-a")
    #[Route('/profile/my-a', name: 'app_profile_my_adverts')]
    public function myAdverts(): Response
    {
        // Retourne une réponse affichant la liste des annonces que l'utilisateur a créées
        return new Response(
            "
                    <html>
                        <body>
                        Affichage des annonces que j'ai créées
                        </body>
                    </html>"
        );
    }

    // Route pour afficher le formulaire permettant de créer une nouvelle annonce (URL : "/profile/a/new")
    #[Route('/profile/a/new', name: 'app_profile_create_advert')]
    public function createAdvert(): Response
    {
        // Retourne une réponse affichant un formulaire de création d'annonce
        return new Response(
            "
                    <html>
                        <body>
                        Affichage du formulaire de création d'annonces
                        </body>
                    </html>"
        );
    }

    // Route pour afficher le formulaire permettant de modifier une annonce existante en fonction de son ID (URL : "/profile/a/{id}")
    // Le paramètre {id} est un entier (regex <\d+>)
    #[Route('/profile/a/{id<\d+>}', name: 'app_profile_edit_advert')]
    public function editAdvert(int $id): Response
    {
        // Retourne une réponse affichant le formulaire pour modifier l'annonce spécifique, si elle appartient à l'utilisateur
        return new Response(
            "
                    <html>
                        <body>
                        Affichage du formulaire de modification de l'annonce " . $id . " (si elle m'appartient)
                        </body>
                    </html>"
        );
    }
}
