<?php
namespace App\classes;

use mysqli;

class Database{
    public function dbconnection(){
        $hostname="localhost";
        $username="root";
        $password="";
        $bdname="blog";
        $link=mysqli_connect($hostname,$username,$password,$bdname);
        return $link;
    }
}

?>