<?php

echo "<h2 class='text-center'>Insert Stone</h2>";

include_once("form_stones.php");

if (!empty($_POST['stone'])) {

  $stone = test_input($_POST['stone']);

  $sql = "INSERT INTO stones (stone)
          VALUES ('$stone')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
