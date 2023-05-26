<?php 

    $hostname = "localhost";
    $db_username = "root";
    $db_pwd = "";
    $db_name = "personal_website";

    $conn = mysqli_connect($hostname,$db_username,$db_pwd,$db_name) or die("Connection Failed!!". mysqli_connect_error());

    $domain_name = "http://localhost/kely/";




?>