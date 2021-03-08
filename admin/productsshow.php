<!DOCTYPE html>
<html>
<?php
include("adminpartial/session.php");
include("adminpartial/head.php");
?> 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include("adminpartial/header.php");
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php
  include("adminpartial/aside.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
        <div class="row">
        
            <div class="col-sm-9">
            <a href="product.php">
            <button type="button" class="btn-success btn-lg btn-primary">Add product</button>
        </a>
            <?php
                include("../partial/connect.php");
                $sql="SELECT * from products";
                $result=$connect->query($sql);
                while ($final=$result->fetch_assoc()) {  ?>
                   <a href="proshow.php?pro_id=<?php echo $final['id']?>">
                <h3><?php echo $final['id'] ?> : <?php echo $final['name'] ?></h3><br>
            </a>
                <a href="proupdate.php?up_id=<?php echo $final['id']?>">
                <button type="button" class="btn btn-primary">Update</button>
                </a>

                <a href="prodelete.php?del_id=<?php echo $final['id']?>">
                <button type="button" class="btn btn-danger">Delete</button>
                </a><hr>
                <?php  }
                ?>
            </div>
      
<div class="col-sm-3">
</div>
</section>
  </div>
  </div>
 <?php
 include("adminpartial/footer.php");
 ?>
</body>
</html>