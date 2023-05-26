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
            <div class="alert_wrapper">
              <div class="alert"></div>
            </div>
          <form class="row" id="footer_form">
            <?php 
              $sql = "SELECT * FROM footer_data";
              $runQuery = mysqli_query($conn,$sql) or die("Query failed!!");
              $row = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
            ?>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Phone</label>
                <input type="text" name="phone" value="<?php echo $row[0]['phone_number'] ?>" class="form-control" placeholder="Enter Your Phone number" required/>
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address" value="<?php echo $row[0]['email_address'] ?>" required/>
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Facebook Links</label>
                <input type="text" name="facebook" class="form-control" placeholder="Facebook Links" value="<?php echo $row[0]['facebook_link'] ?>" />
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Twitter links</label>
                <input type="text" name="twitter" class="form-control" placeholder="Twitter Links" value="<?php echo $row[0]['twitter_link'] ?>" />
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Linkedin Links</label>
                <input type="text" name="linkedin" class="form-control" placeholder="Linkedin Links" value="<?php echo $row[0]['linkedin_link'] ?>"/>
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Instagram Links</label>
                <input type="text" name="instagram" class="form-control" placeholder="Instagram Links" value="<?php echo $row[0]['instagram_link'] ?>" />
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