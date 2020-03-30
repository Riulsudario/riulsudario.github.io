<?php
    include('mailSender.php');
    
   if(isset($_POST['name']) || isset($_POST['mail']) || isset($_POST['subject']) || isset($_POST['message']))
   {

      $sender = $_POST['mail'];
      $nameSender = $_POST['name'];
      $receiver = 'rsudario47@gmail.com';
      $subject = $_POST['subject'];
      
      $mail = new MailSender($sender, $receiver, $subject, $nameSender);
      $mail->setMessage($_POST['message']);

      $rtr = $mail->send();
      
      if($rtr){
         header('location: success.php');
      }else{
         header('location: error.php');
      }
   
   }

?>
