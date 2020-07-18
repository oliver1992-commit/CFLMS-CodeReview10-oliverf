<!DOCTYPE html>
<html>
<head>
    <title>Input</title>
</head>

<body  style="background-color:rgb(211,211,211)">
<table>
    <h2><a href="library_front.php">Back to the home page</a></h2>
    <img src="https://new.discovergermany.com/wp-content/uploads/2020/01/1-STGALLENSTIFT_DSF8411_FISCHER_klein.jpg" width="1200px" lang="1000">
<form action="library_insert.php" method="post">
    <tr><td><input type="text" placeholder="title" name="title"></td>
    <td><input type="date" placeholder="published" name="published"></td>
    <td><input type="text" placeholder="author first name" name="first_name"></td>
    <td><input type="text" placeholder="author last name" name="last_name"></td>
    <td><input list="status" placeholder="status" name="available">
    <datalist id="status">
                    <option value="unavailable">
                    <option value="available">
                    <option value="reserved">
                    </datalist></td></tr>
        <tr><td><input type="text" placeholder="publisher name" name="publisher"></td>
        <td><input type="text" placeholder="publisher city" name="city"></td>
        <td><input type="text" placeholder="publisher address" name="address"></td>
        <td><input list="size" placeholder="Corparation" name="size">
        <datalist id="size">
                    <option value="small">
                    <option value="medium">
                    <option value="large">
                    </datalist></td></tr>
        <tr><td><input list="code" placeholder="code" name="code_type">
        <datalist id="code">
                    <option value="ISBN">
                    <option value="EAN">
                    <option value="UPC">
                    <option value="ENEM">
                </datalist></td>
        <td><input type="text" placeholder="code number" name="code_num"></td>
        <td><input list="type_item" placeholder="type_item" name="type_item">
        <datalist id="type_item">
                    <option value="CD">
                    <option value="DVD">
                    <option value="BOOK">
                </datalist></td>
        <td><input type="text" placeholder="discription" name="discription"></td>
        <td><input type="text" placeholder="image" name="image"></td>
        <td><input type="submit" value="submit"></td></tr>
    </table>
</form>



</body>



</html>