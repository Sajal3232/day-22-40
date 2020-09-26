<?php
namespace App\classes;
use App\classes\Database;

class ManageCatagory{
    public function viewManageCatagory(){
        $sql="SELECT * FROM catagory ";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $messageResult=mysqli_query(Database::dbConnection(),$sql);
            return $messageResult;
            
         }else{
             die("error problem".mysqli_error(Database::dbConnection()));
         };

    }

   public function getManageById($id){
    $sql="SELECT * FROM catagory WHERE id='$id' ";
    if(mysqli_query(Database::dbConnection(),$sql)){
        $updateManageId=mysqli_query(Database::dbConnection(),$sql);
        return $updateManageId;
        echo '<pre>'; 
        print_r($updateManageId);       
     }else{
        die("error problem".mysqli_error(Database::dbConnection()));
    };


   }

   public function updateManageInfo($data){
    $sql= "UPDATE catagory SET name='$data[catagory_name]',description='$data[catagory_description]', status='$data[status]' WHERE id=$data[id] ";

    if(mysqli_query(Database::dbConnection(),$sql)){
       header('Location:manage-catagory.php');
        
     }else{
        die("error problem".mysqli_error(Database::dbConnection()));
    };
   }

   
   public function deleteManageCatagory($id){
    $sql="DELETE FROM catagory WHERE id='$id'";

    if(mysqli_query(Database::dbConnection(),$sql)){
       $message="delete catagory information successfully" ;
       return $message;                
      }else{
         die("error problem".mysqli_error(Database::dbConnection()));
     };
}

}
?>