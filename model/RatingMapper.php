<?php
require_once 'Rating.php';
require_once __DIR__.'/../Database.php';

class RatingMapper{
    private $database;

    public function __construct(){
        $this->database = new Database();
    }
    public function addRating(int $id_player, int $id, int $rating){
        try{
            $stmt = $this->database->connect()->prepare('INSERT INTO Rating (id_player, id, rating) VALUES (:id_player, :id, :rating);');
            $stmt->bindParam(':id_player', $id_player, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->bindParam(':rating', $rating, PDO::PARAM_STR);
            $res = $stmt->execute();
            // $Rating = $stmt->fetch(PDO::FETCH_ASSOC);
            return $res;
        } catch (PDOException $e){
            return 'Error: ' .$e->getMessage();
        }
    }
    public function getRating(int $id_player, int $id) {
        try{
            $stmt = $this->database->connect()->prepare('SELECT id_star, rating FROM Rating INNER JOIN Users ON Users.id = Rating.id INNER JOIN Player ON Player.id_player = Rating.id_player WHERE Player.id_player = :id_player AND Rating.id = :id');
            $stmt->bindParam(':id_player', $id_player, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            // $stmt->bindParam(':rating', $rating, PDO::PARAM_STR);
            $stmt->execute();

            $Rating = $stmt->fetch(PDO::FETCH_ASSOC);
            // return $Rating;
            if(isset($Rating['id_star']))
                return new Rating($Rating['id_star'], $id_player, $id, $Rating['rating']);
            else
                return null;

        }catch (PDOException $e){
            return 'Error: ' . $e->getMessage();
        }
    }
    public function getAllUserRatings(int $id){
        try{
            $stmt = $this->database->connect()->prepare('SELECT COUNT(id_star) FROM Rating INNER JOIN Users ON Rating.id = Users.id WHERE Rating.id = :id');
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            // $stmt->bindParam(':rating', $rating, PDO::PARAM_STR);
            $stmt->execute();

            $Rating = $stmt->fetch(PDO::FETCH_ASSOC);
            return $Rating;

        }catch (PDOException $e){
            return 'Error: ' . $e->getMessage();
        }
    }
    public function getBestPlayer(int $id){
        try{
            $stmt = $this->database->connect()->prepare('SELECT MAX(Rating.rating), Rating.id_star, Player.name, Player.surname FROM Rating INNER JOIN Player ON Player.id_player = Rating.id_player INNER JOIN Users ON Rating.id = Users.id WHERE Rating.id = :id GROUP BY Rating.id_star ORDER BY MAX(Rating.rating) DESC LIMIT 1');
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            // $stmt->bindParam(':rating', $rating, PDO::PARAM_STR);
            $stmt->execute();

            $Rating = $stmt->fetch(PDO::FETCH_ASSOC);
            return $Rating;

        }catch (PDOException $e){
            return 'Error: ' . $e->getMessage();
        }
    }
    public function getWorstPlayer(int $id){
        try{
            $stmt = $this->database->connect()->prepare('SELECT MIN(Rating.rating), Rating.id_star, Player.name, Player.surname FROM Rating INNER JOIN Player ON Player.id_player = Rating.id_player INNER JOIN Users ON Rating.id = Users.id WHERE Rating.id = :id GROUP BY Rating.id_star ORDER BY MIN(Rating.rating) LIMIT 1');
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            // $stmt->bindParam(':rating', $rating, PDO::PARAM_STR);
            $stmt->execute();

            $Rating = $stmt->fetch(PDO::FETCH_ASSOC);
            return $Rating;

        }catch (PDOException $e){
            return 'Error: ' . $e->getMessage();
        }
    }
    public function getAvgTeam(int $id_team){
        try{
            $stmt = $this->database->connect()->prepare('SELECT AVG(Rating.rating),Team.id_team, Team.name FROM Rating INNER JOIN Player ON Rating.id_player = Player.id_player INNER JOIN Team ON Team.id_team = Player.id_team WHERE Team.id_team = :id_team GROUP BY Team.id_team, Team.name');
            $stmt->bindParam(':id_team', $id_team, PDO::PARAM_STR);
            $stmt->execute();
            $Rating = $stmt->fetch(PDO::FETCH_ASSOC);

            return $Rating;
        }catch (PDOException $e){
            return 'Error: ' . $e->getMessage();
        }
    }
}
