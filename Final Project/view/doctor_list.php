<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <title>Online Doctor & Emergency Service</title>
   
</head>


<body>

<div class="container">
<?php include '../controller/logoutclick.php';?>
   <div class="main">
      <div class="navbar">
      <div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
          <div class="">
              <h2 class="logo">Our Services</h2>
          </div>

          <div class="menu">
          <ul class="nav nav-pills nav-stacked">
        <li><a href="dashboard.php">Home</a></li>
        <li><a href="viewprofile.php">View A Profile</a></li>
        <li class="active"><a href="patient.php">Patient</a></li>
        
      </ul><br>
          </div>

      </div> 

<div class="main">

 <!--cards -->

<div class="card">


<div class="des">
 <p>Ambulance List</p>
 <button class="btnn"><a href="../Treatment/Ambulancelist.html">Click Here</a></button>
</div>
</div>
<!--cards -->


<div class="card">


<div class="title">
 <h1>Goverment Ambulance</h1>
</div>
<div class="des">
 
 <button class="btnn"><a href="../Treatment/Govt Ambulances.html">Click Here</a></button>
</div>
</div>
<!--cards -->


<div class="card">


<div class="title">
 <h1>Private Ambulacnes</h1>
</div>
<div class="des">

 <button class="btnn"><a href="../Treatment/Private Ambulances.html">Click Here</a></button>
</div>
</div>
<!--cards -->


<div class="card">

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php include '../controller/footer.php';?>
</body>
</html>