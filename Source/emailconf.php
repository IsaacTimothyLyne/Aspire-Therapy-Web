<?php
if(isset($_POST['submitted'])){
        $name = $_POST['firstname'];
        $mailfrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['content'];

        $mailTo = 'isaacl@enlock.co.nz';       
        $headers = "From: ".$mailfrom;

        $txt = "Hey! You have recieved an email from ".$name."\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
}
?>