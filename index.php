<!DOCTYPE html>
<html>
<head>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<?php
include 'header.php';
session_start();
  include 'connection.php';
  $sql = "SELECT * FROM student ORDER BY id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    ?>
    <table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
    </tr>
  </thead>
  <tbody>
    <?php

if (isset(
$_SESSION["login"])){



}
else{
   header('Location: http://localhost/Newfolder/login.php');
}
    while($row = $result->fetch_assoc()) {
        ?>
    <tr>
      <th scope="row"><?php echo $row["id"] ?></th>
      <td><?php echo $row["name"] ?></td>
      <td><?php echo $row["email"] ?></td>
      <td><?php echo $row["message"] ?></td>
      <td><a href="view1.php?id=<?php echo $row["id"] ?>">view</a></td>
    </tr>

        <?php
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>
  </tbody>
</table>