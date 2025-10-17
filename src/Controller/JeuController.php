<?php
// src/Controller/JeuController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request; // L'objet Request est essentiel pour lire le paramètre 'search'

class JeuController extends AbstractController
{
    // Données des 24 jeux (propriété de la classe)
    private array $jeuxData = [
        // Structure de base: nom, genre[], image, annee, editeur, developpeur, synopsis, performance (pour JS), requirements{cpu, gpu, ram}

        // Jeux 1 à 8
        ['nom' => 'PUBG: BATTLEGROUNDS', 'genre' => ['Battle Royale', 'Action'], 'image' => 'pubg.jpg', 'annee' => 2017, 'editeur' => 'KRAFTON', 'developpeur' => 'KRAFTON', 'synopsis' => 'Un jeu de bataille royale intense et réaliste où 100 joueurs s\'affrontent pour être le dernier survivant. Le dernier homme debout gagne la partie.', 'performance' => 1.5, 'requirements' => ['cpu' => 'Intel Core i5-4430 / AMD FX-6300', 'gpu' => 'NVIDIA GeForce GTX 960 / AMD Radeon R7 370', 'ram' => 8]],
        ['nom' => 'Black Myth: Wukong', 'genre' => ['Action-RPG', 'Aventure'], 'image' => 'black myth.jpg', 'annee' => 2024, 'editeur' => 'Game Science', 'developpeur' => 'Game Science', 'synopsis' => 'Un RPG d\'action inspiré de la mythologie chinoise, suivant l\'histoire du Roi Singe. Préparez-vous à des combats épiques contre des créatures légendaires.', 'performance' => 1.8, 'requirements' => ['cpu' => 'Intel Core i7-8700 / AMD Ryzen 5 3600', 'gpu' => 'NVIDIA GeForce RTX 2060 / AMD Radeon RX 5700 XT', 'ram' => 16]],
        ['nom' => 'Palworld', 'genre' => ['Survie', 'Sandbox'], 'image' => 'palworld.jpg', 'annee' => 2024, 'editeur' => 'Pocketpair', 'developpeur' => 'Pocketpair', 'synopsis' => 'Un jeu de survie en monde ouvert où vous pouvez capturer plus de 100 créatures mystérieuses appelées Pals. Construction, combat et exploration sont au rendez-vous.', 'performance' => 1.2, 'requirements' => ['cpu' => 'Intel Core i5-3570K / AMD FX-8350', 'gpu' => 'NVIDIA GeForce GTX 1050', 'ram' => 16]],
        ['nom' => 'Counter-Strike 2', 'genre' => ['FPS', 'Esport'], 'image' => 'counter-strike 2.jpg', 'annee' => 2023, 'editeur' => 'Valve', 'developpeur' => 'Valve', 'synopsis' => 'La suite du jeu de tir à la première personne compétitif le plus populaire au monde, propulsé par le moteur Source 2, offrant des graphismes et une physique améliorés.', 'performance' => 1.0, 'requirements' => ['cpu' => 'Intel Core i5-750 / AMD Phenom II X4 965', 'gpu' => 'GTX 480 / AMD Radeon HD 6770', 'ram' => 8]],
        ['nom' => 'Monster Hunter Wilds', 'genre' => ['Action-RPG', 'Monstres'], 'image' => 'monster hunter.jpg', 'annee' => 2025, 'editeur' => 'Capcom', 'developpeur' => 'Capcom', 'synopsis' => 'Le prochain opus de la série Monster Hunter, promettant un monde encore plus vaste à explorer, des créatures gigantesques et des combats coopératifs intenses.', 'performance' => 1.9, 'requirements' => ['cpu' => 'Intel Core i7-9700K / AMD Ryzen 7 3700X', 'gpu' => 'NVIDIA GeForce RTX 3070 / AMD Radeon RX 6700 XT', 'ram' => 32]],
        ['nom' => 'Lost Ark', 'genre' => ['MMORPG', 'Action'], 'image' => 'lost ark.jpg', 'annee' => 2022, 'editeur' => 'Amazon Games', 'developpeur' => 'Smilegate RPG', 'synopsis' => 'Un MMORPG d\'action gratuit centré sur l\'exploration d\'un vaste monde et des combats intenses en vue isométrique, avec un riche système de classes.', 'performance' => 1.1, 'requirements' => ['cpu' => 'Intel Core i3 / AMD Ryzen 3', 'gpu' => 'NVIDIA GeForce GTX 460 / AMD Radeon HD 6850', 'ram' => 8]],
        ['nom' => 'Dota 2', 'genre' => ['MOBA', 'Stratégie'], 'image' => 'dota 2.jpg', 'annee' => 2013, 'editeur' => 'Valve', 'developpeur' => 'Valve', 'synopsis' => 'Un jeu d\'arène de bataille multijoueur en ligne (MOBA) extrêmement populaire, mêlant stratégie et action. Deux équipes de cinq s\'affrontent pour détruire l\'Ancien ennemi.', 'performance' => 0.8, 'requirements' => ['cpu' => 'Dual core from Intel or AMD at 2.8 GHz', 'gpu' => 'NVIDIA GeForce 8600 / 9600GT / AMD Radeon HD2600 / 3600', 'ram' => 4]],
        ['nom' => 'Cyberpunk 2077', 'genre' => ['Action-RPG', 'Science-Fiction'], 'image' => 'cyberpunk.jpg', 'annee' => 2020, 'editeur' => 'CD Projekt', 'developpeur' => 'CD Projekt Red', 'synopsis' => 'Un monde ouvert, RPG d\'action-aventure se déroulant dans la mégalopole de Night City. Personnalisez votre V, un mercenaire à la recherche d\'un implant unique.', 'performance' => 1.7, 'requirements' => ['cpu' => 'Intel Core i7-6700 / AMD Ryzen 5 1600X', 'gpu' => 'NVIDIA GeForce GTX 1660 Super / AMD Radeon RX 590', 'ram' => 12]],
        
        // Jeux 9 à 24
        ['nom' => 'Elden Ring', 'genre' => ['Action-RPG', 'Fantasy'], 'image' => 'elden ring.jpg', 'annee' => 2022, 'editeur' => 'Bandai Namco', 'developpeur' => 'FromSoftware', 'synopsis' => 'Un RPG d\'action fantastique dans un vaste monde ouvert, connu pour sa difficulté et son lore riche créé en collaboration avec George R.R. Martin.', 'performance' => 1.6, 'requirements' => ['cpu' => 'Intel Core i5-8400 / AMD Ryzen 3 3300X', 'gpu' => 'NVIDIA GeForce GTX 1060 (3GB) / AMD Radeon RX 580 (4GB)', 'ram' => 12]],
        ['nom' => 'Hogwarts Legacy', 'genre' => ['Action-RPG', 'Aventure'], 'image' => 'hogwarts.jpg', 'annee' => 2023, 'editeur' => 'Warner Bros. Games', 'developpeur' => 'Avalanche Software', 'synopsis' => 'Un RPG d\'action en monde ouvert se déroulant dans le monde magique de Harry Potter au 19ème siècle. Créez votre héritier et explorez Poudlard.', 'performance' => 1.4, 'requirements' => ['cpu' => 'Intel Core i5-8400 / AMD Ryzen 5 2600', 'gpu' => 'NVIDIA GeForce GTX 1070 / AMD Radeon RX 580', 'ram' => 16]],
        ['nom' => 'Baldur’s Gate 3', 'genre' => ['RPG', 'Stratégie au tour par tour'], 'image' => 'baldur.jpg', 'annee' => 2023, 'editeur' => 'Larian Studios', 'developpeur' => 'Larian Studios', 'synopsis' => 'Un RPG épique basé sur les règles de Dungeons & Dragons, avec une narration riche et des choix complexes qui impactent le monde.', 'performance' => 1.3, 'requirements' => ['cpu' => 'Intel i5-4690 / AMD FX 8350', 'gpu' => 'NVIDIA GeForce GTX 970 / AMD Radeon R9 290X', 'ram' => 8]],
        ['nom' => 'Battlefield 6', 'genre' => ['FPS', 'Guerre'], 'image' => 'bf6.jpg', 'annee' => 2025, 'editeur' => 'Electronic Arts', 'developpeur' => 'DICE', 'synopsis' => 'Un jeu de tir à la première personne axé sur la guerre à grande échelle et les combats multijoueurs intenses. Destruction et chaos garantis.', 'performance' => 1.5, 'requirements' => ['cpu' => 'Intel Core i7-10700 / AMD Ryzen 7 3700X', 'gpu' => 'NVIDIA GeForce RTX 3060Ti / AMD Radeon RX 6700-XT', 'ram' => 16]],
        ['nom' => 'Apex Legends', 'genre' => ['Battle Royale', 'FPS'], 'image' => 'apex.jpg', 'annee' => 2019, 'editeur' => 'Electronic Arts', 'developpeur' => 'Respawn Entertainment', 'synopsis' => 'Un Battle Royale en équipe avec des personnages uniques (Légendes) possédant des capacités spécifiques. Maîtrisez leurs pouvoirs pour vaincre.', 'performance' => 1.0, 'requirements' => ['cpu' => 'Intel Core i3-6300 / AMD FX-4350', 'gpu' => 'NVIDIA GeForce GT 640 / AMD Radeon HD 7730', 'ram' => 6]],
        ['nom' => 'Rust', 'genre' => ['Survie', 'Multijoueur'], 'image' => 'rust.jpg', 'annee' => 2018, 'editeur' => 'Facepunch Studios', 'developpeur' => 'Facepunch Studios', 'synopsis' => 'Un jeu de survie multijoueur impitoyable où vous devez collecter des ressources pour survivre, construire une base et vous défendre contre d\'autres joueurs.', 'performance' => 1.4, 'requirements' => ['cpu' => 'Intel Core i7-3770 / AMD FX-8350', 'gpu' => 'NVIDIA GeForce GTX 670 / AMD Radeon R9 280', 'ram' => 10]],
        ['nom' => 'Naraka: Bladepoint', 'genre' => ['Battle Royale', 'Mêlée'], 'image' => 'naraka.jpg', 'annee' => 2021, 'editeur' => 'NetEase Games', 'developpeur' => '24 Entertainment', 'synopsis' => 'Un Battle Royale centré sur le combat au corps à corps et les mouvements acrobatiques, s\'inspirant de la culture et des légendes orientales.', 'performance' => 1.1, 'requirements' => ['cpu' => 'Intel Core i5 4th generation / AMD FX 6300', 'gpu' => 'NVIDIA GeForce GTX 750Ti / AMD Radeon HD 7770', 'ram' => 8]],
        ['nom' => 'Grand Theft Auto V', 'genre' => ['Action-Aventure', 'Monde Ouvert'], 'image' => 'gta5.jpg', 'annee' => 2015, 'editeur' => 'Rockstar Games', 'developpeur' => 'Rockstar North', 'synopsis' => 'Un des jeux en monde ouvert les plus vendus de tous les temps, avec trois protagonistes jouables. Explorez Los Santos et effectuez des braquages.', 'performance' => 0.9, 'requirements' => ['cpu' => 'Intel Core 2 Quad Q6600 / AMD Phenom 9850', 'gpu' => 'NVIDIA 9800 GT 1GB / AMD HD 4870 1GB', 'ram' => 4]],
        ['nom' => 'The Sims 4', 'genre' => ['Simulation', 'Vie'], 'image' => 'sims4.jpg', 'annee' => 2014, 'editeur' => 'Electronic Arts', 'developpeur' => 'Maxis', 'synopsis' => 'Un jeu de simulation de vie où vous créez et contrôlez des personnages appelés Sims. Gérez leurs carrières, leurs relations et leur maison.', 'performance' => 0.7, 'requirements' => ['cpu' => 'Intel Core 2 Duo E4300 / AMD Athlon 64 X2 4000+', 'gpu' => 'NVIDIA GeForce 6800 / ATI Radeon X1800', 'ram' => 4]],
        ['nom' => 'Valorant', 'genre' => ['FPS', 'Esport'], 'image' => 'valorant.jpg', 'annee' => 2020, 'editeur' => 'Riot Games', 'developpeur' => 'Riot Games', 'synopsis' => 'Un FPS tactique 5v5 basé sur les personnages, où la précision des tirs rencontre les capacités spéciales des Agents. Un titre incontournable de l\'Esport.', 'performance' => 0.9, 'requirements' => ['cpu' => 'Intel Core 2 Duo E8400 / AMD Athlon 200GE', 'gpu' => 'Intel HD 4000 / AMD Radeon R5 200', 'ram' => 4]],
        ['nom' => 'The Witcher 3: Wild Hunt', 'genre' => ['Action-RPG', 'Fantasy'], 'image' => 'witcher.jpg', 'annee' => 2015, 'editeur' => 'CD Projekt', 'developpeur' => 'CD Projekt Red', 'synopsis' => 'Incarnez Geralt de Riv, un tueur de monstres, dans un monde ouvert tentaculaire. Récompensé par de nombreux prix pour sa narration et son monde.', 'performance' => 1.2, 'requirements' => ['cpu' => 'Intel Core i5-2500K / AMD Phenom II X4 940', 'gpu' => 'NVIDIA GeForce GTX 660 / AMD Radeon HD 7870', 'ram' => 6]],
        ['nom' => 'Red Dead Redemption 2', 'genre' => ['Action-Aventure', 'Monde Ouvert'], 'image' => 'rdr2.jpg', 'annee' => 2019, 'editeur' => 'Rockstar Games', 'developpeur' => 'Rockstar Studios', 'synopsis' => 'Une épopée captivante sur la vie hors-la-loi dans l\'Amérique du début du XXe siècle. Un monde ouvert incroyablement détaillé et réaliste.', 'performance' => 1.8, 'requirements' => ['cpu' => 'Intel Core i7-4770K / AMD Ryzen 5 1500X', 'gpu' => 'NVIDIA GeForce GTX 1060 (6GB) / AMD Radeon RX 480 (4GB)', 'ram' => 12]],
        ['nom' => 'Minecraft', 'genre' => ['Sandbox', 'Survie'], 'image' => 'minecraft.jpg', 'annee' => 2011, 'editeur' => 'Mojang', 'developpeur' => 'Mojang', 'synopsis' => 'Un jeu en monde ouvert où vous construisez tout ce que vous pouvez imaginer en utilisant des blocs. Créez, explorez et survivez.', 'performance' => 0.5, 'requirements' => ['cpu' => 'Intel Core i3-3210 / AMD A8-7600', 'gpu' => 'Intel HD Graphics 4000 / AMD Radeon R5 series', 'ram' => 4]],
        ['nom' => 'Forza Horizon 5', 'genre' => ['Course', 'Monde Ouvert'], 'image' => 'fh5.jpg', 'annee' => 2021, 'editeur' => 'Xbox Game Studios', 'developpeur' => 'Playground Games', 'synopsis' => 'Le meilleur jeu de course en monde ouvert, se déroulant dans un Mexique vibrant et en constante évolution. Des centaines de voitures à collectionner.', 'performance' => 1.5, 'requirements' => ['cpu' => 'Intel Core i5-4460 / AMD Ryzen 3 1200', 'gpu' => 'NVIDIA GeForce GTX 970 / AMD Radeon RX 470', 'ram' => 8]],
        ['nom' => 'Helldivers 2', 'genre' => ['Tir', 'Coopératif'], 'image' => 'helldivers 2.jpg', 'annee' => 2024, 'editeur' => 'Sony Interactive Entertainment', 'developpeur' => 'Arrowhead Game Studios', 'synopsis' => 'Un jeu de tir coopératif intense où vous rejoignez les Helldivers pour répandre la démocratie et défendre Super-Terre contre des menaces extraterrestres.', 'performance' => 1.6, 'requirements' => ['cpu' => 'Intel Core i7-4790K / AMD Ryzen 5 1500X', 'gpu' => 'NVIDIA GeForce GTX 1050 Ti / AMD Radeon RX 470', 'ram' => 16]],
        ['nom' => 'Diablo IV', 'genre' => ['Action-RPG', 'Hack and Slash'], 'image' => 'diablo 4.jpg', 'annee' => 2023, 'editeur' => 'Blizzard Entertainment', 'developpeur' => 'Blizzard Entertainment', 'synopsis' => 'Le retour de la série emblématique de hack and slash. Explorez le monde sombre de Sanctuaire et combattez Lilith dans ce RPG d\'action.', 'performance' => 1.7, 'requirements' => ['cpu' => 'Intel Core i5-2500K / AMD FX-8350', 'gpu' => 'NVIDIA GeForce GTX 660 / AMD Radeon R9 270', 'ram' => 8]],
        ['nom' => 'Starfield', 'genre' => ['Action-RPG', 'Science-Fiction'], 'image' => 'starfield.jpg', 'annee' => 2023, 'editeur' => 'Bethesda Softworks', 'developpeur' => 'Bethesda Game Studios', 'synopsis' => 'Un RPG spatial next-gen où vous créez votre propre histoire au milieu des étoiles. Explorez plus de 1000 planètes uniques.', 'performance' => 1.8, 'requirements' => ['cpu' => 'Intel Core i7-6800K / AMD Ryzen 5 2600X', 'gpu' => 'NVIDIA GeForce GTX 1070 Ti / AMD Radeon RX 5700', 'ram' => 16]],
        ['nom' => 'Street Fighter 6', 'genre' => ['Combat', 'Arcade'], 'image' => 'street 6.jpg', 'annee' => 2023, 'editeur' => 'Capcom', 'developpeur' => 'Capcom', 'synopsis' => 'Le dernier opus de la série de jeux de combat légendaire. Présente de nouveaux modes, un World Tour immersif et des mécaniques de combat revisitées.', 'performance' => 1.0, 'requirements' => ['cpu' => 'Intel Core i5-7500 / AMD Ryzen 3 1200', 'gpu' => 'NVIDIA GeForce GTX 1060 / AMD Radeon RX 580', 'ram' => 8]],
        ['nom' => 'FIFA 25', 'genre' => ['Sport', 'Simulation'], 'image' => 'fifa 25.jpg', 'annee' => 2024, 'editeur' => 'EA Sports', 'developpeur' => 'EA Vancouver', 'synopsis' => 'La simulation de football la plus complète, avec des graphismes améliorés et des modes de jeu populaires comme Ultimate Team et le mode Carrière.', 'performance' => 1.3, 'requirements' => ['cpu' => 'Intel Core i7-6700 / AMD Ryzen 7 1700', 'gpu' => 'NVIDIA GeForce GTX 1660 / AMD Radeon RX 5600 XT', 'ram' => 12]],
        ['nom' => 'Cities: Skylines II', 'genre' => ['Stratégie', 'Simulation'], 'image' => 'cities.jpg', 'annee' => 2023, 'editeur' => 'Paradox Interactive', 'developpeur' => 'Colossal Order', 'synopsis' => 'La suite du célèbre jeu de construction de ville, offrant des outils de construction plus profonds, une économie plus réaliste et de nouvelles mécaniques de jeu.', 'performance' => 1.4, 'requirements' => ['cpu' => 'Intel Core i7-9700K / AMD Ryzen 7 2700X', 'gpu' => 'NVIDIA GeForce RTX 2060 / AMD Radeon RX 5700 XT', 'ram' => 16]],
        ['nom' => 'Final Fantasy XVI', 'genre' => ['Action-RPG', 'Fantasy'], 'image' => 'ff16.jpg', 'annee' => 2023, 'editeur' => 'Square Enix', 'developpeur' => 'Square Enix', 'synopsis' => 'Un RPG d\'action solo avec un scénario mature centré sur des invocations gigantesques (Eikons). L\'histoire se déroule dans le monde sombre de Valisthea.', 'performance' => 1.9, 'requirements' => ['cpu' => 'Intel Core i7-10700 / AMD Ryzen 5 5600X', 'gpu' => 'NVIDIA GeForce RTX 3060 / AMD Radeon RX 6700 XT', 'ram' => 16]],
        ['nom' => 'Marvel\'s Spider-Man 2', 'genre' => ['Action-Aventure', 'Super-Héros'], 'image' => 'spider.jpg', 'annee' => 2023, 'editeur' => 'Sony Interactive Entertainment', 'developpeur' => 'Insomniac Games', 'synopsis' => 'La suite des aventures de Peter Parker et Miles Morales. Affrontez de nouveaux super-vilains, dont Kraven le Chasseur et Venom, à travers New York.', 'performance' => 1.7, 'requirements' => ['cpu' => 'Intel Core i7-11700K / AMD Ryzen 7 5800X', 'gpu' => 'NVIDIA GeForce RTX 3070 / AMD Radeon RX 6800', 'ram' => 32]],
        ['nom' => 'Hades II', 'genre' => ['Roguelike', 'Action-RPG'], 'image' => 'hades.webp', 'annee' => 2024, 'editeur' => 'Supergiant Games', 'developpeur' => 'Supergiant Games', 'synopsis' => 'La suite du roguelike acclamé, où vous incarnez Melinoë, la Princesse du Monde Souterrain, pour vaincre le Titan du Temps.', 'performance' => 0.9, 'requirements' => ['cpu' => 'Intel Core i3-3250 / AMD Phenom II X4 B60', 'gpu' => 'NVIDIA GeForce GT 630 / AMD Radeon HD 6670', 'ram' => 8]],
        ['nom' => 'Resident Evil 4 Remake', 'genre' => ['Survival Horror', 'Tir à la 3e personne'], 'image' => 're4.jpg', 'annee' => 2023, 'editeur' => 'Capcom', 'developpeur' => 'Capcom', 'synopsis' => 'Le remake du classique de l\'horreur. Incarnez Leon S. Kennedy dans une mission pour sauver la fille du président d\'un village rural en Espagne.', 'performance' => 1.6, 'requirements' => ['cpu' => 'Intel Core i5-7500 / AMD Ryzen 3 1200', 'gpu' => 'NVIDIA GeForce GTX 1050 Ti / AMD Radeon RX 560', 'ram' => 12]],
        ['nom' => 'Fortnite', 'genre' => ['Battle Royale', 'Survie'], 'image' => 'fortnite.png', 'annee' => 2017, 'editeur' => 'Epic Games', 'developpeur' => 'Epic Games', 'synopsis' => 'Le phénomène Battle Royale mondial, combinant tir et construction. Des mises à jour constantes et des événements pour une expérience dynamique.', 'performance' => 1.0, 'requirements' => ['cpu' => 'Intel Core i3-3225 / AMD A5-7400K', 'gpu' => 'Intel HD 4000 / AMD Radeon HD 7870', 'ram' => 8]],
        ['nom' => 'Roblox (version PC)', 'genre' => ['Création', 'Multijoueur'], 'image' => 'roblox.jpg', 'annee' => 2006, 'editeur' => 'Roblox Corporation', 'developpeur' => 'Roblox Corporation', 'synopsis' => 'Une plateforme de création et de jeu, permettant aux utilisateurs de programmer leurs propres jeux et d\'en jouer à des millions d\'autres. Axé sur la communauté.', 'performance' => 0.6, 'requirements' => ['cpu' => 'Intel Core i3 / AMD Athlon X4', 'gpu' => 'Intel HD Graphics 630 / AMD Radeon HD 7750', 'ram' => 4]],
    ];

