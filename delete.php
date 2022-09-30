<?php

include "config.php";

if(isset($_GET['deleteid'])){

$id = $_GET['deleteid'];

$sql = "DELETE  from  `crud` where id=$id";

$result = $conn->query($sql);

if($result == true){


echo "data deleted successfully";



}else{


echo "ERROR:".$sql."<br>".$conn->error;




}

}




?>