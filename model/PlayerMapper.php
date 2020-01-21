<?php
require_once 'Player.php';
require_once __DIR__.'/../Database.php';

class PlayerMapper{
    private $database;

    public function __construct(){
        $this->database = new Database();
    }

    public function getPlayer(int $id_team){
        try{
            $stmt = $this->database->connect()->prepare('SELECT Player.id_player, Player.name, Player.surname FROM Player INNER JOIN Team ON Player.id_team = Team.id_team WHERE Team.id_team = :id_team;');
            $stmt->bindParam(':id_team', $id_team, PDO::PARAM_STR);
            $stmt->execute();

            $Player = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $Player;
        }catch (PDOException $e){
            return 'Error: ' .$e->getMessage();
        }
    }

    public function getRankingPlayers(){
        try{
            $stmt = $this->database->connect()->prepare('SELECT AVG(Rating.rating), Player.id_player, Player.name, Player.surname FROM Player INNER JOIN Rating ON Player.id_player = Rating.id_player GROUP BY Player.id_player ORDER BY AVG(Rating.rating) DESC LIMIT 100;');
            $stmt->bindParam(':id_player', $id_player, PDO::PARAM_STR);
            $stmt->execute();

            $Player = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $Player;
        } catch (PDOException $e){
            return 'Error: ' .$e->getMessage();
        }
    }
    public function getLaLigaPlayers(){
        try{
            $stmt = $this->database->connect()->prepare('SELECT AVG(Rating.rating), Player.id_player, Player.name, Player.surname FROM Player INNER JOIN Rating ON Player.id_player = Rating.id_player INNER JOIN Team ON Player.id_team = Team.id_team INNER JOIN League ON Team.id_league = League.id_league WHERE League.id_league = 1 GROUP BY Player.id_player, Player.name, Player.surname ORDER BY AVG(Rating.rating) DESC LIMIT 100;');
            $stmt->bindParam(':id_player', $id_player, PDO::PARAM_STR);
            $stmt->execute();

            $Player = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $Player;
        } catch (PDOException $e){
            return 'Error: ' .$e->getMessage();
        }
    }
    public function getPremierLeaguePlayers(){
        try{
            $stmt = $this->database->connect()->prepare('SELECT AVG(Rating.rating), Player.id_player, Player.name, Player.surname FROM Player INNER JOIN Rating ON Player.id_player = Rating.id_player INNER JOIN Team ON Player.id_team = Team.id_team INNER JOIN League ON Team.id_league = League.id_league WHERE League.id_league = 2 GROUP BY Player.id_player, Player.name, Player.surname ORDER BY AVG(Rating.rating) DESC LIMIT 100;');
            $stmt->bindParam(':id_player', $id_player, PDO::PARAM_STR);
            $stmt->execute();

            $Player = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $Player;
        } catch (PDOException $e){
            return 'Error: ' .$e->getMessage();
        }
    }
}
