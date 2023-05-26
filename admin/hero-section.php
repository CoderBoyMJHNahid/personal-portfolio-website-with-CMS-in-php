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
            <h1 class="m-0">Hero Section</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Hero Section</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <?php 
            $sql = "SELECT * FROM hero_section WHERE hero_id = '1'";
            $runQuery = mysqli_query($conn,$sql) or die("Query Failed!!");
            $row = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
            
          ?>
            <div class="alert_wrapper">
              <div class="alert"></div>
            </div>

          <form class="row" id="hero_section_from">
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Introduction Name</label>
                <input type="text" name="intro_name" class="form-control" placeholder="Introduction Name" value="<?php echo $row[0]["title"]?>" required/>
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Sub-Title after Introduction name</label>
                <input type="text" name="sub_title_intro" class="form-control" placeholder="Sub-Title after Introduction name" value="<?php echo $row[0]["sub_title"]?>" required/>
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Email Address</label>
                <input type="email" name="hero_sec_email" class="form-control" placeholder="Email Address" value="<?php echo $row[0]["email_connect"]?>" required/>
            </div>
            <div class="col-12">
                <input type="submit" class="btn btn-secondary mt-4" />
            </div>
          </form>
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