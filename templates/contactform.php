<?php


    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];


        $mailTo = "wlada725@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have e-mail from ".$name.".\n\n".$message;

        mail($mailTo, $name, $message, $headers);
        header("Location:.../index.php?mailsend");
      

    }
    