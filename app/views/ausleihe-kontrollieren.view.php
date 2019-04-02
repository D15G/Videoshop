<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
    <link rel="stylesheet" href="public/css/ausleiheKontrollierenStyle.css">

    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <h1>Kontrolliere bitte deine Eingaben</h1>
        <form action="absenden" method="post">
            <div class="input-container">

                <h5 for="name">Name:</h5>
                <p name="name" id="name"><?= $name ?></p><br>

                <h5>Email: </h5>
                <p><?= $email ?></p><br>

                <h5>Telefonnummer:</h5>
                <p><?php

                    if ($telefon === '') {
                        echo 'Keine';
                    } else {
                        echo $telefon;
                    }

                    ?></p><br>

                <h5>Mitgliedschaftsstatus:</h5>
                <p><?php
                    if ($mitgliedschafts_status === '') {
                        echo 'Keiner';
                    } else {
                        echo $mitgliedschafts_status;
                    }
                    ?>
                </p><br>

                <h5>Video:</h5>
                <p><?= $movieTitle[1] ?></p><br>
        </form>

        <div class="form-actions">
            <input class="btn btn-primary" value="Bestätigen" onclick="window.location='/videoshop';">
            <button class="btn btn-secondary" value="<?php echo $id ?>" name="id" type="submit">
                Abbrechen
            </button>
        </div>

        </div>
    </div>
</body>
</html>