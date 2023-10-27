<?php

include_once("insert_jewelries.php");

?>

<hr>

<h2>Jewelry</h2>

<table class="table">
  <th scope="col">ID</th>
  <th scope="col">Type</th>
  <th scope="col">Stone</th>
  <th scope="col">Price</th>
  <th scope="col">Stock</th>
  <th scope="col">Image</th>
  <th scope="col"></th>
  <th scope="col"></th>

  <?php

  include_once("connect.php");

  $sql = "SELECT * FROM jewelries
          INNER JOIN jewelries_types ON jewelries_types.id_jewelry_type = jewelries.id_jewelry_type
          INNER JOIN stones ON stones.id_stone = jewelries.id_stone
          ORDER BY id_jewelry DESC";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["id_jewelry"] . "</td>";
      echo "<td>" . $row["jewelry_type"] . "</td>";
      echo "<td>" . $row["stone"] . "</td>";
      echo "<td>" . $row["price"] . "</td>";
      echo "<td>" . $row["stock"] . "</td>";
      echo "<td><a href='" . $row["img_url"] . "'><img src='" . $row["img_url"] . "' alt='' style='width:100px'></td>";
      echo "<td><a href='$url?o=edit_jewelries&e=" . $row["id_jewelry"] . "'><i class='bi bi-pencil'></i></a></td>";
      echo "<td><a href='$url?o=delete_jewelries&d=" . $row["id_jewelry"] . "'><i class='bi bi-trash'></i></a></td>";
      echo "</tr>";
    }
  } else {
    echo "0 results";
  }

  ?>

</table>