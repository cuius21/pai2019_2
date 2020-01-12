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
            $stmt->bindParam(':id_player', $id_player, PDO::PARAM_INT);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':rating', $rating, PDO::PARAM_INT);
            $stmt->execute();
            $Rating = $stmt->fetch(PDO::FETCH_ASSOC);
            return 'Rating added';
        } catch (PDOException $e){
            return 'Error: ' .$e->getMessage();
        }
    }
    public function getRating(int $rating, int $id_player, int $id): ?Rating{
        try{
            $stmt = $this->database->connect()->prepare('SELECT id_star FROM Rating, Users, Player WHERE Player.id_player = :id_player AND Player.id = :id');
            $stmt->bindParam(':id_player', $id_player, PDO::PARAM_INT);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':rating', $rating, PDO::PARAM_INT);
            $stmt->execute();

            $Rating = $stmt->fetch(PDO::FETCH_ASSOC);
            return new Rating($Rating['id_star'], $Rating['id_player'], $Rating['id'], $Rating['rating']);

        }catch (PDOException $e){
            return 'Error: ' . $e->getMessage();
        }
    }
}
