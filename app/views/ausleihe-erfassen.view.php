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
        <form method="post" action="kontrolle">
            <fieldset>
                <legend>Person</legend>

                <div class="form-group">
                    <label for="name" class="form-label">Name:</label><p class="required-star"> *</p>
                    <input class="form-control" type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email:</label><p class="required-star"> *</p>
                    <input class="form-control" type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="phone">Telefonnummer</label>
                    <input class="form-control" type="text" id="phone" name="phone">
                </div>

                <div class="form-group">
                    <label class="form-label" for="member-status">Mitgliedschaftsstatus:</label><p class="required-star"> *</p>
                    <select class="form-control" id="member-status" name="member-status">
                        <option value="">Keine</option>
                        <option value="Bronze">Bronze</option>
                        <option value="Silber">Silber</option>
                        <option value="Gold">Gold</option>
                    </select>
                </div>

            </fieldset>

            <fieldset>
                <legend>Ausleih Details</legend>

                <div class="form-group">
                    <label class="form-label" for="movie">Video:</label><p class="required-star"> *</p>
                    <select class="form-control" id="movie" name="movie">
                        <?php foreach ($films as $index => $film) { ?>
                            <option value="<?php echo $film['id'] ?>"><?= $film['title']?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label" for="enddate">Ausleihe Enddatum:</label>
                    <input class="form-control" type="text" id="enddate" name="enddate" disabled>
                </div>

                <div class="form-actions">
                    <input class="btn btn-primary" type="submit" value="Absenden">
                </div>

            </fieldset>

        </form>
    </div>

    <script src="public/js/ausleihe-enddatum.js"></script>

</body>
</html>