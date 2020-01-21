<?php

require_once 'AppController.php';
require_once 'SecurityController.php';
require_once __DIR__.'/../model/Rating.php';
require_once __DIR__.'/../model/RatingMapper.php';
require_once __DIR__.'/../model/Player.php';
require_once __DIR__.'/../model/PlayerMapper.php';

class RatingController extends AppController{
    public function __construct(){
        parent::__construct();
    }
    public function teamsplayers(){
        if(isset($_GET['id_team'])){
            $player = new PlayerMapper();
            $player->getPlayer($_GET['id_team']);
            //echo $player->getPlayer($_GET['id_team']) ? json_encode($player->getPlayer($_GET['id_team'])) : '';
            //$list = array("name" =>$name);
            $this->render('teamsplayers', ['player' => $player->getPlayer($_GET['id_team'])]);
            return;
        }
        $url = "http://$_SERVER[HTTP_HOST]/";
        header("Location: {$url}?page=team");
        exit();
    }
    public function ratingplayers(){

        if(isset($_GET['id_player'])) {

            $player = array("name"=>"Lionel", "surname"=>"Messi", "id_player"=>$_GET['id_player']);
            $this->render('ratingplayers', ['player' => $player, 'test' => 'test2']);
            return;
        }
        // $this->render('login');
        $url = "http://$_SERVER[HTTP_HOST]/";
        header("Location: {$url}?page=player");
        exit();
    }

    //ODDAWANIE GŁOSU
    public function ratingplayer() {
        $mapper = new RatingMapper();
        $Rating = null;
        if(isset($_GET['id_player'])) {
            // $player = array("name"=>"Lionel", "surname"=>"Messi", "id"=>!isset($_GET['id'])

            if($this->isPost()){

                if(isset($_POST['rate'])) {
                    $id = $_POST['uID'];
                    $rating = $_POST['ratedIndex'];
                    $rating++;
                    $id_player = $_GET['id_player']; //$_POST['id_player'];

                    $Rating = $mapper->getRating($id_player, $id);

                    if($Rating === null) {
                        //jeżeli null to dodajemy głos
                        $r = $mapper->addRating($id_player, $id, $rating);
                        // return $this->render('ratingplayers', ['messages' => ['Done']]);
                        $response = array('success'=>1, ['messages' => ['Done']]);
                        http_response_code(200);
                        print_r($response);
                        return;
                    } else {
                        //jeżeli nie to zwracamy kod 201
                        http_response_code(201);
                        print_r($Rating->getRating());
                        return;

                        //PRZYKŁADOWY JSON
                        // http_response_code(404);
                        // $arr = array();
                        // array_push($arr, "cheater");
                        // echo json_encode($arr);
                        // return;
                    }

                    http_response_code(200);
                    print_r($Rating->getRating());
                    return;
                }
            }
        }
        http_response_code(400);
        print_r('Wystapil blad');
        return;
    }
}