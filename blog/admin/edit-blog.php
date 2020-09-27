<?php
session_start();
if($_SESSION['id']==null){
  header('Location:index.php');
}
use App\classes\Login;

require_once '../vendor/autoload.php';
// $login=new App\classes\Login();  
//    if(isset($_GET['logout'])){
//      $login->adminLogOut();
//    }

  //  add catagory

  $id=$_GET['id'];
  $editManageBlog=new App\classes\ManageBlog;                         //create object
   $updateManageBlogId=$editManageBlog->getManageBlogById($id);
   $updateBlogId=mysqli_fetch_assoc($updateManageBlogId);
      $message='';
   if(isset($_POST['btn'])){
    $message= $editManageBlog->updateManageBlogInfo($_POST);
    return $message;
   }

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
                 <h3><?php echo $message?></h3>
          <form action="" method="POST">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Blog Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="blog_name" value="<?php echo $updateBlogId['name'] ?>">
                <input type="text" class="form-control"  name="id" value="<?php echo $updateBlogId['id'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Blog TItle</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="blog_title" value="<?php echo $updateBlogId['blog_title'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Short Description</label>
              <div class="col-sm-10">
                  <textarea class="form-control" name="short_description" id="" cols="30" rows="10"><?php echo $updateBlogId['short_description'] ?></textarea> 
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Long Description</label>
              <div class="col-sm-10">
                  <textarea class="form-control" name="long_description" id="" cols="30" rows="10"><?php echo $updateBlogId['short_description' ]?></textarea> 
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Blog Image</label>
              <div class="col-sm-10">
              <input type="file" name="blog_image" accept="image/*" value="<?php echo $updateBlogId['blogz-image' ]?>"/>

              </div>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Publication Status</label>
              <div class="col-sm-10">      
                <input type="radio"  name="status" value="1" <?php echo $updateBlogId['status'] == 1 ? "checked": " " ?> >published
                <input type="radio"  name="status" value="0" <?php echo $updateBlogId['status'] == 0 ? "checked": " "?> >unpublished
              </div>
            </div>
                
            <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="btn">Update Catagory</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
<script src="../asset/js/jquery.min.js"></script>
<script src="../asset/js/bootstrap.bundle.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>
</body>
</html>