<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Ausleihe Status</title>
</head>
<body>
    <div class="wrapper">
        <h1>Status Page</h1>
        <form action="bearbeiten" method="post">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Video</th>
                    <th scope="col">Rückgabe</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($ausleihen as $ausleihe) {
                        $emoji;
                        if ($ausleihe['ausleih_status'] === '0') {
                            if ((time()-(60*60*24)) < strtotime($ausleihe['enddatum'])) {
                                $emoji = $emojis[0];
                            } else {
                                $emoji = $emojis[1];
                            }
                        } else {
                            $emoji = '';
                        }
                ?>
                <tr>
                    <th scope="row">
                        <button class="table-button btn btn-light" type="submit" name="ausleihe" value="<?= $ausleihe['id'] ?>">
                            <span class="glyphicon glyphicon-pencil"></span></p>
                        </button>
                    </th>
                    <td><?= $ausleihe['name'] ?></td>
                    <td><?= $ausleihe['title'] ?></td>
                    <td><?= $ausleihe['enddatum'] ?></td>
                    <td><img class="icon" src="<?= $emoji ?>"></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </form>
    </div>
</body>
</html>