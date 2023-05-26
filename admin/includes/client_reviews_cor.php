<?php 
    include "connect.php";

    $name = mysqli_real_escape_string($conn,$_POST['client_name']);
    $desc = mysqli_real_escape_string($conn,$_POST['client_reviews']);

    $filename = htmlentities($_FILES['client_image']['name']);

        $extension = pathinfo($filename, PATHINFO_EXTENSION) ;
    
        $valid_extensions = array("jpg","jpeg", "png");

        if(in_array($extension, $valid_extensions)){

            $new_name_logo = rand() . "." . $extension;

            $path = "../../images/" . $new_name_logo;

            move_uploaded_file($_FILES['client_image']['tmp_name'],$path);

             $sql = "INSERT INTO `client_reviews`(`cr_name`, `cr_image`, `cr_reviews`) VALUES ('{$name}','{$new_name_logo}','{$desc}')";
            
            $runQuery = mysqli_query($conn,$sql) or die("Query failed!!");

            if ($runQuery) {

                echo json_encode(array('success' => "Data Updated" , "status" => "true" ));
            
            } else {

                echo json_encode(array('error' => "Data doesn't Updated" , "status" => "false" ));
            
            }

        }else{
            echo json_encode(array('type_error' => "Data Updated" , "status" => "false" ));
        };

    
    
?>