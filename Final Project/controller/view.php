<?php
    
    require_once '../model/model.php';
    $data = showData($_SESSION['id']);

    $id = $data["ID"];
    $name = $data["Name"];
    $email = $data["Email"];
    $contact = $data["Contact"];
    $option = $data["Option"];

?>