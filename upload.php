<?php
include_once 'mygalleryDB.php';

if (isset($_POST['submitUpload'])) {
    
    if (empty($_POST['pic_description']) || empty($_POST['pic_tag'])) {
        echo "please fill all the input fields";
    }else{
        $file_name = $_FILES["fileToUpload"]["name"];
        $tempname = $_FILES["fileToUpload"]["tmp_name"];
        $pic_description = $_POST["pic_description"];
        $pic_tag = $_POST["pic_tag"];
        $folderSave = "./images/" .$file_name;

        $sql = "INSERT INTO pictures(file_name, pic_description, pic_tag) 
        VALUES ('$file_name', '$pic_description', '$pic_tag');";
        mysqli_query($conn, $sql);

        // moving the file to the folder
        if (move_uploaded_file($tempname, $folderSave)) {
            echo "<h1>successfully uploaded the image</h1>";
            header("Location: index.php");
        }else{
            echo "<h1>your image failed to upload!</h1>";
        }

    }
}else{
    echo "Please click the submit button";
}

?>