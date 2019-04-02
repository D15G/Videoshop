<?php

unset($_SESSION['formdata']);

$emojis = [
    'https://github.githubassets.com/images/icons/emoji/unicode/1f601.png',
    'https://github.githubassets.com/images/icons/emoji/unicode/1f620.png'
];

$ausleihenDb = new AusleihModel();
$ausleihen = $ausleihenDb->getAll();

require 'app/views/status.view.php';