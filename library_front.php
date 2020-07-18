<!DOCTYPE html>

<html>

<head>
<title>Home page</title>
<link rel="stylesheet" href="style.css">
</head>

<body style="background-color:rgb(211,211,211)"> 
    <img src="https://d1vp8nomjxwyf1.cloudfront.net/wp-content/uploads/sites/261/2017/11/30154205/monastery-1.jpg" width="1900px" lang="1080px">
<table> 
<h2><a href ='./input_panel.php'>Add new details</a><br><br></h2>
    <?php
        
        require_once 'library_connection.php';

        $sql_select = "SELECT * FROM library";

        $sql_query = mysqli_query($conn, $sql_select);

        /*changes*/
        

        if($sql_query->num_rows == 0)
        {
            die("No results". mysqli_connect_error($conn));
        }
        elseif ($sql_query->num_rows == 1)
        {
            $row = $sql_query->fetch_assoc();

            echo "<tr><td><h2>Title</h2>"."<p>".$row["media_title"]."</p></td>"."<td><h3>Published</h3>"."<p>".$row["published_date"]."</p></td>"."<td><h3>Name of author</h3>" ."<p>".$row["author_first_name"]." ".$row["author_last_name"]."</p></td>"."</tr>"."<tr><td><h3>Status</h3>". "<p>".$row["available"]."</p></td>".
          "<td><h3>Publisher</h3>"."<p>".$row["publisher_name"]."</p></td>"."<td><h3>Publisher city</h3>"."<p>".$row["publisher_city"]."</p></td>"."<td><h3>Publisher address</h3>"."<p>".$row["publisher_address"]."</p></td>"."<td><h3>Corparation</h3>"
          ."<p>".$row["company_size"]."</p></td></tr>"."<tr><td><h3>Cod type</h3>"."<p>".$row["code_type"]."</p></td>"."<td><h3>Code number</h3>"."<p>".$row["code_num"]."</p></td>"."<td><h3>Item</h3>"."<p>".$row["type_item"]."</p></td>"."<td><h3>Discription</h3>"."<p>".$row["discription"]."</p></td>"
          ."<td><h3>Image</h3>"."<p>".$row["image_size"]."</p></td>"."<br><br>"."<td><a href='update_panel.php?id=".$row["id"]."'><h3>Update</h3></a>"."<br><br>"."<a href='delete.php?id=".$row["id"]."'><h3>Delete</h3></td></tr>";
        }
      
        else
        {
            $row = $sql_query->fetch_all(MYSQLI_ASSOC);
            foreach ($row as $result =>$value)
            {
               echo "<tr><td><h2>Title</h2>"."<p>".$value["media_title"]."</p></td>"."<td><h3>Published</h3>"."<p>".$value["published_date"]."</p></td>"."<td><h3>Name of author</h3>" ."<p>".$value["author_first_name"]." ".$value["author_last_name"]."</p></td>"."</tr>"."<tr><td><h3>Status</h3>". "<p>".$value["available"]."</p></td>".
               "<td><h3>Publisher</h3>"."<p>".$value["publisher_name"]."</p></td>"."<td><h3>Publisher city</h3>"."<p>".$value["publisher_city"]."</p></td>"."<td><h3>Publisher address</h3>"."<p>".$value["publisher_address"]."</p></td>"."<td><h3>Corparation</h3>"
               ."<p>".$value["company_size"]."</p></td></tr>"."<tr><td><h3>Cod type</h3>"."<p>".$value["code_type"]."</p></td>"."<td><h3>Code number</h3>"."<p>".$value["code_num"]."</p></td>"."<td><h3>Item</h3>"."<p>".$value["type_item"]."</p></td>"."<td><h3>Discription</h3>"."<p>".$value["discription"]."</p></td>"
               ."<td><h3>Image</h3>"."<p>".$value["image_size"]."</p></td>"."<br><br>"."<td><a href='update_panel.php?id=".$value["id"]."'><h3>Update</h3></a>"."<br><br>"."<a href='delete.php?id=".$value["id"]."'><h3>Delete</h3></td></tr>";
             }
        }


        $conn->close();
        






        /*$value["media_title"]. " " .$value["published_date"]. " " . $value["author_first_name"]. " ". $value["author_last_name"]. " " . $value["availabal"]. " " 
               .$value["publisher_name"]." ".$value["publisher_address"]. " " .$value["company_size"]." " .$value["image_size"]." " .$value["code"]." " .$value["type_item"]." " .$value["discription"]." "
               . */
