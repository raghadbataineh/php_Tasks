<?php 
include '../start_connection.php';


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Location</th>
      <th scope="col">Hobby</th>
      <th scope="col">ِAction</th>
    </tr>
  </thead>

  <tbody>
  <?php
        // Fetch data from the database and populate the table
        $selectQuery = "SELECT * FROM manage_employees";
        $result = mysqli_query($conn, $selectQuery);
      
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['ID']}</td>";
            echo "<td>{$row['Fname']}</td>";
            echo "<td>{$row['Lname']}</td>";
            echo "<td>{$row['Email']}</td>";
            echo "<td>{$row['Phone']}</td>";
            echo "<td>{$row['Location']}</td>";
            echo "<td>{$row['Hobby']}</td>";
            echo "<td><a href='../Update_Data/update-process.php?id={$row['ID']}'>Edit</a> | <a href='../Delete_Data/delete-process.php?id={$row['ID']}'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </tbody>

  <!-- <tbody>
   
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
   
  </tbody> -->
</table>
  <button><a href="../Insert_Data/insert-process.php">Add data</a></button>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>