    // --- Méthode utilitaire pour générer un slug ---
    private function slugify(string $text): string
    {
        $text = iconv('UTF-8', 'ASCII//TRANSLIT', $text);
        $text = strtolower(trim($text));
        $text = preg_replace('/[^a-z0-9\s-]/', '', $text); 
        $text = preg_replace('/\s+/', '-', $text);       
        $text = preg_replace('/-+/', '-', $text);       
        return $text;
    }

    // --- ROUTE : Page d'accueil / qui redirige vers le catalogue ---
    #[Route('/', name: 'app_home')]
    public function home(): RedirectResponse
    {
        // On redirige vers la route principale /jeux
        return $this->redirectToRoute('app_jeux');
    }

    // --- ROUTE DU CATALOGUE (INDEX) - MISE À JOUR POUR GÉRER LA RECHERCHE ET LA REDIRECTION ---
    #[Route('/jeux', name: 'app_jeux')]
    public function index(Request $request): Response
    {
        // 1. Récupérer le terme de recherche depuis l'URL (?search=...)
        $searchTerm = $request->query->get('search');
        
        $jeuxTrouves = [];
        // Normaliser le terme de recherche pour une comparaison robuste (ex: "bf6" -> "bf6")
        $termeNormalise = $this->slugify($searchTerm ?? ''); 

        // 2. Parcourir toutes les données pour filtrer et ajouter le slug
        foreach ($this->jeuxData as $jeu) {
            $jeu['slug'] = $this->slugify($jeu['nom']);
            
            // Si un terme de recherche est fourni, filtrez les jeux
            if ($searchTerm) {
                // Normalise le nom du jeu pour la comparaison (ex: "Battlefield 6" -> "battlefield-6")
                $nomJeuNormalise = $this->slugify($jeu['nom']); 
                
                // Vérifie si le terme de recherche normalisé est contenu dans le nom normalisé du jeu
                if (str_contains($nomJeuNormalise, $termeNormalise)) {
                    $jeuxTrouves[] = $jeu;
                }
            } else {
                // Si pas de recherche, affichez tout le catalogue
                $jeuxTrouves[] = $jeu;
            }
        }

        // 3. LOGIQUE DE REDIRECTION AUTOMATIQUE
        // Si un terme a été recherché ET que la recherche a trouvé EXACTEMENT UN SEUL jeu
        if ($searchTerm && count($jeuxTrouves) === 1) {
            $jeuUnique = $jeuxTrouves[0];
            
            // Redirection immédiate vers la page de détail de ce jeu
            return $this->redirectToRoute('app_jeu_detail', [
                'slug' => $jeuUnique['slug'], 
            ]);
        }
        
        // 4. AFFICHAGE DE LA PAGE DE CATALOGUE/RÉSULTATS (si 0 ou >1 résultat, ou pas de recherche)
        return $this->render('jeu/index.html.twig', [
            'jeux' => $jeuxTrouves,
            'searchTerm' => $searchTerm, // Utile pour afficher le terme recherché dans le template
        ]);
    }
    
