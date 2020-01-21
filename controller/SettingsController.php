<?php
require_once 'AppController.php';
require_once 'SecurityController.php';
require_once __DIR__.'/../model/Rating.php';
require_once __DIR__.'/../model/RatingMapper.php';
require_once __DIR__.'/../model/Player.php';
require_once __DIR__.'/../model/PlayerMapper.php';
require_once __DIR__.'/../model/User.php';
require_once __DIR__.'/../model/UserMapper.php';

class SettingsController extends AppController{
    public function __construct(){
        parent::__construct();
    }
    public function settings(): void{
        $user = new UserMapper();
        $countrates = new RatingMapper();
        $max = new RatingMapper();
        $min = new RatingMapper();
        session_start();
        $id = $_SESSION['id'];
        $user->getDetails((int)$id);
        $countrates->getAllUserRatings((int)$id);
        $max->getBestPlayer((int)$id);
        //echo $max->getBestPlayer($id) ? json_encode($max->getBestPlayer($id)) : '';
        $min->getWorstPlayer((int)$id);
        $this->render('settings', ['user' => $user->getDetails((int)$id), 'countrates' => $countrates->getAllUserRatings((int)$id), 'max' => $max->getBestPlayer((int)$id), 'min' => $min->getWorstPlayer((int)$id)]);
    }

    public function httpResponse(int $response, int $code): void{
        http_response_code($code);
        print_r($response);
    }

    public function comparison(){
        $mapper = new RatingMapper();
        if($this->isPost() && isset($_POST['rate'])){
            $team1_id = $_POST['firstTeam'];
            $team2_id = $_POST['secondTeam'];

            $team1 = $mapper->getAvgTeam($team1_id);
            $team2 = $mapper->getAvgTeam($team2_id);

            if(!($team1['AVG(Rating.rating)']) || !($team2['AVG(Rating.rating)'])){
                return $this->httpResponse(0, 201);
            }

            if($team1['AVG(Rating.rating)'] > $team2['AVG(Rating.rating)']){
                $response = $team1['AVG(Rating.rating)'];
                return $this->httpResponse($response, 200);
            }

            if ($team1['AVG(Rating.rating)'] < $team2['AVG(Rating.rating)']){
                $response = $team2['AVG(Rating.rating)'];
                return $this->httpResponse($response, 202);
            }

            $response = 1;
            http_response_code(203);
            print_r($response);
            return;
        }
    }
    public function users(): void{
        $user = new UserMapper();
        header('Content-type: application/json');
        http_response_code(200);
        echo $user->getUsers() ? json_encode($user->getUsers()) : '';
    }
    public function userDelete(): void{
        if(!isset($_POST['id'])){
            http_response_code(404);
            return;
        }
        $user = new UserMapper();
        $user->delete((int)$_POST['id']);

        http_response_code(200);
    }
}