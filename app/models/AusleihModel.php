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
        $statement = $this->pdo->prepare('Select * from ausleihen a 
                                                    inner join movies m on a.fk_ausgeleihtes_video = m.id 
                                                    where a.ausleih_status = 0 Order by a.ausleihdatum asc');
        $statement->execute();

        return $statement->fetchAll();
    }

    public function getAusleiheById(int $id): array {
        $statement = $this->pdo->prepare('Select * from ausleihen where id = :id');
        $statement->bindParam(':id', $id);
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

        $statement = $this->pdo->prepare('Insert Into ausleihen VALUES (:name, :email, :telefon, :ausleihStatus, :mitgliedStatus, :video, :enddatum)');
        $statement->bindParam(':name', $name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':telefon', $telefon);
        $statement->bindParam(':ausleihStatus', $ausleih_status);
        $statement->bindParam(':mitgliedStatus', $mitgliederschafts_status);
        $statement->bindParam(':video', $ausgeleihtes_video);
        $statement->bindParam(':enddatum', $enddatum);

        $statement->execute();
    }

}