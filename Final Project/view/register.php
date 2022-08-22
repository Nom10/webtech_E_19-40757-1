<?php require_once '../controller/registration.php'?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="../js/app.js"></script>
    <script src="../js/jquery.js"></script>
</head>
<body>
<br />
            <div class="container" style="width:500px;">  
                 <h3 align="">Sign Up</h3><br />                 
                 <form method="POST" name = "form" >  
                      
                     
                      <br />  
                      <label>Name:</label>  
                      <input type="text" name="name" class="form-control" id= "name" onkeyup="checkName()" onblur="checkName()">
                      <span id="nameErr"><?php echo $nameErr;?></span><br><hr>  
                      <label>Email:</label>  
                      <input type="text" name="email" class="form-control" id= "email" onkeyup="checkEmail()" onblur="checkEmail()">
                      <span id="emailErr"><?php echo $emailErr;?></span><br><hr>
                      <label>User Name:</label>  
                      <input type="text" name="contact" class="form-control" id= "contact" onkeyup="checkContact()" onblur="checkContact()">
                      <span id="contactErr"></span><br><hr>
                      <label>Password:</label>  
                      <input type="password" name="password" class="form-control" id= "password" onkeyup="checkPassword()" onblur="checkPassword()">
                      <span id="passwordErr"><?php echo $passwordErr;?></span>
                     <br><hr>  
                      <label>Confirm Password:</label>
                      <input type="password" name="cpassword" class="form-control" id= "cpassword" onkeyup="checkCpassword()" onblur="checkCpassword()">
                      <span id="cpasswordErr"><?php echo $cpasswordErr;?></span><br><hr>    
                      <label>Option:</label>  
                      
                         <input type="radio" name="option" value="Goverment">Female
                         <input type="radio" name="option" value="Private">Male
                         <span class="error"> <?php echo $optionErr;?></span><br><hr>

                      <input type="submit" name="Submit">   
                      
                      
                         <p>Already have an account? <a href="login.php">Sign in</a>.</p>
                      </div>                    
                       
                 </form>  
                 
            </div>  
            <br />  
   

 <?php
    echo $error;
    echo "<br>";
    echo $message;
    echo "<br>";
?>


</body>

</html>

<script>
    $(document).ready(function(){
        $('#username').keyup(function(){
            var name = $(this).val();
            $.ajax({
                url: "../controller/check.php",
                method:"POST",
                data:{my_name:name},
                dataType:"text",
                success:function(html)
                {
                    $('#usernameErr').html(html);
                }
            });
        });
    });
</script>
