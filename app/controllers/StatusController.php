<?php

$ausleihen = array(
    array (
        'name' => 'Timon Schmid',
        'video' => 'Otto',
        'rueckgabe' => '20.02.2020',
        'status' => '0'
    ),
    array (
        'name' => 'David Gataric',
        'video' => 'Baseball',
        'rueckgabe' => '20.01.2020',
        'status' => '1'
    ),
);

require 'app/views/status.view.php';