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
$unameErr = $passwordErr =  "";
$uname = $password =  "";

setcookie("name", "Alif", time() - 15);
setcookie("password", "10125", time() - 15);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Uname"])) {
    $unameErr = "User Name is required";
  } else {
    $uname = $_POST["Uname"];
    // check if name only contains letters and whitespace
    if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,16}$/m',$uname)) {
      $unameErr = "Only letters,space,numeric characters allowed";
    }
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = $_POST["password"];
   
    if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,16}$/m',$uname)) {
        $passwordErr = "Invalid Password";
    }
  }

 
    
 
}


?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 User Name: <input type="text" name="Uname" value="<?php echo $uname;?>">
  <span class="error">* <?php echo $unameErr;?></span>
  <br><br>
 Password: <input type="text" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $uname;
echo "<br>";
echo $password;

?>

</body>
</html>