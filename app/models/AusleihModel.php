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
        $statement = $this->pdo->prepare('Select * from ausleihen');
        $statement->execute();

        return $statement->fetchAll();
    }

    public function create(string $name,
                           string $email,
                           string $telefon,
                           string $ausleih_status,
                           string $mitgliederschafts_status,
                           int $ausgeleihtes_video,
                           string $enddatum) {

        $statement = $this->pdo->prepare('Insert Into tasks VALUES (:name)');
        $statement->bindParam(':task', $task);
        $statement->execute();
    }

}