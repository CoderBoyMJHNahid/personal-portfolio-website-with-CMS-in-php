<?php 
    include "connect.php";

    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $facebook = mysqli_real_escape_string($conn,$_POST['facebook']);
    $twitter = mysqli_real_escape_string($conn,$_POST['twitter']);
    $linkedin = mysqli_real_escape_string($conn,$_POST['linkedin']);
    $instagram = mysqli_real_escape_string($conn,$_POST['instagram']);

    $sql = "UPDATE `footer_data` SET `phone_number`='{$phone}',`email_address`='{$email}',`facebook_link`='{$facebook}',`twitter_link`='{$twitter}',`linkedin_link`='{$linkedin}',`instagram_link`='{$instagram}' WHERE f_id = 1";
    
    $runQuery = mysqli_query($conn,$sql) or die("Query failed!!");

    if ($runQuery) {
        echo json_encode(array('success' => "Data Updated" , "status" => "true" ));
    } else {
        echo json_encode(array('error' => "Data doesn't Updated" , "status" => "false" ));
    }
    
?>