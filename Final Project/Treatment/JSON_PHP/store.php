<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["cn"]))  
      {  
           $error = "<label class='text-danger'>Enter a Contact Number</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["option"]))  
      {  
           $error = "<label class='text-danger'>Option cannot be empty</label>";  
      } 
       
      else  
      {  
           if(file_exists('../controller/data.json'))  
           {  
                $current_data = file_get_contents('../controller/data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST["name"],  
                     'email'          =>     $_POST["email"],  
                     'cn'            =>     $_POST["cn"],
                     'pass'           =>    $_POST["pass"], 
                     'Cpass'           =>    $_POST["Cpass"],  
                    'option'          =>     $_POST["option"],  
                       
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('../controller/data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Doctor & Emergency Service</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h3 class="logo">Online Doctor & Emergency Service</h3>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="home.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="Ambulancelist.html">AMBULANCES</a></li>
                    
                </ul>
            </div>

        </div> 
<br />  
           <div class="container" style="width:500px;">  
                <h3 align="">REGISTRATION NOW</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label>E-mail</label>
                     <input type="text" name = "email" class="form-control" /><br />
                     <label>Contact Number</label>
                     <input type="text" name = "cn" class="form-control" /><br />
                     <label>Password</label>
                     <input type="password" name = "pass" class="form-control" /><br />
                     <label>Confirm Password</label>
                     <input type="password" name = "Cpass" class="form-control" /><br />

                    <fieldset>
                    <label>Option: </label>
                    <input type="radio" id="govt" name="option" value="govt">
                     <label for="govt">Govt</label>                     
                     <input type="radio" id="private" name="option" value="private">
                     <label for="private">Private</label><br>
                    </fieldset> 
                     
                     <input type="submit" name="submit" value="Register" class="btn btn-info" /><br />  
                                   
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
                <br>
                <?php include '../Controller/footer.php';?>
           </div>  
           <br />  
      </body>  
                </div>
        </div>
    </div>
</body>
</html>