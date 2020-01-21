<?php

class Player{
    private $id_player;
    private $name;
    private $surname;
    private $id_team;

    public function __construct($id_player, $name, $surname, $id_team){
        $this->id_player = $id_player;
        $this->name = $name;
        $this->surname = $surname;
        $this->id_team = $id_team;
    }
    public function setName($name): void{
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setSurname($surname): void{
            $this->surname = $surname;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getId_player(){
        return $this->id_player;
    }
    public function setId_team($id_team): void{
        $this->id_team = $id_team;
    }
    public function getId_team(){
        return $this->id_team;
    }
}
