<?php
  include_once '/home/student/Desktop/Beer-Logger/php/includes/DataBaseHandler.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $sql = "SELECT * FROM users;";
      $result = mysqli_query($connection, $sql);

      # the variable '$resultCheck' is the number of rows with data from the
      # result of our above query
      $resultCheck = mysqli_num_rows($result);

      # if the number of rows with data from our '$result' is > 0
      # AKA - "If there is data that we can access, do the following"
      if($resultCheck > 0){
        # insert every row of data into the variable '$row' (also becomes an array)
        while($row = mysqli_fetch_assoc($result))
        {
          echo $row['username'];
          echo "\r\n";
        }
      }
    ?>
  </body>
</html>
