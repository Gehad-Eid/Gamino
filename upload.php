<?php
include "include/Connect.php";
global $statusMsg;
    $statusMsg = '';
    
if(isset($_POST["submit"]) || isset($_POST["update"])){
$SQL="SELECT * FROM game ;";
$Result= mysqli_query( $Connect, $SQL);
$row=mysqli_fetch_assoc( $Result );

$SQL2="SELECT MAX(GameID) FROM game ;";
$Result2= mysqli_query( $Connect, $SQL2);
$row2=mysqli_fetch_assoc( $Result2 );
$id=$row2["MAX(GameID)"];
$id++;

//function addGame($id){
    

    // File upload path
        mkdir("Upload/" . $id);
        $targetDir = "Upload/".$id."/";
        $fileName = $_FILES["photo"]["name"];
        $vidName = $_FILES["video"]["name"];

        $PicTmp= $_FILES['photo']['tmp_name'];
        $VideoTmp=$_FILES['video']['tmp_name'];

        $targetFilePath = $targetDir . $fileName ;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


        $name=trim($_POST["GName"]);
        $type=trim($_POST["GameType"]);
        $message=trim($_POST["message"]);
        $date=date("d F Y");
        $GameURL=trim($_POST["GameStory"]);//replace "" and '' 
        $GameURL = str_replace("/watch?v=","/embed/",$GameURL);

    
        if(!empty($_FILES["photo"]["name"])){
            // Allow certain file formats
            $allowTypes = array('jpg','png','jpeg');
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath)){
                    if(!empty($_FILES["video"]["name"])){
                        $vidTargetFilePath = $targetDir . $vidName ;
                        $vidfileType = pathinfo($vidTargetFilePath,PATHINFO_EXTENSION);
                        move_uploaded_file($_FILES["video"]["tmp_name"], $vidTargetFilePath);
                    }

                    if ($Result->num_rows > 0){
                            $found = false;
                            while ($row = mysqli_fetch_assoc($Result)){
                               if(strtolower($name) == strtolower($row['Name'])){
                                   $found = true;
                               }
                            }
                        }
                    
                    if (isset($_POST["update"])) {
                        if(!$found){
                            $statusMsg = "The game doesn't exists!";
                        }
                        else{
                            $UPid=$_GET['id'];
                            $update = $Connect->query("UPDATE  game SET Name='$name', Type='$type', AddTime='$date', Description='$message', Picture='$targetFilePath', StoryVideo='$vidTargetFilePath', VideoURL='$GameURL' where GameID =$UPid ;");
                            if($update){
                                $statusMsg = "The game was updated successfully!";
                            }else{
                                $statusMsg = "Somthing went wrong, please try again.";
                            }
                        }
                    }
                    else{
                        if(!$found){
                            // Insert image file name into database
                            $insert = $Connect->query("INSERT INTO game (GameID, Name, Type, AddTime, Description, Picture, StoryVideo, VideoURL) VALUES ('$id', '$name', '$type', '$date', '$message', '$targetFilePath', '$vidTargetFilePath', '$GameURL')");
                            if($insert){
                                $statusMsg = "The game was added successfully!";
                            }else{
                                $statusMsg = "File upload failed, please try again.";
                            } 
                        }
                        else{
                            $statusMsg = "The game already exists!";
                        } 
                    }
                    
                }else{
                    $statusMsg = "Sorry, there was an error uploading your file.";
                }
            }else{
                $statusMsg = 'Sorry, only JPG, JPEG, & PNG files are allowed to upload.';
            }
        }else{
            $statusMsg = 'Please select a photo to upload.';
        }
    }

//}
?>

