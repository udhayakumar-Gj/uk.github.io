<?php

if(isset($_POST['submit'])){
  if(mail($_POST['email'],$_POST['name'],$_POST['message'])){
    echo "mail sent";
  }else {
    echo "Failed";
  }
}
header('location:index.html');
?>