<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$npasswordErr = $rpasswordErr = $cpasswordErr =  "";
$npassword = $rpassword = $cpassword =  "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["cpassword"])) {
    $cpasswordErr = "Current Password is required";
  } else {
    $cpassword = $_POST["cpassword"];
    // check if name only contains letters and whitespace
    if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,16}$/m',$cpassword)) {
      $cpasswordErr = "Only letters,space,numeric characters allowed";
    }
  }
  
  if (empty($_POST["npassword"])) {
    $npasswordErr = "New Password is required";
  } else {
    $npassword = $_POST["npassword"];
   
    if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,16}$/m',$npassword)) {
        $npasswordErr = "Invalid Password";
    }
  }

  if (empty($_POST["rpassword"])) {
    $rpasswordErr = "Retype New Password";
  } else {
    $rpassword = $_POST["rpassword"];
   
    if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,16}$/m',$rpassword)) {
        $rpasswordErr = "Invalid Password";
    }
  }

  if ($_POST["npassword"] === $_POST["rpassword"]) {
    // success!
 }
 else {
    // failed :(
 }

 
    
 
}


?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 Current Password: <input type="text" name="cpass" value="<?php echo $cpassword;?>">
  <span class="error">* <?php echo $cpasswordErr;?></span>
  <br><br>
 New Password: <input type="text" name="npassword" value="<?php echo $npassword;?>">
  <span class="error">* <?php echo $npasswordErr;?></span>
  <br><br>
  Retype New Password: <input type="text" name="rpassword" value="<?php echo $rpassword;?>">
  <span class="error">* <?php echo $rpasswordErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $cpassword;
echo "<br>";
echo $npassword;
echo "<br>";
echo $rpassword;

?>

</body>
</html>