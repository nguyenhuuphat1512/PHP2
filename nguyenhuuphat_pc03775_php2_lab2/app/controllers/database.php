<?php
namespace App\controllers;
use mysqli;
class Database{ 
    public function _construct(){
        $servername = "localhost";
$username = "root";
$password = "mysql" ;
$conn = new mysqli($servername, $username, $password);
if (!$conn) {
//die("Connection failed: ". mysqli_connect_error());
die("Connection failed: ". $conn->connect_error());
    
}
echo "Connected successfully";
    }
public function Helloworld(){
echo "Hello World";
    }

}

