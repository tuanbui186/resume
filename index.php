<?php
//phalconTUT/index.php
    

try {

    //Comment01
    $loader = new \Phalcon\Loader();
    $loader->registerDirs(array(
        'app/controllers/', 
        'app/models/',
        'app/views',  
    ))->register();

    //Comment02
    $di = new Phalcon\DI\FactoryDefault();

    //Comment03
    $di->set('view', function(){
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir('app/views/');
        return $view;
    });
    
    //Comment04

    $di->set('url', function(){
        $url = new \Phalcon\Mvc\Url();
        $url->setBaseUri('/my_resume/');
        return $url;
    });
    
    //Comment05
    $application = new \Phalcon\Mvc\Application($di);

    
    echo $application->handle()->getContent();

} catch(\Phalcon\Exception $e) {
    echo "PhalconException: ", $e->getMessage();
}