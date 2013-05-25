<?php
// Email Submit
if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['text'])){
  
   //send email
   mail("cogansam@gmail.com", "Contact Form: ".$_POST['name'],
   $_POST['text'], "From:" . $_POST['email']);
   
}
?>