<?php 

include '../start_connection.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $hobby = $_POST['hobby'];

    // Fix the concatenation issue for the location and hobby columns
    $updateQuery = "UPDATE manage_employees SET fname='$fname', lname='$lname', email='$email', phone='$phone', location='$location', hobby='$hobby' WHERE id='$id'";
    $result = mysqli_query($conn, $updateQuery);

    if ($result) {
        echo "Data Updated";
    } else {
        echo "Data not updated: " . mysqli_error($conn); // Display the MySQL error for debugging
    }

    mysqli_close($conn); // Use the correct variable name for closing the connection
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mysqli</title>
</head>
<body>
    <form action="" method="POST">
        id to set the update on : <input type="text" name="id" required><br><br>
        fname to update: <input type="text" name="fname" required><br><br>
        lname to update: <input type="text" name="lname" required><br><br>
        Email to update: <input type="text" name="email" required><br><br>
        Phone to update: <input type="number" name="phone" required><br><br>
        Location to update: <input type="text" name="location" required><br><br>
        Hobby to update: <input type="text" name="hobby" required><br><br>
        <input type="submit" name="update" value="update Data">
    </form>

    <button><a href="../Insert_Data/dashboared.php">go to home</a></button>

</body>
</html>