<!DOCTYPE html>
<html>
<body>
here:
<?php
  DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'vis');

  $connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }

  echo "a";
  $sql = "SELECT userID, rights FROM user";
  
  
  echo "b";
  $result = $connection->query($sql);
  
  echo "c";
  if ($result->num_rows > 0) {

  echo "d";
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<br> id: ". 
          $row["userID"]. " - Rights: ". 
          $row["rights"]. "<br>";
      }
  } else {
    echo "0 results";
}

  $connection->close();
?>

</body>
</html>