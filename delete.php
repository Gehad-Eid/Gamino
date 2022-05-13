<?php
include "include/Connect.php";

$id = $_GET['id'];
$name = $_GET['Name'];
$DELsuccess = '';


$sql = "DELETE FROM game WHERE GameID= $id;";
if(mysqli_query($Connect, $sql)){
   /* $path="Upload/".$id;
    if(is_dir($path)) {
        if(rmdir($path)) {
           $DELsuccess = 'mananananan'; 
        }
        $DELsuccess = 'deleted';
    }*/
    $DELsuccess = $name." was deleted successfully!";
}
else{
   $DELsuccess = "Game deleting failed, please try again."; 
}

header("Content-Type: text/plain"); 
echo $DELsuccess;
?>
