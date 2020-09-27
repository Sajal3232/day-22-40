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


    public function getManageBlogById($id){
        $sql="SELECT * FROM infoblog WHERE id='$id' ";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $updateManageBlogId=mysqli_query(Database::dbConnection(),$sql);
            return $updateManageBlogId;       
         }else{
            die("error problem".mysqli_error(Database::dbConnection()));
        };
    
    }

    public function updateManageBlogInfo($data){
        $sql= "UPDATE infoblog SET name='$data[blog_name]',blog_title='$data[blog_title]',short_description='$data[short_description]',long_description='$data[long_description]',blog_image='$data[blog_image]', status='$data[status]' WHERE id='$data[id]' ";
    
        if(mysqli_query(Database::dbConnection(),$sql)){
           header('Location:manage-blog.php');
           $message="update-successfully";
           return $message;
            
         }else{
            die("error problem".mysqli_error(Database::dbConnection()));
        };
       }



       public function getAllPublishCatagoryInfo(){
           $sql="SELECT * FROM infoblog WHERE status=1";
           if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult=mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;
             
          }else{
             die("error problem".mysqli_error(Database::dbConnection()));
         };
       }
}

?>