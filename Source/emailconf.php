<?php
require_once 'System.php';
if (class_exists('System')) {
 echo 'got Pear';
} else {
 echo 'no Pear';
};
/*require_once 'C:\xampp\php\PEAR';
if(isset($_POST['submitted'])){
        //grab form values into variables
        $name = $_POST['firstname']+$_POST['lastname'];
        $mailfrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['content'];

        //create transport
        $transport = (new Swift_SmtpTransport('enlock-co-nz.mail.protection.outlook.com', 25))
        ->setUsername('admin')
        ->setPassword('swiftmailer1')
        ;

        //create the mailer using transport
        $mailer = new Swift_Mailer($transport);

        //custom formatting of variables
        $mailTo = 'isaacl@enlock.co.nz';    
        $mailToName = 'Isaac Lyne';   
        $headers = "From: ".$mailfrom;
        $txt = "Hey! You have recieved an email from ".$name."\n\n".$message;

        $mailmessage = (new Swift_Message($subject))
        ->setFrom([$mailfrom => $name])
        ->setTo([$mailTo => $mailToName])
        ->setBody($txt);

        $result = $mailer->send($mailmessage);
}*/
?>