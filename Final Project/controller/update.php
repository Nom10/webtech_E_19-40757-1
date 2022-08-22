<?php require_once '../model/model.php'; 

    if(isset($_POST['submit']))
    {
        $data['name'] = $_POST['name'];
	    $data['email'] = $_POST['email'];
	    $data['contact'] = $_POST['contact'];
        $data['option'] = $_POST['option'];
    
    if (updateData($_SESSION['id'], $data)) {
        $msg = 'Successfully updated!!';
       
        
    }
   else {
     $msg = 'You are not allowed to access this page.';
  }
}
?>