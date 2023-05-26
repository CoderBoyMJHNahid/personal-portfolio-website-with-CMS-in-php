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
            <h1 class="m-0">What I Do?</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">What I DO?</li>
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
          <form class="row" id="add_service_skill_form">
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Add Service Name</label>
                <input type="text" name="service_name" class="form-control" placeholder="Add Service Name" required/>
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Select Category</label>
                <select name="service_cat" class="form-control" id="service_cat" required>
                    <option disabled>Select Category</option>
                    <option value="0">Operations Strategy</option>
                    <option value="1">System Maintenance</option>
                </select>
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
                          <h3 class="card-title">Here Your added services</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="table_data" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                              <th>Serial Number</th>
                              <th>Service Name</th>
                              <th>Category</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $sql = "SELECT * FROM service_skills ORDER BY s_id DESC";
                                $runQuery = mysqli_query($conn,$sql) or die("Query Failed!!");
                                if (mysqli_num_rows($runQuery) > 0) {
                                  $i = 1;
                                  while($row = mysqli_fetch_assoc($runQuery)){
                              ?>
                            <tr>
                              <td><?php echo $i ?></td>
                              <td><?php echo $row['skill_name'] ?></td>
                              <td><?php echo  ($row['skill_cat'] == 1) ? "System Maintenance" : "Operations Strategy" ; ?></td>
                              <td><a href="includes/delete_skill_cor.php?id=<?php echo $row['s_id'] ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-sm btn-danger">Delete</a></td>
                            </tr>
                            <?php $i++;
                            }
                            } ?>
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
