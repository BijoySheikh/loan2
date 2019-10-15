<?php 

include "sql_config.php";

$id = $_GET['id'];



$query="DELETE FROM `member_data`  WHERE id=$id";
mysqli_query($conn, $query);


$query="SELECT FROM `member_data`  WHERE id=$id";
mysqli_query($conn, $query);


$file = "images/" ;

if (!unlink($file)) {
  echo ("Error deleting $file");
} else {
  echo ("Deleted $file");
}


 header('location: running_member.php' );

?>