<?php 
 $conn=mysqli_connect('localhost','root','Udhaya@123','company');
 if(mysqli_connect_errno($conn)){
	echo 'Failed to connect to database:'.mysqli_connect_error;
  }else {
    echo'connected';
  }
?>  