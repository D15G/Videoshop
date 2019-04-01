<?php
/**
 * Created by IntelliJ IDEA.
 * User: David
 * Date: 01.04.2019
 * Time: 09:02
 */

class AusleihModel {

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

    public function create(string $name, string $) {
        $statement = $this->pdo->prepare('Insert Into tasks (title) VALUES (:task)');
        $statement->bindParam(':task', $task);
        $statement->execute();
    }

}