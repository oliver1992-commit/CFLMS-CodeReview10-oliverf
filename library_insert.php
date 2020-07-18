
<!DOCTYPE html>
<html>
<head>
<title>Upload</title>
</head>




<body  style="background-color:rgb(211,211,211)">

<img src="https://i.pinimg.com/originals/9e/1f/44/9e1f443f0316f5e8265ed455d5cf6b24.jpg" width="1200px" lang="1000px">
<?php

require_once 'library_connection.php';


if ($_POST) {
    $media = $_POST["title"];
    $published = $_POST["published"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $available = $_POST["available"];
    $publisher_name = $_POST["publisher"];
    $publisher_city = $_POST["city"];
    $publisher_address = $_POST["address"];
    $company_size = $_POST["size"];
    $code_type = $_POST["code_type"];
    $code_num = $_POST["code_num"];
    $item = $_POST["type_item"];
    $discription = $_POST["discription"];
    $image = $_POST["image"];

 







    $sql_insert = "INSERT INTO `library`(`media_title`, `published_date`, `author_first_name`, `author_last_name`, `available`, `publisher_name`,`publisher_city`, `publisher_address`, `company_size`,`code_type`,`code_num`, `type_item`, `discription`,`image_size`)
     VALUES ('$media','$published','$first_name','$last_name','$available','$publisher_name','$publisher_city','$publisher_address','$company_size','$code_type','$code_num','$item','$discription','$image')";


    if (mysqli_query($conn, $sql_insert)) {
        echo "<a href= './library_front.php'><h1>The upload was successful!!!</h1></a>";
    } else {
        die($conn->error);
    }
}


?>



</body>

</html>