<?php
$translator = new \Zend\I18n\Translator\Translator;
return array(
    // All navigation-related configuration is collected in the 'navigation' key
    'navigation' => array(
        // The DefaultNavigationFactory we configured in (1) uses 'default' as the sitemap key
        'default' => array(
            // And finally, here is where we define our page hierarchy
            'Home_menu' => array(
                'label' => $translator->translate('Home'),
                'route' => 'home',
            ),
            'Tutorial_menu' => array(
                'label' => $translator->translate('Tutorials'),
                'route' => 'home',
                'pages' => array(
                    'filler1' => array(
                        'label' => 'Filler #1',
                        'route' => 'home',
                    ),
                    'filler2' => array(
                        'label' => 'Filler #2',
                        'route' => 'home',
                    ),
                    'filler3' => array(
                        'label' => 'Filler #3',
                        'route' => 'home',
                    ),
                    'filler4' => array(
                        'label' => 'Filler #4',
                        'route' => 'home',
                    ),
                ),
            ),
            'CV_menu' => array(
                'label' => $translator->translate('CV'),
                'route' => 'cv',
            ),
            'Project_menu' => array(
                'label' => $translator->translate('Projects'),
                'route' => 'home',
                'pages' => array(
                    'filler1' => array(
                        'label' => 'Filler #1',
                        'route' => 'home',
                    ),
                    'filler2' => array(
                        'label' => 'Filler #2',
                        'route' => 'home',
                    ),
                    'filler3' => array(
                        'label' => 'Filler #3',
                        'route' => 'home',
                    ),
                    'filler4' => array(
                        'label' => 'Filler #4',
                        'route' => 'home',
                    ),
                ),
            ),
            'Hobbies_menu' => array(
                'label' => $translator->translate('Hobbies'),
                'route' => 'home',
                'pages' => array(
                    'filler1' => array(
                        'label' => 'Filler #1',
                        'route' => 'home',
                    ),
                    'filler2' => array(
                        'label' => 'Filler #2',
                        'route' => 'home',
                    ),
                    'filler3' => array(
                        'label' => 'Filler #3',
                        'route' => 'home',
                    ),
                    'filler4' => array(
                        'label' => 'Filler #4',
                        'route' => 'home',
                    ),
                ),
            ),
            'Profile_menu' => array(
                'label' => $translator->translate('Profile'),
                'route' => 'home',
                'pages' => array(
                    'Linkedin' => array(
                        'label' => 'Linkedin',
                        'uri' => 'https://fr.linkedin.com/pub/steven-jalabert/69/24a/890',
                    ),
                    'Youtube' => array(
                        'label' => 'Youtube',
                        'uri' => 'https://www.youtube.com/user/stevenstrike',
                    ),
                    'Steam' => array(
                        'label' => 'Steam',
                        'uri' => 'http://steamcommunity.com/id/stevenstrike/',
                    ),
                    'LastFM' => array(
                        'label' => 'LastFM',
                        'uri' => 'http://www.lastfm.fr/user/stevenstrike',
                    ),
                ),
            ),
            'Testimonials_menu' => array(
                'label' => $translator->translate('Testimonials'),
                'route' => 'home',
            ),
            'About_menu' => array(
                'label' => $translator->translate('About'),
                'route' => 'home',
            ),
            'Contact_menu' => array(
                'label' => $translator->translate('Contact Me'),
                'uri' => 'mailto:steven.jalabert@gmail.com',
            ),
        ),
    ),
);