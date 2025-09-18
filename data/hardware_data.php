<?php

return [
    'gpus' => [
        'nvidia' => [
            // NVIDIA GeForce RTX 50 Series
            [
                'name' => 'NVIDIA GeForce RTX 5090',
                'description' => 'La prochaine génération de puissance graphique.',
                'vram' => '24 Go GDDR7',
                'interface' => 'PCIe 5.0',
                'tdp' => '450W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 5080',
                'description' => 'Performances extrêmes pour les joueurs exigeants.',
                'vram' => '16 Go GDDR7',
                'interface' => 'PCIe 5.0',
                'tdp' => '320W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 5070',
                'description' => 'Le meilleur rapport qualité-prix en haut de gamme.',
                'vram' => '12 Go GDDR7',
                'interface' => 'PCIe 5.0',
                'tdp' => '250W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 5060',
                'description' => 'Des performances solides pour le gaming 1440p.',
                'vram' => '8 Go GDDR7',
                'interface' => 'PCIe 5.0',
                'tdp' => '180W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 5050',
                'description' => 'La nouvelle entrée de gamme pour le 1080p.',
                'vram' => '6 Go GDDR7',
                'interface' => 'PCIe 5.0',
                'tdp' => '120W'
            ],
            // NVIDIA GeForce RTX 40 Series
            [
                'name' => 'NVIDIA GeForce RTX 4090',
                'description' => 'L\'ultime carte graphique pour le gaming et la création.',
                'vram' => '24 Go GDDR6X',
                'interface' => 'PCIe 4.0',
                'tdp' => '450W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 4080',
                'description' => 'Un monstre de performance pour le 4K et le ray tracing.',
                'vram' => '16 Go GDDR6X',
                'interface' => 'PCIe 4.0',
                'tdp' => '320W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 4070 Ti',
                'description' => 'Un équilibre parfait entre puissance et efficacité.',
                'vram' => '12 Go GDDR6X',
                'interface' => 'PCIe 4.0',
                'tdp' => '285W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 4070',
                'description' => 'Excellente pour le 1440p avec les fonctionnalités RTX.',
                'vram' => '12 Go GDDR6X',
                'interface' => 'PCIe 4.0',
                'tdp' => '200W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 4060 Ti',
                'description' => 'Milieu de gamme idéal pour le 1080p.',
                'vram' => '8 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '160W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 4060',
                'description' => 'Une solution abordable pour les jeux Full HD.',
                'vram' => '8 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '115W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 4050',
                'description' => 'Entrée de gamme pour les jeux à petit budget.',
                'vram' => '6 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '90W'
            ],
            // NVIDIA GeForce RTX 30 Series
            [
                'name' => 'NVIDIA GeForce RTX 3090',
                'description' => 'Haut de gamme pour le 4K et le travail professionnel.',
                'vram' => '24 Go GDDR6X',
                'interface' => 'PCIe 4.0',
                'tdp' => '350W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 3080',
                'description' => 'Un classique pour le gaming en 4K.',
                'vram' => '10 Go GDDR6X',
                'interface' => 'PCIe 4.0',
                'tdp' => '320W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 3070 Ti',
                'description' => 'Une version améliorée de la 3070.',
                'vram' => '8 Go GDDR6X',
                'interface' => 'PCIe 4.0',
                'tdp' => '290W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 3070',
                'description' => 'Parfaite pour les jeux en 1440p.',
                'vram' => '8 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '220W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 3060 Ti',
                'description' => 'Performances excellentes pour le Full HD.',
                'vram' => '8 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '200W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 3060',
                'description' => 'Très populaire pour le 1080p.',
                'vram' => '12 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '170W'
            ],
            [
                'name' => 'NVIDIA GeForce RTX 3050',
                'description' => 'Entrée de gamme avec le ray tracing.',
                'vram' => '8 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '130W'
            ],
            // NVIDIA GeForce GTX 16 Series
            [
                'name' => 'NVIDIA GeForce GTX 1660 Ti',
                'description' => 'Une carte performante pour le gaming Full HD.',
                'vram' => '6 Go GDDR6',
                'interface' => 'PCIe 3.0',
                'tdp' => '120W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 1660 Super',
                'description' => 'Mise à jour de la 1660 avec de la VRAM plus rapide.',
                'vram' => '6 Go GDDR6',
                'interface' => 'PCIe 3.0',
                'tdp' => '125W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 1660',
                'description' => 'Une valeur sûre pour le 1080p.',
                'vram' => '6 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '120W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 1650 Super',
                'description' => 'Bonnes performances en entrée de gamme.',
                'vram' => '4 Go GDDR6',
                'interface' => 'PCIe 3.0',
                'tdp' => '100W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 1650',
                'description' => 'Idéale pour les configurations d\'entrée de gamme.',
                'vram' => '4 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '75W'
            ],
            // NVIDIA GeForce GTX 10 Series
            [
                'name' => 'NVIDIA GeForce GTX 1080 Ti',
                'description' => 'Un monstre de puissance de son époque.',
                'vram' => '11 Go GDDR5X',
                'interface' => 'PCIe 3.0',
                'tdp' => '250W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 1080',
                'description' => 'La carte de référence pour le gaming 1440p en son temps.',
                'vram' => '8 Go GDDR5X',
                'interface' => 'PCIe 3.0',
                'tdp' => '180W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 1070 Ti',
                'description' => 'Une version améliorée de la 1070.',
                'vram' => '8 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '180W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 1070',
                'description' => 'Excellente pour le gaming en 1440p.',
                'vram' => '8 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '150W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 1060',
                'description' => 'Une des cartes les plus populaires.',
                'vram' => '6 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '120W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 1050 Ti',
                'description' => 'Une valeur sûre en entrée de gamme.',
                'vram' => '4 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '75W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 1050',
                'description' => 'Idéale pour les jeux légers et les eSports.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '75W'
            ],
            // NVIDIA GeForce GTX 900 Series
            [
                'name' => 'NVIDIA GeForce GTX 980 Ti',
                'description' => 'Un modèle haut de gamme de son époque.',
                'vram' => '6 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '250W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 980',
                'description' => 'La référence en son temps.',
                'vram' => '4 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '165W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 970',
                'description' => 'Très populaire pour le 1080p.',
                'vram' => '4 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '145W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 960',
                'description' => 'Bonnes performances en entrée de gamme.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '120W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 950',
                'description' => 'Une carte d\'entrée de gamme efficace.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '90W'
            ],
            // NVIDIA GeForce GTX 700 Series
            [
                'name' => 'NVIDIA GeForce GTX 780 Ti',
                'description' => 'Un modèle puissant de sa génération.',
                'vram' => '3 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '250W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 780',
                'description' => 'Haut de gamme pour les jeux gourmands.',
                'vram' => '3 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '250W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 770',
                'description' => 'Excellente pour le 1080p.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '230W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 760',
                'description' => 'Une valeur sûre en milieu de gamme.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '170W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 750 Ti',
                'description' => 'Faible consommation et pas de connecteur d\'alimentation.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '60W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 750',
                'description' => 'Idéale pour les PC de bureau.',
                'vram' => '1 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '55W'
            ],
            // NVIDIA GeForce GTX 600 Series
            [
                'name' => 'NVIDIA GeForce GTX 680',
                'description' => 'La référence en son temps.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '195W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 670',
                'description' => 'Des performances solides en Full HD.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '170W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 660 Ti',
                'description' => 'Un bon choix pour le gaming 1080p.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '150W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 660',
                'description' => 'Très populaire pour son rapport qualité-prix.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '140W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 650 Ti',
                'description' => 'Entrée de gamme performante.',
                'vram' => '1 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '110W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 650',
                'description' => 'Pour les jeux eSports et les tâches multimédia.',
                'vram' => '1 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '64W'
            ],
            // NVIDIA GeForce GTX 500 Series
            [
                'name' => 'NVIDIA GeForce GTX 580',
                'description' => 'La carte haut de gamme de sa génération.',
                'vram' => '1.5 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '244W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 570',
                'description' => 'Un bon rapport performance-prix à l\'époque.',
                'vram' => '1.25 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '219W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 560 Ti',
                'description' => 'Une valeur sûre pour le Full HD.',
                'vram' => '1 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '170W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 560',
                'description' => 'Bonnes performances pour son prix.',
                'vram' => '1 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '150W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 550 Ti',
                'description' => 'Une carte d\'entrée de gamme solide.',
                'vram' => '1 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '116W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 550',
                'description' => 'Pour les configurations d\'entrée de gamme.',
                'vram' => '1 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '116W'
            ],
            // NVIDIA GeForce GTX 400 Series
            [
                'name' => 'NVIDIA GeForce GTX 480',
                'description' => 'Le premier GPU de la série Fermi.',
                'vram' => '1.5 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '250W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 470',
                'description' => 'Une version plus abordable de la 480.',
                'vram' => '1.25 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '215W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 460',
                'description' => 'Populaire pour son rapport performance-prix.',
                'vram' => '1 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '160W'
            ],
            // NVIDIA GeForce GTX 200 Series
            [
                'name' => 'NVIDIA GeForce GTX 280',
                'description' => 'Le GPU le plus rapide de son temps.',
                'vram' => '1 Go GDDR3',
                'interface' => 'PCIe 2.0',
                'tdp' => '236W'
            ],
            [
                'name' => 'NVIDIA GeForce GTX 260',
                'description' => 'Une alternative moins chère à la 280.',
                'vram' => '896 Mo GDDR3',
                'interface' => 'PCIe 2.0',
                'tdp' => '182W'
            ],
            // NVIDIA GeForce 8 Series
            [
                'name' => 'NVIDIA GeForce 8800 Ultra',
                'description' => 'Le haut de gamme de la série 8.',
                'vram' => '768 Mo GDDR3',
                'interface' => 'PCIe 1.0',
                'tdp' => '175W'
            ],
            [
                'name' => 'NVIDIA GeForce 8800 GTX',
                'description' => 'Une des cartes les plus performantes de son époque.',
                'vram' => '768 Mo GDDR3',
                'interface' => 'PCIe 1.0',
                'tdp' => '165W'
            ],
            [
                'name' => 'NVIDIA GeForce 8800 GTS',
                'description' => 'Milieu de gamme haut de la série 8.',
                'vram' => '640 Mo GDDR3',
                'interface' => 'PCIe 1.0',
                'tdp' => '165W'
            ],
            // NVIDIA GeForce 7 Series
            [
                'name' => 'NVIDIA GeForce 7800 GTX',
                'description' => 'Haut de gamme de sa génération.',
                'vram' => '256 Mo GDDR3',
                'interface' => 'PCIe 1.0',
                'tdp' => '110W'
            ],
            [
                'name' => 'NVIDIA GeForce 7600 GT',
                'description' => 'Bonnes performances en milieu de gamme.',
                'vram' => '256 Mo GDDR3',
                'interface' => 'PCIe 1.0',
                'tdp' => '60W'
            ],
            // NVIDIA GeForce 6 Series
            [
                'name' => 'NVIDIA GeForce 6800 Ultra',
                'description' => 'Le modèle phare de sa génération.',
                'vram' => '256 Mo GDDR3',
                'interface' => 'AGP 8x',
                'tdp' => '110W'
            ],
            [
                'name' => 'NVIDIA GeForce 6600 GT',
                'description' => 'Très populaire pour son rapport qualité-prix.',
                'vram' => '128 Mo GDDR3',
                'interface' => 'AGP 8x',
                'tdp' => '50W'
            ],
            // NVIDIA GeForce FX Series
            [
                'name' => 'NVIDIA GeForce FX 5900 Ultra',
                'description' => 'Une carte performante pour l\'époque.',
                'vram' => '256 Mo GDDR',
                'interface' => 'AGP 8x',
                'tdp' => '60W'
            ],
            // NVIDIA GeForce 4 Series
            [
                'name' => 'NVIDIA GeForce 4 Ti 4600',
                'description' => 'Un monstre de puissance à sa sortie.',
                'vram' => '128 Mo DDR',
                'interface' => 'AGP 4x',
                'tdp' => '50W'
            ],
            [
                'name' => 'NVIDIA GeForce 4 MX 440',
                'description' => 'Un bon équilibre entre prix et performance.',
                'vram' => '64 Mo DDR',
                'interface' => 'AGP 4x',
                'tdp' => '12W'
            ],
            [
                'name' => 'NVIDIA GeForce 4200',
                'description' => 'La carte d\'entrée de gamme de la série 4.',
                'vram' => '64 Mo DDR',
                'interface' => 'AGP 4x',
                'tdp' => '10W'
            ],
            // NVIDIA GeForce 3 Series
            [
                'name' => 'NVIDIA GeForce 3 Ti 500',
                'description' => 'La version améliorée de la série 3.',
                'vram' => '64 Mo DDR',
                'interface' => 'AGP 4x',
                'tdp' => '25W'
            ],
            [
                'name' => 'NVIDIA GeForce 3',
                'description' => 'Une carte haut de gamme de son époque.',
                'vram' => '64 Mo DDR',
                'interface' => 'AGP 4x',
                'tdp' => '20W'
            ]
        ],
        'amd' => [
            // AMD Radeon RX 9000 Series
            [
                'name' => 'AMD Radeon RX 9900 XTX',
                'description' => 'La nouvelle génération de cartes graphiques AMD.',
                'vram' => '32 Go GDDR7',
                'interface' => 'PCIe 5.0',
                'tdp' => '400W'
            ],
            [
                'name' => 'AMD Radeon RX 9800 XT',
                'description' => 'Performances de pointe pour le 4K.',
                'vram' => '24 Go GDDR7',
                'interface' => 'PCIe 5.0',
                'tdp' => '350W'
            ],
            // AMD Radeon RX 7000 Series
            [
                'name' => 'AMD Radeon RX 7900 XTX',
                'description' => 'Une concurrente de taille pour la performance brute.',
                'vram' => '24 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '355W'
            ],
            [
                'name' => 'AMD Radeon RX 7900 XT',
                'description' => 'Haut de gamme pour le 4K et plus.',
                'vram' => '20 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '300W'
            ],
            [
                'name' => 'AMD Radeon RX 7800 XT',
                'description' => 'Un excellent rapport qualité-prix pour le 1440p.',
                'vram' => '16 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '263W'
            ],
            [
                'name' => 'AMD Radeon RX 7700 XT',
                'description' => 'Performances solides en 1440p avec un bon prix.',
                'vram' => '12 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '245W'
            ],
            [
                'name' => 'AMD Radeon RX 7600',
                'description' => 'Idéale pour le gaming Full HD.',
                'vram' => '8 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '165W'
            ],
            // AMD Radeon RX 6000 Series
            [
                'name' => 'AMD Radeon RX 6950 XT',
                'description' => 'La plus performante de la série 6000.',
                'vram' => '16 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '335W'
            ],
            [
                'name' => 'AMD Radeon RX 6900 XT',
                'description' => 'Haut de gamme pour le 4K.',
                'vram' => '16 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '300W'
            ],
            [
                'name' => 'AMD Radeon RX 6800 XT',
                'description' => 'Un excellent choix pour le 1440p.',
                'vram' => '16 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '300W'
            ],
            [
                'name' => 'AMD Radeon RX 6800',
                'description' => 'Performances solides pour le 1440p.',
                'vram' => '16 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '250W'
            ],
            [
                'name' => 'AMD Radeon RX 6700 XT',
                'description' => 'Parfaite pour le 1440p.',
                'vram' => '12 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '230W'
            ],
            [
                'name' => 'AMD Radeon RX 6650 XT',
                'description' => 'Une mise à jour de la 6600 XT.',
                'vram' => '8 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '176W'
            ],
            [
                'name' => 'AMD Radeon RX 6600 XT',
                'description' => 'Un excellent choix pour le 1080p à haut taux de rafraîchissement.',
                'vram' => '8 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '160W'
            ],
            [
                'name' => 'AMD Radeon RX 6600',
                'description' => 'Idéale pour le gaming Full HD.',
                'vram' => '8 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '132W'
            ],
            [
                'name' => 'AMD Radeon RX 6500 XT',
                'description' => 'Entrée de gamme abordable pour le 1080p.',
                'vram' => '4 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '107W'
            ],
            [
                'name' => 'AMD Radeon RX 6400',
                'description' => 'Ultra-compacte et économe en énergie.',
                'vram' => '4 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '53W'
            ],
            // AMD Radeon RX 5000 Series
            [
                'name' => 'AMD Radeon RX 5700 XT',
                'description' => 'Performances élevées pour le 1440p.',
                'vram' => '8 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '225W'
            ],
            [
                'name' => 'AMD Radeon RX 5700',
                'description' => 'Bon rapport performance-prix.',
                'vram' => '8 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '185W'
            ],
            [
                'name' => 'AMD Radeon RX 5600 XT',
                'description' => 'Un excellent choix pour le 1080p.',
                'vram' => '6 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '150W'
            ],
            [
                'name' => 'AMD Radeon RX 5500 XT',
                'description' => 'Milieu de gamme pour le 1080p.',
                'vram' => '4 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '130W'
            ],
            // AMD Radeon R9 300 Series
            [
                'name' => 'AMD Radeon R9 390X',
                'description' => 'Haut de gamme pour le 1440p.',
                'vram' => '8 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '275W'
            ],
            [
                'name' => 'AMD Radeon R9 380',
                'description' => 'Un bon choix pour le Full HD.',
                'vram' => '4 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '190W'
            ],
            // AMD Radeon R7 300 Series
            [
                'name' => 'AMD Radeon R7 370',
                'description' => 'Un bon choix pour le Full HD.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '180W'
            ],
            // AMD Radeon R7 200 Series
            [
                'name' => 'AMD Radeon R7 260X',
                'description' => 'Performances d\'entrée de gamme correctes.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '115W'
            ],
            // AMD Radeon HD 7000 Series
            [
                'name' => 'AMD Radeon HD 7970',
                'description' => 'La première carte haut de gamme avec la technologie GCN.',
                'vram' => '3 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '250W'
            ],
            [
                'name' => 'AMD Radeon HD 7950',
                'description' => 'Une alternative moins chère à la 7970.',
                'vram' => '3 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '200W'
            ],
            [
                'name' => 'AMD Radeon HD 7870',
                'description' => 'Un excellent compromis performance-prix.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '175W'
            ],
            [
                'name' => 'AMD Radeon HD 7850',
                'description' => 'Milieu de gamme avec un bon potentiel d\'overclocking.',
                'vram' => '1 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '130W'
            ],
            [
                'name' => 'AMD Radeon HD 7770',
                'description' => 'Une carte d\'entrée de gamme efficace.',
                'vram' => '1 Go GDDR5',
                'interface' => 'PCIe 3.0',
                'tdp' => '80W'
            ],
            // AMD Radeon HD 6000 Series
            [
                'name' => 'AMD Radeon HD 6970',
                'description' => 'Haut de gamme de sa génération.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '250W'
            ],
            [
                'name' => 'AMD Radeon HD 6950',
                'description' => 'Une option puissante et moins chère que la 6970.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '200W'
            ],
            [
                'name' => 'AMD Radeon HD 6870',
                'description' => 'Un bon rapport qualité-prix en milieu de gamme.',
                'vram' => '1 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '151W'
            ],
            // AMD Radeon HD 5000 Series
            [
                'name' => 'AMD Radeon HD 5870',
                'description' => 'La première carte à supporter DirectX 11.',
                'vram' => '1 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '188W'
            ],
            [
                'name' => 'AMD Radeon HD 5850',
                'description' => 'Performances élevées pour son prix.',
                'vram' => '1 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '151W'
            ],
            [
                'name' => 'AMD Radeon HD 5770',
                'description' => 'Très populaire en milieu de gamme.',
                'vram' => '1 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '108W'
            ],
            // AMD Radeon HD 4000 Series
            [
                'name' => 'AMD Radeon HD 4870 X2',
                'description' => 'Double GPU pour des performances extrêmes.',
                'vram' => '2 Go GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '286W'
            ],
            [
                'name' => 'AMD Radeon HD 4870',
                'description' => 'La première carte avec de la GDDR5.',
                'vram' => '512 Mo GDDR5',
                'interface' => 'PCIe 2.0',
                'tdp' => '160W'
            ],
            // AMD Radeon HD 3000 Series
            [
                'name' => 'AMD Radeon HD 3870',
                'description' => 'Un bon choix en milieu de gamme à l\'époque.',
                'vram' => '512 Mo GDDR4',
                'interface' => 'PCIe 2.0',
                'tdp' => '105W'
            ],
            [
                'name' => 'AMD Radeon HD 3850',
                'description' => 'Entrée de gamme performante.',
                'vram' => '256 Mo GDDR3',
                'interface' => 'PCIe 2.0',
                'tdp' => '75W'
            ],
            // AMD Radeon HD 2000 Series
            [
                'name' => 'AMD Radeon HD 2900 XT',
                'description' => 'Haut de gamme pour sa génération.',
                'vram' => '512 Mo GDDR3',
                'interface' => 'PCIe 1.0',
                'tdp' => '215W'
            ],
            [
                'name' => 'AMD Radeon HD 2600 XT',
                'description' => 'Milieu de gamme solide.',
                'vram' => '256 Mo GDDR3',
                'interface' => 'PCIe 1.0',
                'tdp' => '45W'
            ],
            [
                'name' => 'AMD Radeon HD 2400 Pro',
                'description' => 'Entrée de gamme pour les PC de bureau.',
                'vram' => '256 Mo DDR2',
                'interface' => 'PCIe 1.0',
                'tdp' => '20W'
            ],
            // AMD Radeon HD 1000 Series
            [
                'name' => 'AMD Radeon HD 1950 XTX',
                'description' => 'Une carte puissante de sa génération.',
                'vram' => '512 Mo GDDR4',
                'interface' => 'AGP 8x',
                'tdp' => '120W'
            ],
            [
                'name' => 'AMD Radeon HD 1900 XT',
                'description' => 'Haut de gamme de son temps.',
                'vram' => '512 Mo GDDR3',
                'interface' => 'PCIe 1.0',
                'tdp' => '115W'
            ],
            [
                'name' => 'AMD Radeon HD 1800 XT',
                'description' => 'Un monstre de puissance à son époque.',
                'vram' => '512 Mo GDDR3',
                'interface' => 'PCIe 1.0',
                'tdp' => '100W'
            ],
            [
                'name' => 'AMD Radeon HD 1650 XT',
                'description' => 'Milieu de gamme pour le gaming.',
                'vram' => '256 Mo GDDR3',
                'interface' => 'PCIe 1.0',
                'tdp' => '50W'
            ],
            [
                'name' => 'AMD Radeon HD 1600 Pro',
                'description' => 'Un bon choix en entrée de gamme.',
                'vram' => '256 Mo DDR2',
                'interface' => 'PCIe 1.0',
                'tdp' => '40W'
            ],
            // AMD Radeon X Series
            [
                'name' => 'AMD Radeon X1950 XTX',
                'description' => 'Une carte puissante de sa génération.',
                'vram' => '512 Mo GDDR3',
                'interface' => 'AGP 8x',
                'tdp' => '120W'
            ],
            [
                'name' => 'AMD Radeon X1800 XT',
                'description' => 'Haut de gamme avec un bon prix.',
                'vram' => '256 Mo GDDR3',
                'interface' => 'AGP 8x',
                'tdp' => '100W'
            ],
            [
                'name' => 'AMD Radeon X1600 Pro',
                'description' => 'Un excellent compromis.',
                'vram' => '256 Mo GDDR2',
                'interface' => 'PCIe 1.0',
                'tdp' => '40W'
            ],
            [
                'name' => 'AMD Radeon X1300 Pro',
                'description' => 'Entrée de gamme pour les PC de bureau.',
                'vram' => '256 Mo DDR2',
                'interface' => 'PCIe 1.0',
                'tdp' => '30W'
            ],
            [
                'name' => 'AMD Radeon X1300',
                'description' => 'Pour le travail et les jeux légers.',
                'vram' => '128 Mo DDR2',
                'interface' => 'PCIe 1.0',
                'tdp' => '25W'
            ],
            [
                'name' => 'AMD Radeon X850 XT Platinum Edition',
                'description' => 'Haut de gamme pour sa génération.',
                'vram' => '256 Mo GDDR3',
                'interface' => 'AGP 8x',
                'tdp' => '110W'
            ],
            [
                'name' => 'AMD Radeon X800 XT',
                'description' => 'Puissante carte haut de gamme.',
                'vram' => '256 Mo GDDR3',
                'interface' => 'AGP 8x',
                'tdp' => '90W'
            ],
            [
                'name' => 'AMD Radeon X700 Pro',
                'description' => 'Milieu de gamme avec un bon rapport qualité-prix.',
                'vram' => '256 Mo DDR',
                'interface' => 'PCIe 1.0',
                'tdp' => '40W'
            ],
            [
                'name' => 'AMD Radeon X600 Pro',
                'description' => 'Entrée de gamme avec de bonnes performances.',
                'vram' => '128 Mo DDR',
                'interface' => 'PCIe 1.0',
                'tdp' => '20W'
            ]
        ],
        'intel' => [
            // Intel Arc
            [
                'name' => 'Intel Arc A770',
                'description' => 'Un concurrent sérieux pour le gaming milieu de gamme.',
                'vram' => '16 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '225W'
            ],
            [
                'name' => 'Intel Arc A750',
                'description' => 'Performances excellentes pour le 1080p.',
                'vram' => '8 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '225W'
            ],
            [
                'name' => 'Intel Arc A580',
                'description' => 'Un choix solide pour les jeux en Full HD.',
                'vram' => '8 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '175W'
            ],
            [
                'name' => 'Intel Arc A380',
                'description' => 'Entrée de gamme pour le gaming occasionnel.',
                'vram' => '6 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '75W'
            ],
            [
                'name' => 'Intel Arc A310',
                'description' => 'Pour les tâches de productivité et les jeux légers.',
                'vram' => '4 Go GDDR6',
                'interface' => 'PCIe 4.0',
                'tdp' => '75W'
            ]
        ]
    ],
    'cpus' => [
        // Intel Core Series
        [
            'name' => 'Intel Core i9-14900K',
            'description' => 'Le processeur le plus puissant pour les jeux et la création.',
            'cores' => '24',
            'threads' => '32',
            'frequency' => '6.0 GHz'
        ],
        [
            'name' => 'Intel Core i7-14700K',
            'description' => 'Performances extrêmes pour les joueurs et les créateurs de contenu.',
            'cores' => '20',
            'threads' => '28',
            'frequency' => '5.6 GHz'
        ],
        [
            'name' => 'Intel Core i5-14600K',
            'description' => 'Le champion du rapport performance-prix pour le gaming.',
            'cores' => '14',
            'threads' => '20',
            'frequency' => '5.3 GHz'
        ],
        [
            'name' => 'Intel Core i9-13900K',
            'description' => 'Le processeur le plus puissant pour les jeux et la création.',
            'cores' => '24',
            'threads' => '32',
            'frequency' => '5.8 GHz'
        ],
        [
            'name' => 'Intel Core i7-13700K',
            'description' => 'Un monstre de puissance pour les jeux et le multitâche lourd.',
            'cores' => '16',
            'threads' => '24',
            'frequency' => '5.4 GHz'
        ],
        [
            'name' => 'Intel Core i5-13600K',
            'description' => 'Un champion du rapport performance-prix.',
            'cores' => '14',
            'threads' => '20',
            'frequency' => '5.1 GHz'
        ],
        // AMD Ryzen Series
        [
            'name' => 'AMD Ryzen 9 7950X3D',
            'description' => 'Le meilleur processeur de gaming grâce au 3D V-Cache.',
            'cores' => '16',
            'threads' => '32',
            'frequency' => '5.7 GHz'
        ],
        [
            'name' => 'AMD Ryzen 9 7950X',
            'description' => 'Le processeur haut de gamme pour les créateurs de contenu.',
            'cores' => '16',
            'threads' => '32',
            'frequency' => '5.7 GHz'
        ],
        [
            'name' => 'AMD Ryzen 7 7800X3D',
            'description' => 'Le meilleur processeur pour le gaming.',
            'cores' => '8',
            'threads' => '16',
            'frequency' => '5.0 GHz'
        ],
        [
            'name' => 'AMD Ryzen 7 7700X',
            'description' => 'Un excellent choix pour les joueurs et les streamers.',
            'cores' => '8',
            'threads' => '16',
            'frequency' => '5.4 GHz'
        ],
        [
            'name' => 'AMD Ryzen 5 7600X',
                'description' => 'Le meilleur rapport qualité-prix en milieu de gamme.',
                'cores' => '6',
                'threads' => '12',
                'frequency' => '5.3 GHz'
        ]
    ]
];