<form action="" method="POST">
    <input type="text" name="ID" value="5"> 
    <button type="submit">Delete</button>
</form>

<?php 
include '../start_connection.php';

if (isset($_POST['ID'])) {
    $id=$_POST['ID'];

    $deleteQuery = "DELETE FROM manage_employees WHERE ID=$id";
    $result = mysqli_query($conn , $deleteQuery);

    if ($result){
        echo "Data Deleted";
    } else {
        echo "Data not Deleted";
    }


}

?>

<button><a href="../Insert_Data/dashboared.php">go to home</a></button>
