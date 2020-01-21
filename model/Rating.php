<?php

class Rating{
    private $id_star;
    private $id_player;
    private $id;
    private $rating;

    public function __construct($id_star, $id_player, $id, $rating){
        $this->id_star = $id_star;
        $this->id_player = $id_player;
        $this->id = $id;
        $this->rating = $rating;
    }

    public function getId_star(){
        return $this->id_star;
    }
    public function setId_player($id_player): void{
        $this->id_player = $id_player;
    }
    public function getId_player(){
        return $this->id_player;
    }
    public function setId($id): void{
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setRating($rating): void{
        $this->rating = $rating;
    }
    public function getRating(){
        return $this->rating;
    }
}
