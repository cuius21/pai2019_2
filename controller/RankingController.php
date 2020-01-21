<?php
require_once 'AppController.php';
require_once 'SecurityController.php';
require_once __DIR__.'/../model/Rating.php';
require_once __DIR__.'/../model/RatingMapper.php';
require_once __DIR__.'/../model/Player.php';
require_once __DIR__.'/../model/PlayerMapper.php';


class RankingController extends AppController{
    public function __construct(){
        parent::__construct();
    }
    public function top100(){
        $player = new PlayerMapper();
        $player->getRankingPlayers();
        $laligaplayer = new PlayerMapper();
        $laligaplayer->getLaLigaPlayers();
        $premierleagueplayer = new PlayerMapper();
        $premierleagueplayer->getPremierLeaguePlayers();
        //echo $player->getRankingPlayers() ? json_encode($player->getRankingPlayers()) : '';
        $this->render('top100', ['player' => $player->getRankingPlayers(), 'laligaplayer' => $laligaplayer->getLaLigaPlayers(), 'premierleagueplayer' => $premierleagueplayer->getPremierLeaguePlayers()]);
        return;
    }
}
