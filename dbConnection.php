<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="learncode";

$conn= new mysqli($db_host,$db_user,$db_password,$db_name);

if(!$conn){
    echo("Connection Failed");
}
else{
    echo "Connection Successful";
}


?>