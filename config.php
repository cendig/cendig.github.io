<?php
function mapPosts($posts) {
    return collect($posts)->map(function ($post) {
        return [
            'title' => $post->title,
            'slug' => $post->slug,
            'content' => $post->body,
            'excerpt' => $post->excerpt,
            'featured_image' => env('API_URL') . $post->featured_image,
            'featured_image_caption' => $post->featured_image_caption,
            'publish_date' => $post->publish_date,
            'meta' => [
                'meta_description' => $post->meta->meta_description,
                'opengraph_title' => $post->meta->opengraph_title,
                'opengraph_description' => $post->meta->opengraph_description,
                'opengraph_image' => $post->meta->opengraph_image,
                'opengraph_image_width' => $post->meta->opengraph_image_width,
                'opengraph_image_height' => $post->meta->opengraph_image_height,
                'twitter_title' => $post->meta->twitter_title,
                'twitter_description' => $post->meta->twitter_description,
                'twitter_image' => $post->meta->twitter_image,
            ],
            'author' =>  [
                'id' => $post->author->id,
                'slug' => $post->author->slug,
                'name'	=> $post->author->name,
                'email'	=> $post->author->email,
                'bio' => $post->author->bio,
                'avatar' => $post->author->avatar,
                'created_at' => $post->author->created_at,
                'updated_at' => $post->author->updated_at,
                'meta' => $post->author->meta,
            ],
        ];
    });
}

return [
    'production' => false,
    'baseUrl' => '',
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

    'collections' => [
        'case_studies' => [
            'path' => 'our-work/{filename}',
        ],
//        'authors' => [
//            'extends' => '_layouts.author',
//            'path' => 'authors/{slug}',
//            'items' => function () {
//                $authors = json_decode(file_get_contents(env('API_URL') . '/rest/authors?api_key=' . env('API_KEY'), 'r'));
//
//                return collect($authors)->map(function ($author) {
//                    $posts = mapPosts($author->posts);
//
//                    return [
//                        'id' => $author->id,
//                        'slug' => $author->slug,
//                        'name'	=> $author->name,
//                        'email'	=> $author->email,
//                        'bio' => $author->bio,
//                        'avatar' => $author->avatar,
//                        'created_at' => $author->created_at,
//                        'updated_at' => $author->updated_at,
//                        'meta' => $author->meta,
//                        'posts' => $posts,
//                    ];
//                });
//            }
//        ],
        'posts' => [
            'extends' => '_layouts.insights',
            'path' => 'insights/{slug}',
            'items' => function () {
                $posts = json_decode(file_get_contents(env('API_URL') . '/rest/posts?api_key=' . env('API_KEY'),'r'));
                return mapPosts($posts);
            },
        ],
        'tags' => [
            'items' => function () {
                $tags = json_decode(file_get_contents(env('API_URL') . '/rest/tags?api_key=' . env('API_KEY')));

                return collect($tags)->map(function ($tag) {
                    return [
                        'name' => $tag->name,
                        'slug' => $tag->slug,
                    ];
                });
            },
        ],
    ],
];


