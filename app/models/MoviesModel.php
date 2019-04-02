<?php

class MoviesModel {

    private $pdo;

    public function __construct()
    {
        $this->pdo = connectToDatabase();
    }

    public function getAll(): array {
        $stmt = $this->pdo->prepare('SELECT * FROM movies');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getMovieById(int $id) {
        $stmt = $this->pdo->prepare('SELECT * FROM movies Where id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();

    }

    public function getAllMovieIds() {
        $stmt = $this->pdo->prepare('SELECT id FROM movies');
        $stmt->execute();

        return $stmt->fetchAll();
    }

}