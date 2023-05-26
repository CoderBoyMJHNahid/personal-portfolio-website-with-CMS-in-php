<?php 
    include "connect.php";

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $user_pwd = mysqli_real_escape_string($conn,$_POST['user_pwd']);
    $old_pwd = mysqli_real_escape_string($conn,$_POST['old_pwd']);
    $website_title = mysqli_real_escape_string($conn,$_POST['website_title']);
    $old_logo = mysqli_real_escape_string($conn,$_POST['old_logo']);

    $filename = htmlentities($_FILES['website_logo']['name']);

    $pwd = "";

    if ($user_pwd === $old_pwd) {
        $pwd = $old_pwd;
    } else {
        $pwd = sha1(md5(sha1($user_pwd))) ;
    }
    

    if($filename !== ""){

        $extension = pathinfo($filename, PATHINFO_EXTENSION) ;
    
        $valid_extensions = array("jpg","jpeg", "png");

        if(in_array($extension, $valid_extensions)){

            $new_name_logo = rand() . "." . $extension;

            $path = "../../images/" . $new_name_logo;

            move_uploaded_file($_FILES['website_logo']['tmp_name'],$path);

            unlink("../../images/{$old_logo}");
        };
    }else{
        $new_name_logo = $old_logo;
    }

    $sql = "UPDATE users SET user_name = '{$username}', user_pwd = '{$pwd}', logo_image = '{$new_name_logo}', website_title = '{$website_title}' WHERE `uid` = 1";
    
    $runQuery = mysqli_query($conn,$sql) or die("Query failed!!");

    if ($runQuery) {
        echo json_encode(array('success' => "Data Updated" , "status" => "true" ));
    } else {
        echo json_encode(array('error' => "Data doesn't Updated" , "status" => "false" ));
    }
    
?>