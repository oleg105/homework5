<?php

$email = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (empty($_POST['email'])) {
        die('Поле не заполнено.');
    }

    $email = $_POST['email'];

    $file = fopen('subscribers.txt', 'a');

    if ($file === false) {
        die('Невозможно создать файл.');
    }

    fputs($file, $email . "\n");
    fclose($file);


}
include 'mail_form.html';