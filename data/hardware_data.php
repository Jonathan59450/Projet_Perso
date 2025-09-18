<?php

return [
    'cpus' => [
        'intel' => [
            'current' => [
                'seriesName' => '⚡ Actuels (2025)',
                'products' => [
                    [
                        'name' => 'Core 15e generation (Arrow Lake)',
                        'description' => 'i9-15900K, i9-15900KF, i7-15700K, i5-15500, i3-15100…',
                        'details' => [
                            'family' => 'Core',
                            'generation' => '15e'
                        ]
                    ],
                    [
                        'name' => 'Core 14e generation (Raptor Lake Refresh)',
                        'description' => 'i9-14900K/KF, i7-14700K/KF, i5-14600K/KF, i5-14400, i3-14100.',
                        'details' => [
                            'family' => 'Core',
                            'generation' => '14e'
                        ]
                    ],
                    [
                        'name' => 'Core 13e generation (Raptor Lake)',
                        'description' => 'i9-13900K/KF, i7-13700K/KF, i5-13600K/KF, i5-13400, i3-13100.',
                        'details' => [
                            'family' => 'Core',
                            'generation' => '13e'
                        ]
                    ],
                ],
            ],
            'previous' => [
                'seriesName' => '🖥️ Anciennes generations',
                'products' => [
                    [
                        'name' => '12e gen (Alder Lake)',
                        'description' => 'i9-12900K/KF, i7-12700K/KF, i5-12600K, i5-12400, i3-12100.',
                        'details' => [
                            'family' => 'Core',
                            'generation' => '12e'
                        ]
                    ],
                    [
                        'name' => '11e gen (Rocket Lake)',
                        'description' => 'i9-11900K, i7-11700K, i5-11600K, i5-11400, i3-11100.',
                        'details' => [
                            'family' => 'Core',
                            'generation' => '11e'
                        ]
                    ],
                    [
                        'name' => '10e gen (Comet Lake)',
                        'description' => 'i9-10900K, i7-10700K, i5-10600K, i5-10400, i3-10100.',
                        'details' => [
                            'family' => 'Core',
                            'generation' => '10e'
                        ]
                    ],
                    [
                        'name' => '9e gen (Coffee Lake Refresh)',
                        'description' => 'i9-9900K, i7-9700K, i5-9600K, i5-9400F, i3-9100.',
                        'details' => [
                            'family' => 'Core',
                            'generation' => '9e'
                        ]
                    ],
                    [
                        'name' => '8e gen (Coffee Lake)',
                        'description' => 'i7-8700K, i5-8600K, i5-8400, i3-8100.',
                        'details' => [
                            'family' => 'Core',
                            'generation' => '8e'
                        ]
                    ],
                    [
                        'name' => '7e gen (Kaby Lake)',
                        'description' => 'i7-7700K, i5-7600K, i3-7350K.',
                        'details' => [
                            'family' => 'Core',
                            'generation' => '7e'
                        ]
                    ],
                    [
                        'name' => '6e gen (Skylake)',
                        'description' => 'i7-6700K, i5-6600K, i3-6100.',
                        'details' => [
                            'family' => 'Core',
                            'generation' => '6e'
                        ]
                    ],
                    [
                        'name' => '5e gen (Broadwell)',
                        'description' => 'i7-5775C, i5-5675C.',
                        'details' => [
                            'family' => 'Core',
                            'generation' => '5e'
                        ]
                    ],
                    [
                        'name' => '4e gen (Haswell)',
                        'description' => 'i7-4790K, i5-4690K, i3-4160, Pentium G3258.',
                        'details' => [
                            'family' => 'Core',
                            'generation' => '4e'
                        ]
                    ],
                    [
                        'name' => '3e gen (Ivy Bridge)',
                        'description' => 'i7-3770K, i5-3570K.',
                        'details' => [
                            'family' => 'Core',
                            'generation' => '3e'
                        ]
                    ],
                    [
                        'name' => '2e gen (Sandy Bridge)',
                        'description' => 'i7-2600K, i5-2500K.',
                        'details' => [
                            'family' => 'Core',
                            'generation' => '2e'
                        ]
                    ],
                    [
                        'name' => '1e gen (Nehalem/Westmere)',
                        'description' => 'i7-920, i5-750, i3-530.',
                        'details' => [
                            'family' => 'Core',
                            'generation' => '1e'
                        ]
                    ],
                ],
            ],
            'other' => [
                'seriesName' => '🔹 Gammes annexes',
                'products' => [
                    [
                        'name' => 'Intel Xeon',
                        'description' => 'series W, E, Bronze, Silver, Gold, Platinum (serveurs et stations de travail).',
                        'details' => ['family' => 'Xeon']
                    ],
                    [
                        'name' => 'Intel Pentium',
                        'description' => 'Pentium G, Pentium Gold.',
                        'details' => ['family' => 'Pentium']
                    ],
                    [
                        'name' => 'Intel Celeron',
                        'description' => 'series N, J, G.',
                        'details' => ['family' => 'Celeron']
                    ],
                    [
                        'name' => 'Intel Atom',
                        'description' => 'processeurs basse consommation (tablettes, mini-PC).',
                        'details' => ['family' => 'Atom']
                    ],
                ],
            ],
        ],
        'amd' => [
            'current' => [
                'seriesName' => '⚡ Actuels (2025)',
                'products' => [
                    [
                        'name' => 'Ryzen 9000 (Zen 5)',
                        'description' => 'Ryzen 9 9950X, 9900X, Ryzen 7 9700X, Ryzen 5 9600X.',
                        'details' => [
                            'family' => 'Ryzen',
                            'generation' => '9000'
                        ]
                    ],
                    [
                        'name' => 'Ryzen 7000 (Zen 4)',
                        'description' => 'Ryzen 9 7950X, 7900X, Ryzen 7 7700X, Ryzen 5 7600X, Ryzen 5 7500F.',
                        'details' => [
                            'family' => 'Ryzen',
                            'generation' => '7000'
                        ]
                    ],
                ],
            ],
            'previous' => [
                'seriesName' => '🖥️ Anciennes generations Ryzen',
                'products' => [
                    [
                        'name' => 'Ryzen 5000 (Zen 3)',
                        'description' => 'Ryzen 9 5950X, 5900X, Ryzen 7 5800X, Ryzen 5 5600X, 5500.',
                        'details' => [
                            'family' => 'Ryzen',
                            'generation' => '5000'
                        ]
                    ],
                    [
                        'name' => 'Ryzen 3000 (Zen 2)',
                        'description' => 'Ryzen 9 3950X, 3900X, Ryzen 7 3800X, Ryzen 5 3600, Ryzen 3 3100.',
                        'details' => [
                            'family' => 'Ryzen',
                            'generation' => '3000'
                        ]
                    ],
                    [
                        'name' => 'Ryzen 2000 (Zen+)',
                        'description' => 'Ryzen 7 2700X, 2700, Ryzen 5 2600X, 2600, Ryzen 3 2200G.',
                        'details' => [
                            'family' => 'Ryzen',
                            'generation' => '2000'
                        ]
                    ],
                    [
                        'name' => 'Ryzen 1000 (Zen 1)',
                        'description' => 'Ryzen 7 1800X, Ryzen 5 1600X, Ryzen 3 1200.',
                        'details' => [
                            'family' => 'Ryzen',
                            'generation' => '1000'
                        ]
                    ],
                ],
            ],
            'other' => [
                'seriesName' => '🔹 Gammes annexes',
                'products' => [
                    [
                        'name' => 'Threadripper (HEDT)',
                        'description' => '3990X, 3970X, 3960X (Zen 2), 5995WX, 5975WX (Zen 3), nouvelles series Pro (Zen 4/5).',
                        'details' => ['family' => 'Threadripper']
                    ],
                    [
                        'name' => 'Athlon',
                        'description' => 'Athlon 200GE, Athlon 3000G.',
                        'details' => ['family' => 'Athlon']
                    ],
                    [
                        'name' => 'FX Series (ancienne gamme)',
                        'description' => 'FX-8350, FX-6300, FX-4300.',
                        'details' => ['family' => 'FX']
                    ],
                    [
                        'name' => 'Phenom II',
                        'description' => 'X6 1100T, X4 965, X2 555.',
                        'details' => ['family' => 'Phenom II']
                    ],
                    [
                        'name' => 'Athlon 64 / Athlon II',
                        'description' => 'Athlon 64 3500+, Athlon II X4 640.',
                        'details' => ['family' => 'Athlon 64 / Athlon II']
                    ],
                    [
                        'name' => 'Duron, Sempron',
                        'description' => 'gammes entree de gamme anciennes.',
                        'details' => ['family' => 'Duron, Sempron']
                    ],
                ],
            ],
        ],
    ],
];