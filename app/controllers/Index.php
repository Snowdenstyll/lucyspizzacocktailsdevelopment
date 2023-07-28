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
        $this->smarty->assign('store_label', conf::get('store_label'));
        $this->smarty->assign('theme_dir', conf::get('theme_dir'));
        $this->smarty->assign('img_dir', conf::get('img_dir'));
        $this->smarty->assign('vendor_dir', conf::get('vendor_dir'));
        $this->smarty->assign('css_files', $this->getFiles('css'));
        $this->smarty->assign('js_files', $this->getFiles('js'));
    }

    public function index () {
        $this->smarty->display('index.tmpl');
    }

    private function getFiles($dir) {
        $folderPath = null;
        switch ($dir) {
            case 'css':
                $folderPath = conf::get('css_dir') . '/libs/';
                break;
            case 'js':
                $folderPath = conf::get('js_dir') . '/libs/';
                break;
            case 'img':
                $folderPath = conf::get('img_dir');
                break;
            default:
                $folderPath = null;
                break;
        }

        error_log('folderpath' . $folderPath);
        if ($folderPath != null) {
            // Scan the folder and get all the file names
            $files = scandir($folderPath);
            // Remove the "." and ".." entries from the result
            $files = array_diff($files, array('.', '..'));

            return $files;
        }
    }
}