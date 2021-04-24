<?php
if(isset($_POST['submitted'])){

        ///////////////////////////////////
        //Settings for your email address//
        ///////////////////////////////////
        
        ini_set('SMTP','enlock-co-nz.mail.protection.outlook.com');//Email Server
        $mailTo = 'isaacl@enlock.co.nz';//Email 
        

        //All variables from contact form
        $name = $_POST['firstname'];
        $mailfrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['content'];

        $headers['From'] = $mailfrom;

        //Formatting for the email to be sent
        $txt = "Hey! You have recieved an email from ".$name."\n\n".$message;

        //settings for email port
        ini_set('smtp_port',25);
        
        //send the email
        mail($mailTo, $subject, $txt, $headers);
        
        //Redirect to contact page
        header("Location: contact.html#mailSent");
}
?>