<?php

require_once './mail.php';
$emailFunc = new Mail();

if (isset($_POST["action"]) && $_POST["action"] == "forgetPass") {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";


    $email =  $_POST["femail"];

    $emailFunc->registerMail($email);
}
