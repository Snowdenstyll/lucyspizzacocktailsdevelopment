<?php
/* 
require_once('vendor/autoload.php');

class SmartyController extends Smarty {
   
   public function __construct()
   {

      \Leaf\View::attach(self);
      $this->setTemplateDir('app/views/templates/');
      $this->setConfigDir(StoragePath());
      $this->setCompileDir(StoragePath('framework/views'));
      $this->setCacheDir(StoragePath('framework/views'));

      $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
   }

   static function getInstance () {
      return $this;
   }
} */