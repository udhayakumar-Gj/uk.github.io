<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>First project</title>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Font-awesome-->
    <script src="js/all.js"></script>
    <!--Google-font-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!--Main css-->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>   
<h1 class="text-danger bg-warning pb-5 text-center">user Register page</h1>
<?php include('database.php'); ?>
<?php
    $first_name =( $_POST["first_name"]);
    $last_name=($_POST["last_name"]);
    $email=($_POST["email"]);
    $company_name=($_POST["company_name"]);
    $type_company=($_POST["type_company"]);
    $ph_number=($_POST["ph_number"]);
    $gender=($_POST["gender"]);
    $message_1=($_POST["message_1"]);
    mysqli_query($conn,"INSERT INTO user (first_name,last_name,email,company_name,type_company,ph_number,gender,message_1)
                VALUES ('$first_name','$last_name','$email','$company_name','$type_company','$ph_number','$gender','$message_1')");
                $_SESSION["message"]="you are now log in";
                $_SESSION["username"]=$first_name;
   
    if(mysqli_affected_rows($conn) > 0){
        echo "<script type='text/javascript'>alert('Registered successfully')</script>";
        echo "<a href=\"index.html\">Go Back</a>";
           
    } else {
        echo "<script type='text/javascript'>alert('password not match')</script>";
        echo mysqli_error ($conn);
    }
   
?>

 <!--jquery-->
 <script src="js/jquery-3.5.1.min.js"></script>
    <!--Bootstrap js-->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html> 

