<?php
require_once 'controller/SecurityController.php';
require_once 'controller/RatingController.php';
require_once 'controller/RankingController.php';
require_once 'controller/SettingsController.php';

class Routing{
    //tablica routes zawiera klucz odpowiadajacy stronie
    private $routes=[];

    public function __construct(){
        $this->routes=[
          'register' => [
                'controller' => 'SecurityController',
                'action' => 'register'],
           'login' => [
                'controller' => 'SecurityController',
                'action' => 'login'],
            'logout' =>[
                'controller' => 'SecurityController',
                'action' => 'logout'
            ],
            'team' =>[
                'controller' => 'SecurityController',
                'action' => 'team'
            ],
            'player' =>[
                'controller' => 'SecurityController',
                'action' => 'player'
            ],
            //STRONA KONKRETNEGO PILKARZA
            'ratingplayers' =>[
                'controller' => 'RatingController',
                'action' => 'ratingplayers'
            ],
            //OCENA PILKARZA
            'ratingplayer' =>[
                'controller' => 'RatingController',
                'action' => 'ratingplayer'
            ],
            'teamsplayers' =>[
                'controller' => 'RatingController',
                'action' => 'teamsplayers'
            ],
            'top100' =>[
                'controller' => 'RankingController',
                'action' => 'top100'
            ],
            'settings' =>[
                'controller' => 'SettingsController',
                'action' => 'settings'
            ],
            'comparison' =>[
                'controller'=> 'SettingsController',
                'action' => 'comparison'
            ],
            'httpResponse' =>[
                'controller'=> 'SettingsController',
                'action' => 'httpResponse'
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