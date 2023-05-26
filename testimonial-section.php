<section id="testimonial_text">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section_heading">What <br> They Say </h2>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial_wrapper w-75 m-auto">
                    <?php 
                        $sql = "SELECT * FROM `client_reviews` WHERE text_only = 1 ";
                        $runQuery = mysqli_query($conn,$sql) or die("Query Failed !!");
                        while ($row = mysqli_fetch_assoc($runQuery)) {
                    ?>
                        <div class="testimonial_box ">
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
