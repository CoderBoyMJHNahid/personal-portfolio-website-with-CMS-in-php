<?php 

  $sql = "SELECT website_title,logo_image FROM users WHERE `uid` = 1";
  $runQuery = mysqli_query($conn,$sql);
  $row = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row[0]['website_title'] ?></title>

    <!-- all css Links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- all script cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    
    <!-- custom css -->
    <style>
        #hero-section{
            height: 90vh;
            background-image: linear-gradient(to right, #d3abdf,#eca6bb,#f4c8ae); 
        }
        section#about_section {
            background: #f9e7e5;
        }
        section#services{
            background: linear-gradient(0deg, rgba(241,204,222,1) 0%, rgba(129,169,255,1) 100%);
        }
        section#portfolio{
            background: #f9e7e5;
        }
        section#testimonial_text {
            background: #f9e7e5;
        }
        footer .top_part_wrapper{
            background-image: linear-gradient(to right, #d3abdf,#eca6bb,#f4c8ae); 
        }
    </style>
</head>
<body>
    
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#"><img src="images/<?php echo $row[0]['logo_image'] ?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuItems" aria-controls="menuItems" aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="primary_menu">
                  <ul class="navbar-nav ">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#about_section">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#services">Service</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#testimonial">Review</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#contact">Contact Me</a>
                    </li>
                    
                  </ul>
                </div>
              
              </nav>
        </div>

    </header>
