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
            if(isset($_POST['save'])) {
                $id = $_POST['uID'];
                $rating = $_POST['ratedIndex'];
                $rating++;
                $id_player = 1; //$_POST['id_player'];

                $Rating = $mapper->addRating($id_player, $id, $rating);

                if (!$Rating) {
                    $mapper->addRating($_POST['id_player'], $_POST['id'], $_POST['rating']);
                    return $this->render('ratingplayers', ['messages' => ['Done']]);
                } else {
                    return $this->render('ratingplayers', ['You have marked this player earlier.']);
                }
            }
        }
        $this->render('ratingplayers');
    }
}