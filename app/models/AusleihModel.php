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
        $statement = $this->pdo->prepare('Select a.id, a.name, m.title, a.enddatum from ausleihen a 
                                                    inner join movies m on a.fk_ausgeleihtes_video = m.id 
                                                    where a.ausleih_status = 0 Order by a.ausleihdatum asc');
        $statement->execute();

        return $statement->fetchAll();
    }

    public function getAusleiheById(int $id): array {
        $statement = $this->pdo->prepare('Select * from ausleihen where id = :id');
        $statement->bindParam(':id', $id);
        $statement->execute();

        return $statement->fetch();
    }

    public function updateAusleihe($name, $email, $telefon, $movie, $ausleih_status, $id) {
        $statement = $this->pdo->prepare('Update ausleihen 
                                                    set `name` = :namee,
                                                    email = :email, 
                                                    telefon = :telefon, 
                                                    fk_ausgeleihtes_video = :movie, 
                                                    ausleih_status = :ausleih_status
                                                    where id = :id');
        $statement->bindParam(':namee', $name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':telefon', $telefon);
        $statement->bindParam(':movie', $movie);
        $statement->bindParam(':ausleih_status', $ausleih_status);
        $statement->bindParam(':id', $id);

        $statement->execute();

    }

    public function create(string $name,
                           string $email,
                           string $telefon,
                           string $ausleih_status,
                           string $mitgliederschafts_status,
                           int $ausgeleihtes_video,
                           string $ausleihdatum,
                           string $enddatum): int {

        $statement = $this->pdo->prepare('Insert Into ausleihen(`name`, email, telefon, ausleih_status, mitgliederschafts_status, fk_ausgeleihtes_video, ausleihdatum, enddatum) VALUES (:namee, :email, :telefon, :ausleihStatus, :mitgliedStatus, :video, :ausleihDatum, :enddatum)');
        $statement->bindParam(':namee', $name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':telefon', $telefon);
        $statement->bindParam(':ausleihStatus', $ausleih_status);
        $statement->bindParam(':mitgliedStatus', $mitgliederschafts_status);
        $statement->bindParam(':video', $ausgeleihtes_video);
        $statement->bindParam(':ausleihDatum', $ausleihdatum);
        $statement->bindParam(':enddatum', $enddatum);

        $statement->execute();

        return $this->pdo->lastInsertId();

    }

    public function deleteAusleiheById(string $id) {
        $statement = $this->pdo->prepare('Delete From ausleihen Where id = :id');
        $statement->bindParam(':id', $id);
        $statement->execute();
    }

}