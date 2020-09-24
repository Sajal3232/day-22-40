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
<script src="../asset/js/jquery.min.js"></script>
<script src="../asset/js/bootstrap.bundle.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>
</body>
</html>