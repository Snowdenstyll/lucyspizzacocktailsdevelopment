<?php

namespace App\Controllers;

use Leaf\Config as conf;
/**
 * This is the base controller for your Leaf MVC Project.
 * You can initialize packages or define methods here to use
 * them across all your other controllers which extend this one.
 */
class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->smarty->assign('css_dir', conf::get('css_dir'));
        $this->smarty->assign('assets_dir', conf::get('assets_dir'));
        $this->smarty->assign('js_dir', conf::get('js_dir'));
    }

    public function index () {
        $this->smarty->assign('name', 'Ned');
        $this->smarty->display('index.tmpl');
    }
    
}
