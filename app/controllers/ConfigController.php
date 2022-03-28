<?php

use Phalcon\Mvc\Controller;


class ConfigController extends Controller
{
    public function indexAction()
    {
        $config = $this->di->get('config');
        $this->view->configData = $config->app;
        
        // return '<h1>Hello World!</h1>';
    }
}