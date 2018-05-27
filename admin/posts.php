<?php include "includes/admin_header.php"; ?>
  <div id="wrapper">
    <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>
    <div id="page-wrapper">
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              Welcome to admin
              <small>Author</small>
            </h1>
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Author</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Status</th>
                  <th>Image</th>
                  <th>Tags</th>
                  <th>Comments</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>10</td>
                  <td>Frank Simon</td>
                  <td>Bootstrap framework</td>
                  <td>Bootstrap</td>
                  <td>Status</td>
                  <td>Image</td>
                  <td>Tags</td>
                  <td>Comments</td>
                  <td>Date</td>
                </tr>
              </tbody>
            </table>
          </div> <!-- .col-lg-12 -->
        </div> <!-- /.row -->
      </div> <!-- /.container-fluid -->
    </div> <!-- /#page-wrapper -->
<?php include "includes/admin_footer.php"; ?>
<?php
/*
 ?delete= ->is key of associative array
 {$cat_id -> the value}
*/
?>
