<?php 
    include "connect.php";

    $service_name = mysqli_real_escape_string($conn,$_POST['service_name']);
    $desc = mysqli_real_escape_string($conn,$_POST['service_box_decs']);

    $filename = htmlentities($_FILES['service_image']['name']);

        $extension = pathinfo($filename, PATHINFO_EXTENSION) ;
    
        $valid_extensions = array("png");

        if(in_array($extension, $valid_extensions)){

            $new_name_logo = rand() . "." . $extension;

            $path = "../../images/" . $new_name_logo;

            move_uploaded_file($_FILES['service_image']['tmp_name'],$path);

            $sql = "INSERT INTO `service_box`(`service_name`, `service_icon`, `service_desc`) VALUES ('{$service_name }','{$new_name_logo}','{$desc}')";
    
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