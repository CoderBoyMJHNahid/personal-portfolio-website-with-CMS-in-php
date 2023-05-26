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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="small-box bg-info">
              <div class="inner">
              <?php 
                $sql = "SELECT COUNT(pi_id) AS total_portfolio FROM portfolio_image";
                $runQuery = mysqli_query($conn,$sql);
                $row = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
              ?>
                <h3><?php echo $row[0]['total_portfolio'] ?></h3>

                <p>Portfolio Image</p>
              </div>
              <div class="icon">
                <i class="ion ion-image"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="small-box bg-success">
              <div class="inner">
              <?php 
                $sql1 = "SELECT COUNT(pc_id) AS total_portfolio_cat FROM portfolio_cat";
                $runQuery1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_all($runQuery1,MYSQLI_ASSOC);
              ?>
                <h3><?php echo $row1[0]['total_portfolio_cat'] ?></h3>

                <p>Portfolio Category</p>
              </div>
              <div class="icon">
                <i class="ion ion-images"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php 
                $sql2 = "SELECT COUNT(`uid`) AS total_user FROM users";
                $runQuery2 = mysqli_query($conn,$sql2);
                $row2 = mysqli_fetch_all($runQuery2,MYSQLI_ASSOC);
              ?>
                <h3><?php echo $row2[0]['total_user'] ?></h3>

                <p>User Of Admin</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="small-box bg-danger">
              <div class="inner">
              <?php 
                $sql3 = "SELECT COUNT(`sb_id`) AS total_service FROM service_box";
                $runQuery3 = mysqli_query($conn,$sql3);
                $row3 = mysqli_fetch_all($runQuery3,MYSQLI_ASSOC);
              ?>
                <h3><?php echo $row3[0]["total_service"] ?></h3>

                <p>Total Services</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
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