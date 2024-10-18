<?php





namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{


    // Route pour la page d'accueil (URL : "/")
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {

        $categories = [

            ['id' => 1, "name" => "miche"],
            ['id' => 2, "name" => "jean"],
            ['id' => 1, "name" => "claude"],
        ];

        return $this->render('default/index.html.twig', [
            'categories' => $categories
        ]);
        // Retourne une réponse simple avec du HTML affichant "ACCUEIL"
        return new Response(
            "
            <html>
                <body>
                ACCUEIL
                </body>
            </html>"
        );
    }

    // Route pour afficher les annonces d'une catégorie donnée (URL : "/category/{id}")
    // Le paramètre {id} doit être un entier grâce à la regex <\d+>
    #[Route('/category/{id<\d+>}', name: 'app_category')]
    public function appCategory(int $id): Response
    {
        // Affiche l'ID de la catégorie dans la réponse HTML
        return new Response(
            "
            <html>
                <body>
                Affichage des annonces de la categorie " . $id . "
                </body>
            </html>"
        );
    }

    // Route pour afficher une annonce spécifique (URL : "/a/{id}")
    // Le paramètre {id} doit également être un entier
    #[Route('/a/{id<\d+>}', name: 'app_advert')]
    public function appAdvert(int $id): Response
    {
        // Affiche l'ID de l'annonce dans la réponse HTML
        return new Response(
            "
            <html>
                <body>
                Affichage de l'annonce qui a l'id: " . $id . "
                </body>
            </html>"
        );
    }

    // Route pour la page de recherche (URL : "/search")
    #[Route('/search', name: 'app_search')]
    public function search(): Response
    {
        // Affiche un message de résultat de recherche
        return new Response(
            "
            <html>
                <body>
                Affichage des annonces correspondant à une recherche donnée 
                </body>
            </html>"
        );
    }
}
