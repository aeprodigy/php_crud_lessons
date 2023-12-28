<?php
//databse connection file
define("HOSTNAME",'localhost');
define("USERNAME",'root');
define("PASSWORD",'');
define("DATABASE",'crud_operations');

//connection
$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

//check the connection
if(!$connection){
    die("Connection Failed!");
}else{
    //echo "Connected!";
}

?>