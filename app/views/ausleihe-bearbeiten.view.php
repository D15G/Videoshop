<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/styles.css">

    <title>Erfassen</title>
</head>
<body>
<div class="wrapper">
    <form method="post" action="bearbeiten-speichern" id="formular">

        <ul id="errorList"></ul>

        <fieldset>
            <legend>Person</legend>

            <input type="hidden" id="id" name="id" value="<?= e($id) ?>">

            <div class="form-group">
                <label for="name" class="form-label">Name:</label><p class="required-star"> *</p>
                <input class="form-control" value="<?= e($ausleihe['name']) ?>" type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email:</label><p class="required-star"> *</p>
                <input class="form-control" value="<?= e($ausleihe['email']) ?>" type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="phone">Telefonnummer</label>
                <input class="form-control" value="<?= e($ausleihe['telefon']) ?>" type="text" id="phone" name="phone">
            </div>

        </fieldset>

        <fieldset>
            <legend>Ausleih Details</legend>

            <div class="form-group">
                <label class="form-label" for="movie">Video:</label><p class="required-star"> *</p>
                <select class="form-control" id="movie" name="movie">
                    <?php foreach ($films as $index => $film) { ?>
                        <option value="<?= e($film['id']) ?>"
                            <?php
                                if($film['id'] === $ausleihe['fk_ausgeleihtes_video']) {
                                    echo 'selected';
                                }
                            ?>
                        ><?= e($film['title']) ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label" for="ausleih_status">Ausleih-Status</label>
                <div class="radio">
                    <label><input type="radio" name="ausleih_status" id="ausleih_status" value="0" checked> Ausgeliehen</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="ausleih_status" id="ausleih_status" value="1"> Zurückgebracht</label>
                </div>
            </div>

        </fieldset>

        <div class="form-actions">
            <input class="btn btn-primary" value="Speichern" type="submit">
            <input class="btn btn-secondary" value="Zurück" onclick="window.location = '/videoshop'">
        </div>

    </form>
    <script src="public/js/formValidation.js"></script>
</div>
</body>
</html>