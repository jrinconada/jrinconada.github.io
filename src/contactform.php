<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "info@rinconadalabs.ml";
        $headers = "From: ".$mailFrom;
        $subject = "[Rinconada Labs] contact from ".$name;

        mail($mailTo, $subject, $message, $headers);
        echo "<script>
             alert('E-mail sent!');
             window.history.go(-1);
             </script>";
    }
?>
