<?php

use App\classes\AddCatagory;

session_start();
if($_SESSION['id']==null){
  header('Location:index.php');
}
// use App\classes\Login;

require_once '../vendor/autoload.php';


// $login=new App\classes\Login();  
//    if(isset($_GET['logout'])){
//      $login->adminLogOut();
//    }

$managecatagory=new App\classes\ManageBlog();     //create object using use
$messageResult= $managecatagory->viewItemaddBlog();
$viewManage=mysqli_fetch_assoc($messageResult);

// $message='';
// if(isset($_GET['delete'])){
//   $id=$_GET['id'];
//   $message=$managecatagory->deleteManageCatagory($id);
// }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
   <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
</head>
<body>
<?php include 'includes/menu.php'?>
<div class="container">
      <div class="row mt-5">
        <div class="col-lg-6 m-auto ">
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Blog Name </th>
      <th scope="col">Blog Tittle </th>
      <th scope="col">Short Description</th>
      <th scope="col">Long Description</th>
      <th scope="col">Blog Image</th>
      <th scope="col">Publication Status</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  <?php while($viewManage=mysqli_fetch_assoc($messageResult)){?>
    <tr>
      <th scope="row"><?php echo $viewManage['id']?></th>
      <td><?php echo $viewManage['name']?></td>
      <td><?php echo $viewManage['blog_title']?></td>
      <td><?php echo $viewManage['short_description']?></td>
      <td><?php echo $viewManage['long_description']?></td>
      <td><?php echo $viewManage['blog_image']?></td>
      <td><?php echo $viewManage['status']?></td>
      <td>
          <a href="edit-blog.php?id=<?php echo $viewManage['id']?>">edit</a>
          <a href="">delete</a>
      </td>
    </tr>
<?php }?>
  </tbody>
</table>
        </div>
      </div>
    </div>
<script src="../asset/js/jquery.min.js"></script>
<script src="../asset/js/bootstrap.bundle.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>
</body>
</html>