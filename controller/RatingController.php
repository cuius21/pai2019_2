<?php

require_once 'AppController.php';
require_once __DIR__.'/../model/User.php';
require_once __DIR__.'/../model/Rating.php';
require_once __DIR__.'/../model/RatingMapper.php';

class RatingController extends AppController{
    public function __construct(){
        parent::__construct();
    }
    public function ratingplayers(){
        $mapper = new RatingMapper();
        $Rating = null;

        if($this->isPost()){
            $rating = real_escape_string($_POST['ratedIndex']);
            $rating++;

            $id_player = 1; //$_POST['id_player'];
            $id = $_POST['uID'];
            $Rating = $mapper->getRating($rating, $id_player, $id);

            if(!$Rating){
                $mapper->addRating($_POST['id_player'], $_POST['id'], $_POST['rating']);
                return $this->render('rating', ['messages' => ['Done']]);
            }
            else{
                return $this->render('rating', ['You have marked this player earlier.']);
            }
        }
    }
}