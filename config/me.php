<?php

return [
    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'name'  => 'GIT.WTF!?!',
    'owner' => [
        'name' => 'Mandeep Singh'
    ],
    'website' => 'https://www.msingh.com',
    'summary' => 'Git is hard: screwing up is easy, and figuring out how to fix your mistakes is fucking impossible. So here are some common bad situations and how you can get out of them in plain english*.',

    'email' => 'hi@msingh.com',

    'social' => [
        'twitter' => 'gitwtf',
        'github'  => 'meSingh/git.wtf'
    ],

    'authors' => [
        'msingh' => [
            'name' => 'Mandeep Singh',
            'link' => 'https://www.msingh.com',
            'avatar' => '//gravatar.com/avatar/09611408673cf517d7d357bf748fbd43?s=200'
        ],
        'bsahil' => [
            'name' => 'Sahil Bhatacharya',
            'link' => 'https://bsahil.com',
            'avatar' => '//avatars3.githubusercontent.com/u/7153650?s=200&v=4'
        ],
        'matija' => [
            'name' => 'Matija Marohnić',
            'link' => 'https://silvenon.com',
            'avatar' => '//gravatar.com/avatar/6d95827ad2de5f374947b02983d4c85b?s=200'
        ]
    ],

    // 'categories' => [
    //     'solving-mistories' => 'Solving Mistories',
    //     'mistakes-correction' => 'Mistakes Correction',
    //     'acidents-recovery' => 'Acidents Recovery',
    //     'fuck' => 'Fuck'
    // ],

    'seo' => [
        'title'       => 'Git.WTF!?! - Figure out ways to fix GIT screw-ups',
        'description' => 'Git.WTF is a curated list of solutions & examples for fixing your most annoying git problems & frustrations in seconds.'
    ],

    'rss' => [
        'title'       => 'Git.WTF!?! - Figure out ways to fix GIT screw-ups',
        'description' => 'Git.WTF is a curated list of solutions & examples for fixing your most annoying git problems & frustrations in seconds.'
    ],

    'extras' => [
        'robots' => env('ALLOW_ROBOTS', true),
    ],
];
