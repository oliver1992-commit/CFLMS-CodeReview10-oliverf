<?php
        require_once 'library_connection.php';

        if($_GET['id'])
        {
            $id = $_GET["id"];

            $sql = "SELECT * FROM library WHERE id=$id";

            $result = mysqli_query($conn,$sql);

            
            $row = $result->fetch_assoc();
        }

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Update panel</title> 
    </head>
    <body  style="background-color:rgb(211,211,211)">
        <h2><a href="library_front.php">Back to home page</a></h2>

        <img src="https://static1.squarespace.com/static/5b0b5ed425bf021332ff14b3/5b0b5f6aed62fe202182099c/5b0b5fa5ed62fe202182118a/1527472631798/?format=1500w" width="1200px" lang="1000px">
        <table>
        <form action="library_update.php" method="POST">
           <tr><input type="hidden" name="id" value="<?php echo $row["id"] ?>">
            <td><input type="text" placeholder="title" name="title" value="<?php echo $row["media_title"] ?>"></td>
            <td><input type="date" placeholder="published" name="published" value="<?php echo $row["published_date"] ?>"></td>
            <td><input type="text" placeholder="author first name" name="first_name" value="<?php echo $row["author_first_name"] ?>"></td>
            <td><input type="text" placeholder="author last name" name="last_name" value="<?php echo $row["author_last_name"] ?>"></td>
            <td><input list="status" placeholder="status" name="available" value="<?php echo $row["available"] ?>">
                <datalist id="status">
                    <option value="unavailable">
                    <option value="available">
                    <option value="reserved">
                </datalist></td></tr>
                <tr><td><input type="text" placeholder="publisher name" name="publisher" value="<?php echo $row["publisher_name"] ?>"></td>
                <td><input type="text" placeholder="publisher city" name="city" value="<?php echo $row["publisher_city"] ?>"></td>
                <td><input type="text" placeholder="publisher address" name="address" value="<?php echo $row["publisher_address"] ?>"></td>
                <td><input list="size" placeholder="Corparation" name="size" value="<?php echo $row["company_size"] ?>">
                <datalist id="size">
                    <option value="small">
                    <option value="medium">
                    <option value="large">
                </datalist></td></tr>
                <tr><td><input list="code" placeholder="code" name="code_type" value="<?php echo $row["code_type"] ?>"></td>
                <datalist id="code">
                    <option value="ISBN">
                    <option value="EAN">
                    <option value="UPC">
                    <option value="ENEM">
                </datalist>
                <td><input type="text" placeholder="code number" name="code_num" value="<?php echo $row["code_num"] ?>"></td>
                <td><input list="type_item" placeholder="type_item" name="type_item" value="<?php echo $row["type_item"] ?>"></td>
                <datalist id="type_item">
                    <option value="CD">
                    <option value="DVD">
                    <option value="BOOK">
                </datalist>
                <td><input type="text" placeholder="discription" name="discription" value="<?php echo $row["discription"] ?>"></td>
                <td><input type="text" placeholder="image" name="image"  value="<?php echo $row["image_size"] ?>"></td>

                <td><input type="submit" value="submit"></td></tr>
        </form>

        </table>




    </body>




    </html>