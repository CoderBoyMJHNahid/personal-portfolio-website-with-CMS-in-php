<section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section_heading">Client <br> Reviews </h2>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial_wrapper">
                    <?php 
                        $sql = "SELECT * FROM `client_reviews` WHERE text_only = 0 ";
                        $runQuery = mysqli_query($conn,$sql) or die("Query Failed !!");
                        while ($row = mysqli_fetch_assoc($runQuery)) {
                    ?>
                          <div class="testimonial_box d-flex align-items-center">
                            <div class="testimonial_img">
                                <img src="images/<?php echo $row['cr_image'] ?>" alt="Testimonial Image">
                            </div>
                            <div class="testimonial_desc">
                                <h4><?php echo $row['cr_name'] ?></h4>
                                <p><?php echo $row['cr_reviews'] ?></p>
                                
                            </div>
                        </div>
                    
                    <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
