<?php
if(isset($_POST['submitted'])){

        ///////////////////////////////////
        //Settings for your email address//
        ///////////////////////////////////
        
        ini_set('SMTP','gmail.com');//Email Server
        $mailTo = 'emfaranas@gmail.com';//Email 
        
        //settings for email port
        ini_set('smtp_port',25);
        

        //All variables from contact form
        $name = $_POST['name'];
        $mailfrom = $_POST['email'];
        $message = $_POST['content'];

        $subject = 'Message from website!';

        $headers['From'] = $mailfrom;

        //Formatting for the email to be sent
        $txt = "Hey! You have recieved an email from ".$name."\n\n".$message;
        
        //send the email
        mail($mailTo, $subject, $txt, $headers);
        
        //Redirect to contact page
        header("Location: contact.html#mailSent");
}
?>