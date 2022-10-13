<?php

return [
    'debug' => true,
    'whoops' => true,
    'url' => '/',
    'locale' => 'de_DE.utf-8',
    'slugs' => 'de',
    'slugs.maxlength' => 320,
    'smartypants' => true,
    'sitemap.ignore' => ['error'],
    'date' => require_once 'date.php',
    'thumbs' => require_once 'thumbs.php',
    'auth' => require_once 'auth.php',
    'email' => require_once 'email.php',
    'markdown' => require_once 'markdown.php',
    'panel' => require_once 'panel.php',
    'hooks' => require_once 'hooks.php',
    'routes' => require_once 'routes.php',
    'api' => require_once 'api.php',
    'cache' => require_once 'cache.php',
    'session' => require_once 'session.php'
];