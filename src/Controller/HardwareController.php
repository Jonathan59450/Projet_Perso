<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

class HardwareController extends AbstractController
{
    #[Route('/hardware', name: 'app_hardware')]
    public function index(): Response
    {
        $configurations = [
            'nvidia' => [
                // Configurations NVIDIA GeForce RTX
                [
                    'name' => 'RTX 5090 - Puissance Extrême',
                    'description' => 'La configuration ultime pour du gaming en 8K et du travail professionnel lourd.',
                    'image' => 'image/config_rtx5090.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i9-14900K',
                        'gpu' => 'NVIDIA GeForce RTX 5090',
                        'ram' => '64 Go DDR5',
                        'resolution' => '8K (4320p)',
                    ],
                ],
                [
                    'name' => 'RTX 5080 - Le Ray Tracing en 4K',
                    'description' => 'Un excellent compromis pour le gaming en 4K avec toutes les options au maximum.',
                    'image' => 'image/config_rtx5080.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 9 9900X',
                        'gpu' => 'NVIDIA GeForce RTX 5080',
                        'ram' => '32 Go DDR5',
                        'resolution' => '4K (2160p)',
                    ],
                ],
                [
                    'name' => 'RTX 5070 - Performance Optimale',
                    'description' => 'Le meilleur rapport qualité-prix pour la 4K et le 1440p à haut framerate.',
                    'image' => 'image/config_rtx5070.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i7-14700K',
                        'gpu' => 'NVIDIA GeForce RTX 5070',
                        'ram' => '32 Go DDR5',
                        'resolution' => '4K (2160p)',
                    ],
                ],
                [
                    'name' => 'RTX 5060 - Le Full HD du Futur',
                    'description' => 'Parfaite pour les jeux en Full HD et QHD avec le DLSS activé.',
                    'image' => 'image/config_rtx5060.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 7 7800X3D',
                        'gpu' => 'NVIDIA GeForce RTX 5060',
                        'ram' => '16 Go DDR5',
                        'resolution' => 'QHD (1440p)',
                    ],
                ],
                [
                    'name' => 'RTX 4090 - Le Sommet du Gaming',
                    'description' => 'Une carte pour les passionnés ne voulant aucun compromis en 4K.',
                    'image' => 'image/config_rtx4090.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i9-13900K',
                        'gpu' => 'NVIDIA GeForce RTX 4090',
                        'ram' => '32 Go DDR5',
                        'resolution' => '4K (2160p)',
                    ],
                ],
                [
                    'name' => 'RTX 4080 - Le Choix de l\'Excellence',
                    'description' => 'Des performances de pointe en 4K, elle gère tous les jeux actuels.',
                    'image' => 'image/config_rtx4080.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 7 7700X',
                        'gpu' => 'NVIDIA GeForce RTX 4080',
                        'ram' => '32 Go DDR5',
                        'resolution' => '4K (2160p)',
                    ],
                ],
                [
                    'name' => 'RTX 4070 - Pour le QHD Serein',
                    'description' => 'L\'équilibre parfait pour jouer en 1440p avec des réglages élevés.',
                    'image' => 'image/config_rtx4070.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i5-13600K',
                        'gpu' => 'NVIDIA GeForce RTX 4070',
                        'ram' => '16 Go DDR5',
                        'resolution' => 'QHD (1440p)',
                    ],
                ],
                [
                    'name' => 'RTX 4060 - L\'Entrée en Matière Ray Tracing',
                    'description' => 'Un excellent point de départ pour le 1080p et la découverte du ray tracing.',
                    'image' => 'image/config_rtx4060.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 5 7600',
                        'gpu' => 'NVIDIA GeForce RTX 4060',
                        'ram' => '16 Go DDR5',
                        'resolution' => 'Full HD (1080p)',
                    ],
                ],
                // Configurations NVIDIA GeForce RTX 30-series (ajoutées)
                [
                    'name' => 'RTX 3090 - La version la plus puissante',
                    'description' => 'La version la plus puissante de la sélection, toujours performante en 4K et pour les charges de travail professionnelles lourdes.',
                    'image' => 'image/config_rtx3090.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i9-13900K',
                        'gpu' => 'NVIDIA GeForce RTX 3090',
                        'ram' => '32 Go DDR4',
                        'resolution' => '4K (2160p)',
                    ],
                ],
                [
                    'name' => 'RTX 3080 GAMING OC',
                    'description' => 'Haut de gamme 3080, bon pour du 4K ou 1440p/120Hz.',
                    'image' => 'image/config_rtx3080oc.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 7 5800X3D',
                        'gpu' => 'NVIDIA GeForce RTX 3080',
                        'ram' => '16 Go DDR4',
                        'resolution' => '4K (2160p)',
                    ],
                ],
                [
                    'name' => 'RTX 3070 EAGLE',
                    'description' => 'Très bon compromis qualité/performance pour le 1440p.',
                    'image' => 'image/config_rtx3070eagle.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i5-12600K',
                        'gpu' => 'NVIDIA GeForce RTX 3070',
                        'ram' => '16 Go DDR4',
                        'resolution' => 'QHD (1440p)',
                    ],
                ],
                [
                    'name' => 'RTX 3060 WINDFORCE',
                    'description' => '12 Go, utile pour certains jeux récents ou usage mixte (jeu + streaming).',
                    'image' => 'image/config_rtx3060windforce.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 5 5600',
                        'gpu' => 'NVIDIA GeForce RTX 3060',
                        'ram' => '16 Go DDR4',
                        'resolution' => 'Full HD (1080p)',
                    ],
                ],
                [
                    'name' => 'RTX 3060 O12G',
                    'description' => 'Version "simple" mais fiable de la 3060, idéale pour le Full HD.',
                    'image' => 'image/config_rtx3060o12g.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i5-12400F',
                        'gpu' => 'NVIDIA GeForce RTX 3060',
                        'ram' => '16 Go DDR4',
                        'resolution' => 'Full HD (1080p)',
                    ],
                ],
                [
                    'name' => 'RTX 3070 (version 8Go)',
                    'description' => 'Une autre déclinaison de la 3070, très performante en 1440p.',
                    'image' => 'image/config_rtx3070.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 5 5600X',
                        'gpu' => 'NVIDIA GeForce RTX 3070',
                        'ram' => '16 Go DDR4',
                        'resolution' => 'QHD (1440p)',
                    ],
                ],
                [
                    'name' => 'RTX 3050 VENTUS XS',
                    'description' => 'Entrée de gamme, bon pour commencer à profiter du ray tracing à faible coût.',
                    'image' => 'image/config_rtx3050ventus.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i3-12100F',
                        'gpu' => 'NVIDIA GeForce RTX 3050',
                        'ram' => '8 Go DDR4',
                        'resolution' => 'Full HD (1080p)',
                    ],
                ],
                [
                    'name' => 'RTX 3050 (version 8Go)',
                    'description' => 'Une autre variante de la 3050, potentiellement moins chère selon le modèle.',
                    'image' => 'image/config_rtx3050.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 3 5300G',
                        'gpu' => 'NVIDIA GeForce RTX 3050',
                        'ram' => '8 Go DDR4',
                        'resolution' => 'Full HD (1080p)',
                    ],
                ],
            ],

            'amd' => [
                // Configurations AMD Radeon RX
                [
                    'name' => 'RX 9070 XT - Le Concurrent du Haut de Gamme',
                    'description' => 'Une alternative puissante pour le 4K et le 1440p avec des performances brutes.',
                    'image' => 'image/config_rx9070xt.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 9 9900X',
                        'gpu' => 'AMD Radeon RX 9070 XT',
                        'ram' => '32 Go DDR5',
                        'resolution' => '4K (2160p)',
                    ],
                ],
                [
                    'name' => 'RX 9070 - L\'efficacité en 4K',
                    'description' => 'Une carte pensée pour les hautes résolutions, optimisée pour le jeu fluide.',
                    'image' => 'image/config_rx9070.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i7-14700K',
                        'gpu' => 'AMD Radeon RX 9070',
                        'ram' => '32 Go DDR5',
                        'resolution' => '4K (2160p)',
                    ],
                ],
                [
                    'name' => 'RX 9060 XT (16Go) - Le 1440p avec plus de VRAM',
                    'description' => 'Un choix durable pour le 1440p, idéal pour les textures haute résolution.',
                    'image' => 'image/config_rx9060xt16.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 7 7700X',
                        'gpu' => 'AMD Radeon RX 9060 XT',
                        'ram' => '32 Go DDR5',
                        'resolution' => 'QHD (1440p)',
                    ],
                ],
                [
                    'name' => 'RX 9060 XT (8Go) - Le choix économique',
                    'description' => 'Une excellente option pour le 1440p sans casser la tirelire, idéale pour la plupart des jeux.',
                    'image' => 'image/config_rx9060xt8.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i5-14600K',
                        'gpu' => 'AMD Radeon RX 9060 XT',
                        'ram' => '16 Go DDR5',
                        'resolution' => 'QHD (1440p)',
                    ],
                ],
                [
                    'name' => 'RX 7900 XTX - La Bête de Course',
                    'description' => 'Des performances sans compromis pour le gaming en 4K, parfaite pour les écrans à haut taux de rafraîchissement.',
                    'image' => 'image/config_rx7900xtx.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 9 7950X',
                        'gpu' => 'AMD Radeon RX 7900 XTX',
                        'ram' => '32 Go DDR5',
                        'resolution' => '4K (2160p)',
                    ],
                ],
                [
                    'name' => 'RX 7900 XT - Puissance et efficacité',
                    'description' => 'Une alternative puissante pour le 4K, offrant un excellent rapport performance/prix.',
                    'image' => 'image/config_rx7900xt.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i7-13700K',
                        'gpu' => 'AMD Radeon RX 7900 XT',
                        'ram' => '32 Go DDR5',
                        'resolution' => '4K (2160p)',
                    ],
                ],
                [
                    'name' => 'RX 7800 XT - Le 1440p par excellence',
                    'description' => 'Un excellent choix pour le QHD, avec un grand potentiel pour les jeux actuels et futurs.',
                    'image' => 'image/config_rx7800xt.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 7 7800X3D',
                        'gpu' => 'AMD Radeon RX 7800 XT',
                        'ram' => '16 Go DDR5',
                        'resolution' => 'QHD (1440p)',
                    ],
                ],
                [
                    'name' => 'RX 7700 XT - L\'équilibre du QHD',
                    'description' => 'Une carte solide pour le 1440p, offrant une expérience de jeu fluide et stable.',
                    'image' => 'image/config_rx7700xt.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i5-13600K',
                        'gpu' => 'AMD Radeon RX 7700 XT',
                        'ram' => '16 Go DDR5',
                        'resolution' => 'QHD (1440p)',
                    ],
                ],
                [
                    'name' => 'RX 7600 XT - Le Full HD optimisé',
                    'description' => 'Idéale pour les écrans Full HD et le gaming compétitif à haut taux de rafraîchissement.',
                    'image' => 'image/config_rx7600xt.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 5 7600',
                        'gpu' => 'AMD Radeon RX 7600 XT',
                        'ram' => '16 Go DDR5',
                        'resolution' => 'Full HD (1080p)',
                    ],
                ],
                [
                    'name' => 'RX 6950 XT - La Puissance d\'Hier',
                    'description' => 'Une bête de course de la génération précédente, toujours performante en 4K.',
                    'image' => 'image/config_rx6950xt.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i7-12700K',
                        'gpu' => 'AMD Radeon RX 6950 XT',
                        'ram' => '32 Go DDR4',
                        'resolution' => '4K (2160p)',
                    ],
                ],
                [
                    'name' => 'RX 6900 XT - Le Haut de Gamme abordable',
                    'description' => 'Excellente option pour le 4K et le QHD, très compétitive sur le marché de l\'occasion.',
                    'image' => 'image/config_rx6900.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 7 5800X3D',
                        'gpu' => 'AMD Radeon RX 6900 XT',
                        'ram' => '32 Go DDR4',
                        'resolution' => 'QHD (1440p)',
                    ],
                ],
                [
                    'name' => 'RX 6800 XT - Un Vétéran Solide',
                    'description' => 'Toujours un excellent choix pour le QHD et la 4K avec des réglages ajustés.',
                    'image' => 'image/config_rx6800xt.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i5-12600K',
                        'gpu' => 'AMD Radeon RX 6800 XT',
                        'ram' => '16 Go DDR4',
                        'resolution' => 'QHD (1440p)',
                    ],
                ],
                [
                    'name' => 'RX 6750 XT - Le Milieu de Gamme Polyvalent',
                    'description' => 'Une carte idéale pour le 1440p, offrant un très bon rapport performance/prix.',
                    'image' => 'image/config_rx6750xt.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 5 5600',
                        'gpu' => 'AMD Radeon RX 6750 XT',
                        'ram' => '16 Go DDR4',
                        'resolution' => 'QHD (1440p)',
                    ],
                ],
                [
                    'name' => 'RX 6700 XT - Le Choix du 1440p Économique',
                    'description' => 'Le meilleur rapport qualité-prix en 1440p, avec de la VRAM pour les jeux du futur.',
                    'image' => 'image/config_rx6700xt.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 5 5600',
                        'gpu' => 'AMD Radeon RX 6700 XT',
                        'ram' => '16 Go DDR4',
                        'resolution' => 'QHD (1440p)',
                    ],
                ],
                [
                    'name' => 'RX 6650 XT - Le Gaming Full HD',
                    'description' => 'Une carte conçue pour des performances élevées en 1080p.',
                    'image' => 'image/config_rx6650xt.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i5-12400F',
                        'gpu' => 'AMD Radeon RX 6650 XT',
                        'ram' => '16 Go DDR4',
                        'resolution' => 'Full HD (1080p)',
                    ],
                ],
                [
                    'name' => 'RX 6600 XT - Un Classique pour l\'Entrée de Gamme',
                    'description' => 'Toujours une référence pour le gaming 1080p fluide et sans accroc.',
                    'image' => 'image/config_rx6600xt.jpg',
                    'components' => [
                        'cpu' => 'AMD Ryzen 5 5500',
                        'gpu' => 'AMD Radeon RX 6600 XT',
                        'ram' => '16 Go DDR4',
                        'resolution' => 'Full HD (1080p)',
                    ],
                ],
            ],
            
            'intel' => [
                // Configurations Intel Arc (Battlemage) - futures
                [
                    'name' => 'Intel Arc B580 - Puissance Battlemage',
                    'description' => 'La prochaine génération de GPU Intel, offrant des performances élevées en 1440p et 4K. Annoncée pour décembre 2024.',
                    'image' => 'image/config_b580.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i7-15700K',
                        'gpu' => 'Intel Arc B580',
                        'ram' => '32 Go DDR5',
                        'resolution' => 'QHD (1440p) / 4K (2160p)',
                    ],
                ],
                [
                    'name' => 'Intel Arc B570 - Le milieu de gamme Battlemage',
                    'description' => 'Une solution récente et puissante pour des performances élevées en 1440p, annoncée pour janvier 2025.',
                    'image' => 'image/config_b570.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i5-15600K',
                        'gpu' => 'Intel Arc B570',
                        'ram' => '16 Go DDR5',
                        'resolution' => 'QHD (1440p)',
                    ],
                ],

                // Configurations Intel Arc (Alchemist) - actuelles
                [
                    'name' => 'Intel Arc A770 - L\'Alternative 1440p',
                    'description' => 'Une carte polyvalente pour le 1440p et la création de contenu, avec le support du Ray Tracing.',
                    'image' => 'image/config_a770.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i5-14600K',
                        'gpu' => 'Intel Arc A770',
                        'ram' => '16 Go DDR5',
                        'resolution' => 'QHD (1440p)',
                    ],
                ],
                [
                    'name' => 'Intel Arc A750 - Le rapport Q/P',
                    'description' => 'Un excellent rapport qualité-prix pour le gaming 1080p, avec des performances solides et des fonctionnalités modernes.',
                    'image' => 'image/config_a750.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i5-13400F',
                        'gpu' => 'Intel Arc A750',
                        'ram' => '16 Go DDR4',
                        'resolution' => 'Full HD (1080p)',
                    ],
                ],
                [
                    'name' => 'Intel Arc A310 - Entrée de gamme compacte',
                    'description' => 'Une version compacte et abordable pour les PC de petite taille et les jeux légers. Idéale pour le Full HD.',
                    'image' => 'image/config_a310.jpg',
                    'components' => [
                        'cpu' => 'Intel Core i3-14100F',
                        'gpu' => 'Intel Arc A310 Low Profile',
                        'ram' => '16 Go DDR4',
                        'resolution' => 'Full HD (1080p)',
                    ],
                ],
            ],
        ];

        return $this->render('hardware/index.html.twig', [
            'configurations' => $configurations,
        ]);
    }
}