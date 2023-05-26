<section id="about_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_info_wrapper">
                        <h2 class="section_heading">Who <br> Am I?</h2>
                        <div class="about_title">
                        <?php 
                            $sql = "SELECT * FROM who_am_i WHERE who_id = 1";
                            $runQuery = mysqli_query($conn,$sql) or die("Query Failed !!");
                            $row = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
                        ?>
                            <p><?php echo $row[0]['who_desc'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_img_wrapper text-center">
                        <img src="images/<?php echo $row[0]['who_image'] ?>" alt="Profile Images">
                    </div>
                </div>
            </div>
        </div>
    </section>
