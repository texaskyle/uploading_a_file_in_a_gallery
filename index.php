<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uploading picture in the gallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>upload your picture here</h1>
    <h2>some of my favourite pictures</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem adipisci veritatis necessitatibus,
         iure vel mollitia facilis eligendi? Nemo cupiditate doloribus consectetur distinctio blanditiis nihil culpa ex 
         non! Dolores, sunt porro!</p>
    <form action="upload.php" method="POST" enctype="multipart/form-data"><br>
        <input type="file" name="fileToUpload"><br>
        <input type="text" name="pic_description" placeholder="describe image"><br>
        <input type="text" name="pic_tag" placeholder="picture tag"><br>
        <button type="submit" name="submitUpload">upload picture</button><br>
    </form>

    <?php
    include_once 'mygalleryDB.php';

    $query = "SELECT * FROM pictures ORDER BY pic_added_time DESC;";
    $results = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($results)) {
        ?>
        <img src="./images/<?php echo $row['file_name']; ?>">
        <?php
        echo $row['pic_description'];
        echo $row['pic_tag'];
    }
    ?>
</body>
</html>