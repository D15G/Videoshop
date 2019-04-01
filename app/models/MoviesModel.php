<?php

class MoviesModel {

    private $pdo;

    public function __construct()
    {
        $this->pdo = connectToDatabase();
    }

    public function getAll(): array {
        $pdo = connectToDatabase();
        $stmt = $pdo->prepare('SELECT * FROM movies');
        $stmt->execute();

        return $stmt->fetchAll();
    }

}