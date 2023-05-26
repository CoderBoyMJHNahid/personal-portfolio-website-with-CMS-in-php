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
            <h1 class="m-0">Setting</h1>
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
          <form class="row" id="setting_form">
            <?php 
              $sql = "SELECT * FROM users";
              $runQuery = mysqli_query($conn,$sql) or die("Query failed!!");
              $row = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
            ?>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">UserName</label>
                <input type="text" name="username" value="<?php echo $row[0]['user_name'] ?>" class="form-control" placeholder="Enter Your Phone number" required/>
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Password</label>
                <input type="password" name="user_pwd" class="form-control" placeholder="Enter Your Email Address" value="<?php echo $row[0]['user_pwd'] ?>" required/>
                <input type="hidden" name="old_pwd" value="<?php echo $row[0]['user_pwd'] ?>" required/>
          
              </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Website Title</label>
                <input type="text" name="website_title" class="form-control" placeholder="Website Title" value="<?php echo $row[0]['website_title'] ?>" />
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Website Logo</label>
                <input type="file" name="website_logo" class="form-control" onchange="document.getElementById('website_logo_pre').src = window.URL.createObjectURL(this.files[0])" />
                <input type="hidden" name="old_logo" value="<?php echo $row[0]['logo_image'] ?>">
                <div class="current_picture">
                  <p class="mt-2">Your selected picture.</p>
                  <img id="website_logo_pre" src="../images/<?php echo $row[0]['logo_image'] ?>" width="200px" alt="Picture">
                </div>
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