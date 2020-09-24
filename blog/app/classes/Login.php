<?php
namespace App\classes;
use App\classes\Database;
class Login{
        public function adminLogInCheck($email, $password){
            //echo 'Email: ';
            //print_r($email);
            $pass = md5($password);
            $sql= "SELECT * FROM users WHERE email='$email' AND password='$pass' ";
            
            if(mysqli_query(Database::dbConnection(),$sql)){
                //print_r($sql);
                $queryResult=mysqli_query(Database::dbConnection(),$sql);
                $user=mysqli_fetch_assoc($queryResult);            
                if($user){
                    session_start();
                    $_SESSION['id']=$user['id'];
                    $_SESSION['name']=$user['name'];
                    header('Location:dashboard.php');
                }
                else{
                    $message="user name or password is wrong";
                    return $message;
                }
            }else{
                die("query-problem".mysqli_error(Database::dbConnection()));
         }

    }

    public function adminLogOut(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);

        header('Location:index.php');
    }
}
?>