
<!DOCTYPE html>
<html>
    <head>
        <title>Delete</title>
    </head>

<body  style="background-color:rgb(211,211,211)"> 
<img src="https://www.nautis.com/wp-content/uploads/2013/11/burning_book-wallpaper-1920x1200.jpg"  width="1200px"  lang="100px">

<?php

    require_once './library_connection.php';

    if($_GET["id"])
    {
        $id = $_GET["id"];

        $sql_delete = "DELETE FROM library WHERE id = $id" ;

        if(mysqli_query($conn,$sql_delete))
        {
            echo "<a href='./library_front.php'><h2>The record from place " .$id. " was deleted.</h2></a>";
        }



    }

    $conn->close();

?>


</body>

</html>