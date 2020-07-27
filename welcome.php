<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
      <!--Bootstrap css-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Font-awesome-->
    <script src="js/all.js"></script>
    <!--Google-font-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!--Main css-->
    <link rel="stylesheet" href="css/main.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>

    <section id="filler">
        
        <h1 id="head" class="text-center text-white text-justify text-monospace text-uppercase">register</h1>
        
            
        <div class="col text-center">
            <form method="post" action="process.php"  class="row pr-3 badge-info tra justify-content-lg-center justify-content-md-center justify-content-sm-around">
                <ul class="p-5 d-flex card-columns ">
                    <li class="font-weight-bolder list-unstyled text-light text-uppercase">
                        <label class="row m-1 mr-lg-4 "><h5>First Name: </h5></label>
                        <input name="first_name" class=" px-4 text-dark"  type="text" />
                        <br />
                        <label class="row m-1 mr-lg-4 "><h5>Last Name: </h5></label>
                        <input name="last_name"class="px-4 text-dark"  type="text" />
                        <br />
                        <label class="row m-1 mr-lg-4 "><h5> Email:</h5></label>
                        <input name="email" class="px-4 text-dark"  type="email" />
                        <br />
                        <label class="row m-1 mr-lg-4 "><h5>company name:</h5> </label>
                        <input name="company_name" class="px-4 text-dark"  type="text"/>
                        <br/>
                        <label class="row m-1 mr-lg-4"><h5>which core:</h5></label> 
                        <select  class="w-100 text-dark text-uppercase" name="type_company">    
                            <option  value="waterbased">waterbased</option>
                            <option value="ironbased">ironbased</option>
                            <option  value="multiproduct">multiproduct</option>
                        </select>
                        <br />
                        <label class="row  m-1 mr-lg-4"><h5>phone number:</h5> </label>
                        <input class="px-4 text-dark" name="ph_number" type="number" />
                        <br/>
                        <label  class="row m-1 mr-lg-4"><h5>Gender:</h5></label>
                        <select name="gender" class="text-dark">
                        <option  value="Male" ><span > Male</span></option>
                        <option value="Female"><span >Female</span></option>
                        <option  value="other" ><span >transgender</span></option>
                        </select>
                        <br />
                        <label class="row  m-1 mr-lg-4"><h5>Message:</h5> </label>
                        <textarea class="px-4 py-3 text-dark" name="message_1" rows="5" cols="20"></textarea>
                        <br/>
                       
                        <input type="submit" name="submit" class="btn trans mt-5 w-5 px-4 py-2 text-uppercase" value="Register" />
                       
                    </li>
                </ul>
            </form>
        </div>
    </div>
    </section>
     <!--jquery-->
     <script src="js/jquery-3.5.1.min.js"></script>
     <!--Bootstrap js-->
     <script src="js/bootstrap.bundle.min.js"></script> 
 
</body>
</html>