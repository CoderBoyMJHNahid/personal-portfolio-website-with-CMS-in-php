<section id="portfolio">
        <div class="container">
            <div class="row">
                <h2 class="text-center mb-5">Portfolio</h2>
                <div class="col-md-12">
                    <div id="gallery_menu">
                      <ul id="gallery_content">
                        <li data-filter="*">All</li>
                        <?php 
                            $sql = "SELECT * FROM portfolio_cat";
                            $runQuery = mysqli_query($conn,$sql) or die("Query Failed !!");
                            while ($row = mysqli_fetch_assoc($runQuery)) {
                        ?>
                          <li data-filter=".<?php echo $row['pc_id'] ?>"><?php echo $row['pc_title'] ?></li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                <div class="col-lg-12">
                    <div class="grid">
                    <?php 
                        $sql1 = "SELECT * FROM portfolio_image";
                        $runQuery1 = mysqli_query($conn,$sql1) or die("Query Failed !!");
                        while ($row1 = mysqli_fetch_assoc($runQuery1)) {
                      ?>
                        <div class="col-md-6 col-lg-4 col-xl-3 grid-item <?php echo $row1['p_cat'] ?>">
                            <div class="gripImg">
                              <img class="gripImg_img" src="images/<?php echo $row1['p_img'] ?>" alt="">
                            </div>
                        </div>
                      <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
