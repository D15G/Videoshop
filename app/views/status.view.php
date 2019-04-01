<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Ausleihe Status</title>
</head>
<body>
    <div class="wrapper">
        <h1>Status Page</h1>
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
            <?php foreach($ausleihen as $index => $ausleihe) { ?>
            <tr>
                <th scope="row"><?php echo $index ?></th>
                <td><?php echo $ausleihe['name']; ?></td>
                <td><?php echo $ausleihe['video']; ?></td>
                <td><?php echo $ausleihe['rueckgabe']; ?></td>
                <td><img class="icon" src="//github.githubassets.com/images/icons/emoji/unicode/1f601.png"></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>