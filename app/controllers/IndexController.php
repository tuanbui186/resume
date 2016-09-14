<?php
     //phalconTUT/app/controllers/IndexController.php
    class IndexController extends \Phalcon\Mvc\Controller
    {
        public function indexAction()
        {
        	// add css
        	 $this->assets->addCss('public/css/bootstrap.css');	
             $this->assets->addCss('public/css/style.css');
             $this->assets->addCss('public/css/swipebox.css');
             

             // add js			
              $this->assets->addJs('public/js/easing.js');
              $this->assets->addJs('public/js/move-top.js');
        }
        public function showAction()
        {
        	
        } 
    }