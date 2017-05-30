<?php

session_start();
require 'db.php';

$result = $mysqli->query("SELECT name_company FROM company");
echo  "<select class='form-control' type='text' id='list-company'>";

$i = 0;
while ($row = mysqli_fetch_array($result)) {
    $name = $row['name_company']; 
      echo "<option name='$name'>" . $row["name_company"] . "</option>";
    }

echo "</select>";

mysqli_close($mysqli);
?>