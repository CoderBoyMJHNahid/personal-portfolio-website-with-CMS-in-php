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
            <h1 class="m-0">Who Am I?</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Who Am I?</li>
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
          $sql = "SELECT * FROM who_am_i WHERE who_id ='1'";
          $runQuery = mysqli_query($conn,$sql) or die("Run Query Failed!!");
          $row = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
        ?>
          <div class="alert_wrapper">
              <div class="alert"></div>
            </div>
          <form class="row" id="who_am_form_wrapper">
            <div class="col-lg-12 my-2">
                <label for="" class="form-label">Write a few words about you...</label>
                <textarea id="summernote" name="introduction">
                    <?php echo $row[0]['who_desc'] ?>
                </textarea>
              </div>
            <div class="col-lg-6 my-2">
                <label for="" class="form-label">Upload your picture...</label>
                <input type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" name="person_image" class="form-control"/>
                <input type="hidden" name="old_logo" value="<?php echo $row[0]['who_image'] ?>">
                <div class="current_picture">
                  <p class="mt-2">Your selected picture.</p>
                  <img id="blah" src="../images/<?php echo $row[0]['who_image'] ?>" width="200px" alt="Picture">
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