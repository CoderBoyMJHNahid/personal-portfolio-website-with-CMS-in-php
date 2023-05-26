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
            <h1 class="m-0">Consulting Services</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Consulting Services</li>
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
          <form class="row" id="add_service_box_form">
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Service Name</label>
                <input type="text" name="service_name" class="form-control" placeholder="Add Service Name" required/>
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Service Box Image (<span class="text-danger">Please upload only png file</span>)</label>
                <input type="file" name="service_image" class="form-control" required>
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Description</label>
                <textarea placeholder="Write a Description" name="service_box_decs" class="form-control" cols="30" rows="3" required></textarea>
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
                          <h3 class="card-title">Here Your added services box data</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="table_data" class="table table_data_service_box table-bordered table-hover">
                            <thead>
                            <tr>
                              <th>Serial Number</th>
                              <th>Service Box Name</th>
                              <th>Image</th>
                              <th>Description</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 

                                $sql = "SELECT * FROM service_box ORDER BY sb_id DESC";
                                $runQuery = mysqli_query($conn,$sql) or die("Query Failed!!");
                                if (mysqli_num_rows($runQuery) > 0) {
                                  $i= 0;
                                  while ($row = mysqli_fetch_assoc($runQuery)) {
                                  $i++;
                              ?>
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $row['service_name'] ?></td>
                              <td><img src="../images/<?php echo $row['service_icon'] ?>" alt=""></td>
                              <td><?php echo $row['service_desc'] ?></td>
                              <td><a onclick="return confirm('Are you sure to delete this data?')" href="includes/delete_service_box_cor.php?id=<?php echo $row['sb_id'] ?>" class="btn btn-sm btn-danger">Delete</a></td>
                            </tr>
                            <?php 
                                }
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

  include "footer.php";
?>