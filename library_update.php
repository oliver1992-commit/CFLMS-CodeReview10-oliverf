
<!DOCTYPE html>
<html>
<head>
    <title>Update process</title>

</head>

<body  style="background-color:rgb(211,211,211)">
    <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F28%2F2017%2F04%2Fjohns-hopkins-university-george-peabody-library-COLLEGELIB0417.jpg"
    width="1200px" lang="1000px">

<?php

require_once 'library_connection.php';

if($_POST)
{   
    $id = $_POST["id"];
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



    $sql_update = "UPDATE `library`SET `media_title`= '$media',`published_date`='$published', `author_first_name` ='$first_name', `author_last_name` ='$last_name',
    `available`='$available',`publisher_name`='$publisher_name',`publisher_city`='$publisher_city',`publisher_address`=' $publisher_address',`company_size`='$company_size',
    `code_type`='$code_type',`code_num`='$code_num',`type_item`='$item',`discription`='$discription',`image_size`='$image' WHERE id = $id";


if(mysqli_query($conn,$sql_update))
    {
    echo "<a href='library_front.php'><h2>Update was successful!!!</h2><br></a>";
    }
   else
    {
      echo  "its a problem";
    }

}







?>



</body>



</html>