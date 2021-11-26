<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $Subjekt = $_POST["subjekt"];
    $mailfrom = $_POST["mail"];
    $Nachricht = $_POST["Nachricht"];

    $mailTo = "dennis.drosse@web.de";
    $headers = "From: " . $mailfrom;
    $txt = "Du hast eine Email von " . $name . ".\n\n" . $Nachricht;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: formular.php?mailsend");
}
