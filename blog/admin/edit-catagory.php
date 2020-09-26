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
  $editManage=new App\classes\ManageCatagory;                         //create object
   $updateManageId=$editManage->getManageById($id);
   $updateId=mysqli_fetch_assoc($updateManageId);

   if(isset($_POST['btn'])){
     $editManage->updateManageInfo($_POST);
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

          <form action="" method="POST">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Catagory Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="catagory_name" value="<?php echo $updateId['name'] ?>">
                <input type="text" class="form-control"  name="id" value="<?php echo $updateId['id'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Catagory Description</label>
              <div class="col-sm-10">
                  <textarea class="form-control" name="catagory_description" id="" cols="30" rows="10"><?php echo $updateId['description'] ?></textarea> 
              </div>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Publication Status</label>
              <div class="col-sm-10">      
                <input type="radio"  name="status" value="1" <?php echo $updateId['status'] == 1 ? "checked": " " ?> >published
                <input type="radio"  name="status" value="0" <?php echo $updateId['status'] == 0 ? "checked": " "?> >unpublished
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