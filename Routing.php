<?php
require_once 'controller/SecurityController.php';

class Routing{
    //tablica routes zawiera klucz odpowiadajacy stronie
    private $routes=[];

    public function __construct(){
        $this->routes=[
          'register' => [
            'controller' => 'SecurityController',
            'action' => 'login'],
           'login' => [
                'controller' => 'SecurityController',
                'action' => 'login'],
            'home' =>[
                 'controller' => 'SecurityController',
                 'action' => 'home'
            ],
            'team' =>[
                'controller' => 'SecurityController',
                'action' => 'team'
            ]
        ];
    }
    public function run(){
        $page = isset($_GET['page']) ? $_GET['page'] : 'login';
        if (isset($this->routes[$page])){
            $controller = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            $object = new $controller;
            $object->$action();
        }
    }
}