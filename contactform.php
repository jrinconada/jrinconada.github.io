<?php
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) || empty($mailFrom) || empty($message)) {
        die("<p class=\"text-danger lead\"><b>All fields are required!</b></p>");
    }

    if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
        die("<p class=\"text-danger lead\"><b>Email format is invalid!</b></p>");
    }

    $mailTo = "info@rinconadalabs.ml";
    $headers = "From: ".$mailFrom;
    $subject = "[Rinconada Labs] contact from ".$name;

    $success = mail($mailTo, $subject, $message, $headers);
    if ($success) {
        echo "<p class=\"text-success lead\"><b>Message sent!</b></p>";
    } else {
        echo "<p class=\"text-danger lead\"><b>Message not send</b></p>";
    }
?>
