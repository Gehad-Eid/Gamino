<?php
$Host="localhost";
$Username="root";
$Password="root";
$database="gamnio";
$error = false ;
$success= false ;
$Connect = mysqli_connect($Host, $Username, $Password,$database);
$error=mysqli_error($Connect);
if($error){
    
    
    die("Something went wrong");
}