<?php 
include '../start_connection.php';

if (isset($_POST['insert'])) {

$fname = $_POST ['fname'];
$lname = $_POST ['lname'];
$email= $_POST ['email'];
$phone= $_POST ['phone'];
$location= $_POST ['location'];
$hobby= $_POST ['hobby'];


$query = "INSERT INTO manage_employees (Fname, Lname, Email, Phone, Location, Hobby) 
VALUES ('$fname', '$lname', '$email', '$phone', '$location', '$hobby')";
$result = mysqli_query($conn , $query);

if ($result){
        echo "Data Updated";
    } else {
        echo "Data not updated";
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
        <!-- ID to update: <input type="text" name="id" required><br><br> -->
        fname to Insert: <input type="text" name="fname" required><br><br>
        lname to Insert: <input type="text" name="lname" required><br><br>
        Email to Insert: <input type="email" name="email" required><br><br>
        Phone to Insert: <input type="number" name="phone" required><br><br>
        Location to Insert: <input type="text" name="location" required><br><br>
        Hobby to Insert: <input type="text" name="hobby" required><br><br>
        <input type="submit" name="insert" value="Insert Data">
    </form>
    <button><a href="../Insert_Data/dashboared.php">go to home</a></button>
</body>
</html>