/*
               echo "<h4>Title</h4>".$value["media_title"]."<h4>Published</h4>".$value["published_date"]."<h4>Name of author</h4>". $value["author_first_name"]." ". $value["author_last_name"]."<h4>Status</h4>". $value["available"].
               "<h4>Publisher</h4>".$value["publisher_name"]."<h4>Publisher city</h4>".$value["publisher_city"]."<h4>Publisher address</h4>".$value["publisher_address"]."<h4>Company empire</h4>".$value["company_size"]
               ."<h4>Cod type</h4>".$value["code_type"]."<h4>Code number</h4>".$value["code_num"]."<h4>Item</h4>".$value["type_item"]."<h4>Discription</h4>".$value["discription"]
               ."<h4>Image</h4>".$value["image_size"]."<br><br>"."<a href='update_panel.php?id=".$value["id"]."'>Update</a>"." "."<a href='delete.php?id=".$value["id"]."'>Delete</a><br>";
        */


/*
        "<tr><td><h3>Title</h3>"."<p>".$row["media_title"]."</p>"."  "."</td>"."<td><h3>Published</h3>"."<p>".$row["published_date"]."</p>"."  "."</td>"."<td><h3>Name of author</h3>" ."<p>". $row["author_first_name"]."</p>"." ". "<p>".$row["author_last_name"]."</p>"."  "."</td></tr>"."<tr><td><h3>Status</h3>". "<p>".$row["available"]."</p>"."  "."</td>".
        "<td><h3>Publisher</h3>"."<p>".$row["publisher_name"]."</p>"."  "."</td>"."<td><h3>Publisher city</h3>"."<p>".$row["publisher_city"]."</p>"."  "."</td>"."<td><h3>Publisher address</h3>"."<p>".$row["publisher_address"]."</p>"."  "."</td>"."<td><h3>Corparation</h3>"
        ."<p>".$row["company_size"]."</p>"."  "."</td></tr>"."<tr><td><h3>Cod type</h3>"."<p>".$row["code_type"]."</p>"."  "."</td>"."<td><h3>Code number</h3>"."<p>".$row["code_num"]."</p>"."  "."</td>"."<td><h3>Item</h3>"."<p>".$row["type_item"]."</p>"."  "."</td>"."<td><h4>Discription</h4>"."<p>".$row["discription"]."</p>"."  "."</td>"
        ."<td><h3>Image</h3>"."<p>".$row["image_size"]."</p>"."  "."</td>"."<br><br>"."<td><a href='update_panel.php?id=".$row["id"]."'><h3>Update</h3></a>"."<br><br>"."<a href='delete.php?id=".$row["id"]."'><h3>Delete</h3></td></tr>";
      }
    */
/*
    "<tr><td><h3>Title</h3>".$value["media_title"]."  "."</td>"."<td><h3>Published</h3>".$value["published_date"]."  "."</td>"."<td><h3>Name of author</h3>" . $value["author_first_name"]." ". $value["author_last_name"]."  "."</td></tr>"."<tr><td><h3>Status</h3>". $value["available"]."  "."</td>".
    "<td><h3>Publisher</h3>".$value["publisher_name"]."  "."</td>"."<td><h3>Publisher city</h3>".$value["publisher_city"]."  "."</td>"."<td><h3>Publisher address</h3>".$value["publisher_address"]."  "."</td>"."<td><h3>Corparation</h3>"
    .$value["company_size"]."  "."</td></tr>"."<tr><td><h3>Cod type</h3>".$value["code_type"]."  "."</td>"."<td><h3>Code number</h3>".$value["code_num"]."  "."</td>"."<td><h3>Item</h3>".$value["type_item"]."  "."</td>"."<td><h3>Discription</h3>".$value["discription"]."  "."</td>"
    ."<td><h3>Image</h3>".$value["image_size"]."  "."</td>"."<br><br>"."<td><a href='update_panel.php?id=".$value["id"]."'><h3>Update</h3></a>"."<br><br>"."<a href='delete.php?id=".$value["id"]."'><h3>Delete</h3></a></td></tr>";
  
*/

               ?>
</table>