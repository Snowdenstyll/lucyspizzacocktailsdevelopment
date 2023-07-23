<?php

use Leaf\View;
require 'vendor/autoload.php';

$smarty = new \Smarty();
return [
    /*
    |--------------------------------------------------------------------------
    | Template Engine [EXPERIMENTAL]
    |--------------------------------------------------------------------------
    |
    | Leaf MVC unlike other frameworks tries to give you as much control as
    | you need. As such, you can decide which view engine to use.
    |
    */
    'view_engine' => \Leaf\View::attach($smarty),

    /*
    |--------------------------------------------------------------------------
    | Custom config method
    |--------------------------------------------------------------------------
    |
    | Configuration for your templating engine.
    |
    */
    'config' => function ($config) {
        $smarty->setTemplateDir('app/views/templates/');
        $smarty->setConfigDir(StoragePath());
        $smarty->setCompileDir(StoragePath('framework/views'));
        $smarty->setCacheDir(StoragePath('framework/views'));
    },

    /*
    |--------------------------------------------------------------------------
    | Custom render method
    |--------------------------------------------------------------------------
    |
    | This render method is triggered whenever render() is called
    | in your app if you're using a custom view engine.
    |
    */
    'render' => null,
];
