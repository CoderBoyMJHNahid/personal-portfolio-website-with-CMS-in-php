<section id="hero-section" class="d-flex align-items-center">

<div class="container">
    <div class="row">
        <?php 
            $sql = "SELECT * FROM hero_section WHERE hero_id = 1";
            $runQuery = mysqli_query($conn,$sql) or die("Query Failed !!");
            $row = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
        
        ?>
        <div class="hero-infor_wrapper text-center">
            <h1><?php echo $row[0]['title'] ?></h1>
            <p><?php echo $row[0]['sub_title'] ?></p>
            <a href="mailto:<?php echo $row[0]['email_connect'] ?>" class="hero-section_btn">Email Me</a>
        </div>
    </div>
</div>

</section>