    // --- NOUVELLE ROUTE : Redirection de /jeu vers /jeux ---
    #[Route('/jeu', name: 'app_jeu_redirect')]
    public function jeuRedirect(): RedirectResponse
    {
        return $this->redirectToRoute('app_jeux');
    }


    // --- ROUTE DU DÉTAIL DU JEU ---
    #[Route('/jeu/{slug}', name: 'app_jeu_detail')]
    public function detail(string $slug): Response
    {
        $jeuTrouve = null;
        foreach ($this->jeuxData as $jeu) {
            if ($this->slugify($jeu['nom']) === $slug) {
                // Créer l'objet jeu avec toutes les données pour la page de détail
                $jeuTrouve = [
                    'nom' => $jeu['nom'],
                    'genre' => $jeu['genre'],
                    'image' => $jeu['image'],
                    'annee' => $jeu['annee'],
                    'editeur' => $jeu['editeur'],
                    'developpeur' => $jeu['developpeur'],
                    'synopsis' => $jeu['synopsis'],
                    // Données utilisées pour le JS de compatibilité
                    'performance' => $jeu['performance'], 
                    'cpuMin' => $jeu['requirements']['cpu'],
                    'gpuMin' => $jeu['requirements']['gpu'],
                    'ramMin' => $jeu['requirements']['ram'],
                ];
                break;
            }
        }

        if (!$jeuTrouve) {
            throw $this->createNotFoundException('Le jeu demandé n\'a pas été trouvé.');
        }
        
        return $this->render('jeu/detail.html.twig', [
            'jeu' => $jeuTrouve,
        ]);
    }
}
