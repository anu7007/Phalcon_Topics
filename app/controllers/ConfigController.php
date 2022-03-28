<?php

use Phalcon\Mvc\Controller;


class ConfigController extends Controller
{
    public function indexAction()
    {
        $config = $this->container->get('config');
        $this->view->configData = $config->app;
        
        // return '<h1>Hello World!</h1>';
    }
}