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

  $sql = "SELECT userID, rights FROM user";
  
  $result = $connection->query($sql);
  
  if ($result->num_rows > 0) {

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
  echo "Server Path </br>";
$path= $_SERVER['PATH_INFO'];
print_r($path);
// Then we split the path to get the corresponding controller and method to work with
echo "<br/><br/>Path Split<br/>";
print_r(explode('/', ltrim($path)));
?>

</body>
</html>