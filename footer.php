



<footer id="contact">
        <div class="top_part_wrapper">
            <div class="container">
                <div class="row">
                    <h2>Grow With me</h2>
                    <p>Let's improve your processes together.</p>
                </div>
            </div>
        </div>
        <div class="last_part_wrapper">
            <div class="container">
                <div class="row">
                <?php 
                    $sql = "SELECT * FROM footer_data WHERE f_id = 1";
                    $runQuery = mysqli_query($conn,$sql) or die("Query Failed !!");
                    $row = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
                
                ?>
                    <div class="col-lg-4">
                        <div class="footer_desc">
                            <h4>Phone</h4>
                            <p><?php echo $row[0]['phone_number'] ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_desc">
                            <h4>Email</h4>
                            <p><?php echo $row[0]['email_address'] ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_links">
                            <ul class="m-auto">
                                <?php 
                                    echo ($row[0]['facebook_link'] !== "") ? "<li><a href='{$row[0]['facebook_link']}'><i class='fa-brands fa-facebook'></i></a></li>": "" ;
                                ?>
                                <?php 
                                    echo ($row[0]['twitter_link'] !== "") ? "<li><a href='{$row[0]['twitter_link']}'><i class='fa-brands fa-twitter'></i></a></li>": "" ;
                                ?>
                                <?php 
                                    echo ($row[0]['linkedin_link'] !== "") ? "<li><a href='{$row[0]['linkedin_link']}'><i class='fa-brands fa-linkedin'></i></a></li>": "" ;
                                ?>
                                <?php 
                                    echo ($row[0]['instagram_link'] !== "") ? "<li><a href='{$row[0]['instagram_link']}'><i class='fa-brands fa-instagram'></i></a></li>": "" ;
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript">

        $(window).scroll(function(){
        if ($(window).scrollTop() >= 150) {
            $('header').addClass('sticky');
        }
        else {
            $('header').removeClass('sticky');
        }
        });

        var $grid = $('.grid').isotope();
        $('#gallery_content').on( 'click', 'li', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });

    </script>


</body>
</html>