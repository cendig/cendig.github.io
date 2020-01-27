<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [
        'case_studies' => [
            'path' => 'our-work/{filename}',
        ],
    ],

    'siteName' => 'Centrisign Digital | Enterprise Software Development, Design & Consulting',

    'siteDescription' => 'Centrisign Digital is an innovative and reliable Enterprise Software Development, Design & Consulting provider in the Kenyan and african market. We have vast experience in the Retail, E-commerce and Payments Industry.',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },

    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },

    'url' => function ($page, $path) {
        return starts_with($path, 'http') ? $path : '/' . trimPath($path);
    },
];
