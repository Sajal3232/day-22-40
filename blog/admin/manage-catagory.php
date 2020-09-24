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
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Catagory Name </th>
      <th scope="col">Catagory Description</th>
      <th scope="col">Publication Status</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
          <a href="">edit</a>
          <a href="">delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>
          <a href="">edit</a>
          <a href="">delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>
          <a href="">edit</a>
          <a href="">delete</a>
      </td>
    </tr>
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