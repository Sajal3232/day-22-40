<?php
session_start();
if($_SESSION['id']==null){
  header('Location:index.php');
}
use App\classes\Login;

require_once '../vendor/autoload.php';
$login=new App\classes\Login();  
   if(isset($_GET['logout'])){
     $login->adminLogOut();
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
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Catagory Name</label>
                <select name="catagory_name" class="form-control" id="">
                    <option value="">---select catagory name---</option>
                    <option value="1">catagory 1</option>
                    <option value="2">catagory 2</option>
                </select>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Blog Title</label>
              <div class="col-sm-10">
                  <input type="text" name="blog_title" class ="form-control"  id="">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Short description</label>
              <div class="col-sm-10">
                  <textarea name="short_description " class="form-control" id="" cols="30" rows="10"></textarea>
               </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Long description</label>
              <div class="col-sm-10">
                  <textarea name="long_description " class="form-control" id="" cols="30" rows="10"></textarea>
               </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Blog Image</label>
              <div class="col-sm-10">
                  <input type="file" name="blog_image" accept="image/*"/>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Publication Status</label>
              <div class="col-sm-10">
                <input type="radio"  name="status" value="1">published
                <input type="radio"  name="status" value="0">unpublished
              </div>
            </div>

            <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="btn">Save Catagory</button>
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