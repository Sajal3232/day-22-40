<?php
namespace App\classes;
use App\classes\Database;
class AddCatagory{
    public function addCatagoryInfo($data){
        // $catagoryName=$catagory_name;
        // $catagoryDescription=$catagory_description;
        // $publishStatus=$status;
            print_r($data);
        $sql="INSERT INTO catagory (name,description,status) VALUES ('$data[catagory_name]','$data[catagory_description]','$data[status]')";
            if(mysqli_query(Database::dbConnection(),$sql)){
                     $message="catagory add successfully";
                     return $message;
            }else{
                die("query-problem".mysqli_error(Database::dbConnection()));
         };
    }
}
?>