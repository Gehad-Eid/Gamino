<?php
include_once "include/Connect.php";
if(isset($_POST['AddGame'])){

 $GameName= $_POST['GName'];

 AddGame($GameName);
    
}

if(isset($_SERVER['REQUEST_METHOD']) ==  "POST" && isset($_POST['GameName'])){
        $UPicTmp= $_FILES['photo']['tmp_name'];
        $PicPath="Upload/".$_POST['GameID']."/".$_FILES['photo']['name'];
        
        if($_FILES['video']['name'] != "" ){
           $UVideoTmp=$_FILES['video']['tmp_name'];   
           $VidPath="Upload/".$_POST['GameID']."/".$_FILES['video']['name'];
         $SQL1="UPDATE game SET Name='".$_POST['GameName']."' , Type='".$_POST["GameType"]."', Description='".$_POST['message']."' , Picture='Upload/".$_POST['GameID']."/".$_FILES['photo']['name']."' , StoryVideo='Upload/".$_POST['GameID']."/".$_FILES['video']['name']."' WHERE GameID='".$_POST['GameID']."'  ;  ";
         $Result1=mysqli_query( $Connect ,$SQL1 );
                 
  
       move_uploaded_file($UPicTmp, $PicPath ); 
       move_uploaded_file($UVideoTmp, $VidPath );
       header("Location: UpdateGame.php");
  
        }else{
            $SQ="SELECT StoryVideo FROM game WHERE  GameID='".$_POST['GameID']."'  ;  ";
            
            $R=mysqli_query( $Connect ,$SQ);
            $SVideo="";
            while ($row = mysqli_fetch_assoc($R)) {
               $SVideo= $row['StoryVideo'];
            }
            
           $SQL1="UPDATE game SET Name='".$_POST['GameName']."' , Type='".$_POST["GameType"]."', Description='".$_POST['message']."' , Picture='Upload/".$_POST['GameID']."/".$_FILES['photo']['name']."' , StoryVideo='".$SVideo."' WHERE GameID='".$_POST['GameID']."'  ;  ";
           $Result1=mysqli_query( $Connect ,$SQL1 ); 
       
          
          move_uploaded_file($UPicTmp, $PicPath ); 

          header("Location: UpdateGame.php"); 
           
        }
        

}


if(isset($_GET['DeleteID'])){
   

 $SQL1="DELETE FROM game WHERE GameID='".$_GET['DeleteID']."' ;";
$Result1=mysqli_query( $Connect ,$SQL1 );  
 $success= "The ".$_GET["DeleteName"]." was deleted successfully" ;
    
        
}

 function AddGame($GameName){
        global $Connect;
        global $error;
        global $database;
        
     $LowerGameName=strtolower($GameName);
         
    //$pic = $_FILES['photo'];// FILES is superglobal array to get all the info from the file
    //// .. we can extract the name - the size of the file - the type of the file
    
    //To get the name of the file
     $PicName= $_FILES['photo']['name'];
    $VideoName=$_FILES['video']['name'];
   
     //T]o get the name of the file
    $PicTmp= $_FILES['photo']['tmp_name'];
    $VideoTmp=$_FILES['video']['tmp_name'];
    
    // to get the size of the files
    //$PicSize= $_FILES['photo']['size'];
    //$VideoSize=$_FILES['video']['size'];
    // get the name of the file to stop uploading the file in case an error happned
    $PicError= $_FILES['photo']['error'];
    $VideoError=$_FILES['video']['error'];
    
    //Get the file type
     // $PicType= $_FILES['photo']['type'];
     // $VideoType=$_FILES['video']['type'];
    
      $PicExtention= explode(".", $PicName);
      $VideoExtention = explode(".", $VideoName);
      
     // to check the entity at the end of the array end($VideoExtention)
      $PicLowerExt= strtolower(end($PicExtention));
      $VideoLowerExt= strtolower(end($VideoExtention));
      
      // lower case
     /* 
      $PicAllowed= array("jpg", "jpeg", "png");
      $VideoAllowed= array("mov", "mp4", "wmv", "flv", "webm", "mkv");
      */
      $nextID= getNextID("game");
      
      if ($PicTmp != "") {
      if (!file_exists("Upload/" . $nextID)) {
        mkdir("Upload/" . $nextID, 0777, true);
      }}
      $PicDestination="";
      $VideoDestination="";
      
      if($PicError == 0 ) {
          // to prevent the file from being replaced
          $newPicname= uniqid('', true ).".".$PicLowerExt ;//creates random id based on the tcurrent time
          $PicDestination= "Upload/". $nextID."/".$newPicname;
          move_uploaded_file($PicTmp, $PicDestination); 
          
           if($_FILES['video']['name'] != ""){
          $newVideoname= uniqid('', true ).".".$VideoLowerExt ;
          $VideoDestination= "Upload/".$nextID."/".$newVideoname;

          move_uploaded_file($VideoTmp, $VideoDestination);
           }
      }
           
      /*
 else if($PicError != 0){
              
              echo "<script> alert('Sorry There was an error uploading your photo!'); </script>";  
      }
       if($VideoError != 0){
           
             echo "<script> alert('Sorry There was an error uploading your video!'); </script>";  
       }
        */
      $exists=false;
       $SQL = "SELECT Name FROM game ;";
 
       $Result = mysqli_query($Connect, $SQL);
     
       while ($row = mysqli_fetch_assoc($Result)) {
           $name= strtolower($row["Name"]);
           if($name== $LowerGameName){
              $exists= true; 
           }
       }
       $GameDesc= $_POST['message'];
       $TypeGame=$_POST['GameType'];
         if(!$exists && isset($_POST['AddGame'])){
              global $success;
              global $Connect ;
              $GameName=strtoupper($GameName);
              if($VideoDestination != ""){
                 
           $sql = "INSERT INTO `game` (Name, Type ,Description, Picture, StoryVideo) values('$GameName', '$TypeGame' , '$GameDesc', '$PicDestination', '$VideoDestination');";
           $result = mysqli_query($Connect, $sql);
               
           $success= "The game was added successfully!";
              }
              else{
                 
                     $VID= "";
           $sql = "INSERT INTO `game` (Name, Type ,Description, Picture, StoryVideo) values('$GameName', '$TypeGame' , '$GameDesc', '$PicDestination', '$VID');";
           $result = mysqli_query($Connect, $sql);
               
           $success= "The game was added successfully!";
              }
        
               
          }
          else{
              
              
             global $error ; 
          $error= "Unable to add the game because it already exists.";
 
           
          }  

    }
    
    
 


function getNextID($table_name)
{
    global $Connect;
    global $database;
 

    $table_name = mysqli_real_escape_string($Connect, $table_name);

    $sql = "SELECT AUTO_INCREMENT FROM information_schema.tables WHERE table_name = '$table_name' AND table_schema = '$database' ;";

    $result = mysqli_query($Connect, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['AUTO_INCREMENT'];
    }

  
    return false;
}

