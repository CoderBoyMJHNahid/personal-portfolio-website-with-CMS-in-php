<?php 
  include "header.php";

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Client Reviews</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Client Reviews</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="alert_wrapper">
              <div class="alert"></div>
            </div>
          <form class="row" id="client_reviews_form">
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Client Name</label>
                <input type="text" name="client_name" class="form-control" placeholder="Client Name" required/>
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Upload Client Image</label>
                <input type="file" name="client_image" class="form-control" required/>
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Reviews</label>
                <textarea placeholder="Write a Reviews" name="client_reviews" class="form-control" cols="30" rows="3" required></textarea>
            </div>
            <div class="col-12">
                <input type="submit" value="Save" class="btn btn-secondary mt-4" />
            </div>
          </form>
        <!-- /.row -->
        <div class="show_all_service_skill">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-5">
                        <div class="card-header">
                          <h3 class="card-title">Here Your added Client Reviews</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="table_data" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                              <th>Serial Number</th>
                              <th>Client Name</th>
                              <th>Client Image</th>
                              <th>Client Reviews</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <?php 
                                $sql = "SELECT * FROM client_reviews WHERE text_only = 0 ORDER BY cr_id DESC";
                                $runQuery = mysqli_query($conn,$sql) or die("Query Failed!!");
                                if (mysqli_num_rows($runQuery) > 0) {
                                  $i = 1;
                                  while($row = mysqli_fetch_assoc($runQuery)){
                              ?>
                            <tbody>
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $row['cr_name']; ?></td>
                              <td><img src="../images/<?php echo $row['cr_image']; ?>" alt=""></td>
                              <td><?php echo $row['cr_reviews']; ?></td>
                              <td><a onclick="return confirm('Are you sure to delete this data?')" href="includes/delete_client_cor.php?id=<?php echo $row['cr_id']; ?>" class="btn btn-sm btn-danger">Delete</a></td>
                            </tr>
                            <?php 
                                $i++;  }
                                }
                            ?>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                </div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php 
  include "footer.php"

?>