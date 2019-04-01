<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

} else {
    echo "<script>window.location = '/videoshop'</script>";
}

require 'app/views/ausleihe-kontrollieren.view.php';