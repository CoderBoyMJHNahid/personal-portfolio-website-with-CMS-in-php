<section id="services">
        <div class="container">
            <div class="row">
                <h2 class="text-center service_heading mb-5">Consulting Services</h2>
                
                <?php 
                    $sql = "SELECT * FROM service_box ORDER BY sb_id DESC";
                    $runQuery = mysqli_query($conn,$sql) or die("Query Failed !!");
                    while ($row = mysqli_fetch_assoc($runQuery)) {
                ?>

                <div class="col-lg-4">
                    <div class="box-service_wrapper text-center text-light">
                        <div class="box-icon">
                            <img src="images/<?php echo $row['service_icon'] ?>" alt="Icon">
                        </div>
                        <div class="box-description">
                            <h3><?php echo $row['service_name'] ?></h3>
                            <!-- <p>Competitor research is the process of gathering and analyzing information about businesses or individuals that offer similar products or services to your own. </p> -->
                            <p><?php echo $row['service_desc'] ?></p>
                        </div>
                    </div>
                </div>
                
                <?php } ?>
            </div>
        </div>
    </section>
