<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $ausleihe = new AusleihModel();

    $ausleihe->deleteAusleiheById($_POST['id']);

}

echo "<script>window.location = '/videoshop'</script>";