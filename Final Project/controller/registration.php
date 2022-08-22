<?php
require_once '../model/model.php';
$name = $email  = $password = $cpassword = $contact = $option = '';
$nameErr = $emailErr  = $passwordErr = $cpasswordErr = $contactErr = $optionErr = '';
$message = '';  
$error = '';
$flag = 0;
 
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
    $flag = 1;
  } 

      
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
    $flag = 1;
  } 
  else 
  {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
      $email="";    
      $flag = 1;
    }
  }

  if(empty($_POST["username"]))  
  {  
    $usernameErr = "User Name is required";
    $flag = 1;
  } 
  

  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required";
    $flag = 1;
  } 
  else 
  {
    $password = test_input($_POST["password"]);
    
    if (!preg_match("/[@,#,$,%]/",$password)) 
    {
      $passwordErr = "Password must contain at least one of the special character (@, #, $,%)";
      $flag = 1;
      
    }
  }

  if (empty($_POST["cpassword"])) 
  {
    $cpasswordErr = "Password is required";
    $flag = 1;
  } 
  else 
  {
    $cpassword = test_input($_POST["cpassword"]);
    if($cpassword!=$password)
    {
      $cpasswordErr = "Password dosen't match";
      $cpassword="";
      $flag = 1;
    }
  }

  if (empty($_POST["contact"])) 
  {
    $nameErr = "Contact is required";
    $flag = 1;
  } 


  if(empty($_POST["option"]))  
  {  
    $genderErr = "Select Option"; 
    $flag = 1;
  }
  else 
  {
    $gender = test_input($_POST["option"]);
    
  } 

  if($flag==0)
  {
    if (isset($_POST['submit']) ) {
      $data['name'] = $_POST['name'];
      $data['email'] = $_POST['email'];
      $data['Contact'] = $_POST['contact'];
      $data['password'] = $_POST['password'];
      $data['option'] = $_POST['option'];
    
      
    
      if (addUser($data)) {
        echo 'Successfully added!!';
        echo "<a href ='../view/login.php'>Login</a>";
      }
    } else {
      echo 'You are not allowed to access this page.';
    }
  }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } 
  ?> 