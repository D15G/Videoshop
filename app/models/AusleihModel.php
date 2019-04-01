<?php
/**
 * Created by IntelliJ IDEA.
 * User: David
 * Date: 01.04.2019
 * Time: 09:02
 */

class AusleihModel
{

    // zwingend
    public $name;
    public $email;
    public $mitgliedschafts_status;
    public $ausgeleihtes_video;
    public $enddatum;

    // nicht zwingend
    public $telefon;

    public function __construct(string $name,
                                string $email,
                                string $telefon,
                                string $mitgliedschafts_status,
                                int $ausgeleihtes_video,
                                string $enddatum)
    {

        $this->name = $name;
        $this->email = $email;
        $this->telefon = $telefon;
        $this->mitgliedschafts_status = $mitgliedschafts_status;
        $this->ausgeleihtes_video = $ausgeleihtes_video;
        $this->enddatum = $enddatum;

    }

}