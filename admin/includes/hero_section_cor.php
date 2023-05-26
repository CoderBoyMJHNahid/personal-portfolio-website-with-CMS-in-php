<?php 
    include "connect.php";

    $title = mysqli_real_escape_string($conn,$_POST['intro_name']);
    $sub_title = mysqli_real_escape_string($conn,$_POST['sub_title_intro']);
    $email_connect = mysqli_real_escape_string($conn,$_POST['hero_sec_email']);

    $sql = "UPDATE hero_section SET title = '{$title}', sub_title = '{$sub_title}', email_connect = '{$email_connect}' WHERE hero_id = 1";
    
    $runQuery = mysqli_query($conn,$sql) or die("Query failed!!");

    if ($runQuery) {
        echo json_encode(array('success' => "Data Updated" , "status" => "true" ));
    } else {
        echo json_encode(array('error' => "Data doesn't Updated" , "status" => "false" ));
    }
    
?>