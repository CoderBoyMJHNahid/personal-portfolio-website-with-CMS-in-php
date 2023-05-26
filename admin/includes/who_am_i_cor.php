<?php 
    include "connect.php";

    $desc = mysqli_real_escape_string($conn,$_POST['introduction']);
    $old_logo = mysqli_real_escape_string($conn,$_POST['old_logo']);

    $filename = htmlentities($_FILES['person_image']['name']);



    if($filename !== ""){

        $extension = pathinfo($filename, PATHINFO_EXTENSION) ;
    
        $valid_extensions = array("jpg","jpeg", "png");

        if(in_array($extension, $valid_extensions)){

            $new_name_logo = rand() . "." . $extension;

            $path = "../../images/" . $new_name_logo;

            move_uploaded_file($_FILES['person_image']['tmp_name'],$path);

            unlink("../../images/{$old_logo}");
        };
    }else{
        $new_name_logo = $old_logo;
    }


    $sql = "UPDATE who_am_i SET who_desc = '{$desc}', who_image = '{$new_name_logo}'";
    
    $runQuery = mysqli_query($conn,$sql) or die("Query failed!!");

    if ($runQuery) {
        echo json_encode(array('success' => "Data Updated" , "status" => "true" ));
    } else {
        echo json_encode(array('error' => "Data doesn't Updated" , "status" => "false" ));
    }
    
?>