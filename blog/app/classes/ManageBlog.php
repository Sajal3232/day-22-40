<?php
namespace App\classes;
use App\classes\Database;

class ManageBlog{
    public function addItemAddBlog($data){
        $sql="INSERT INTO infoblog (name,blog_title,short_description,long_description,blog_image,status) VALUES ('$data[blog_catagory]','$data[blog_title]','$data[short_description]','$data[long_description]','$data[blog_image]','$data[status]')";
        
        if(mysqli_query(Database::dbConnection(),$sql)){
                 $message="blog add successfully";
                 return $message;
        }else{
            die("query-problem".mysqli_error(Database::dbConnection()));
     };
   }

    


    public function viewItemaddBlog(){
        $sql="SELECT * FROM infoblog";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $messageResult=mysqli_query(Database::dbConnection(),$sql);
            return $messageResult;
            
         }else{
             die("error problem".mysqli_error(Database::dbConnection()));
         };

    }
}

?>