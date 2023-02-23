<?php 
include '../_inc/config.php';

    $database->insert("items", [
    	"text" => $_POST['message']
    ]);
    
    $id = $database->id();
    if ( $id ) {
       // header('location: http://localhost/todoAPP_v2.0/index.php');
        die('success');
    }

?>