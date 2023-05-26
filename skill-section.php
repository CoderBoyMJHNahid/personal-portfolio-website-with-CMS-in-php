<section id="skills">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section_heading">What I Do</h2>
                </div>
                <div class="col-lg-6">
                    <div class="services_list_wrapper">
                        <div class="services_list">
                            <h4>Operations Strategy</h4>
                            <ul>
                            <?php 
                                $sql = "SELECT * FROM service_skills WHERE skill_cat = 0";
                                $runQuery = mysqli_query($conn,$sql) or die("Query Failed !!");
                                while ($row = mysqli_fetch_assoc($runQuery)) {
                                    echo "<li>{$row['skill_name']}</li>";
                                }
                            ?>
                            </ul>
                        </div>
                        <div class="services_list mt-5">
                            <h4>System Maintenance</h4>
                            <ul>
                            <?php 
                                $sql2 = "SELECT * FROM service_skills WHERE skill_cat = 1";
                                $runQuery2 = mysqli_query($conn,$sql2) or die("Query Failed2 !!");
                                while ($row2 = mysqli_fetch_assoc($runQuery2)) {
                                    echo "<li>{$row2['skill_name']}</li>";
                                }
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
