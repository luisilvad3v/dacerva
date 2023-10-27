<?php

include_once("insert_alchemies_types.php");

?>

<hr>

<h2>Alchemy types</h2>

<table class="table">
  <th scope="col">ID</th>
  <th scope="col">Type</th>
  <th scope="col"></th>
  <th scope="col"></th>

  <?php

  include_once("connect.php");

  $sql = "SELECT * FROM alchemies_types ORDER BY id_alchemy_type DESC";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["id_alchemy_type"] . "</td>";
      echo "<td>" . $row["alchemy_type"] . "</td>";
      echo "<td><a href='$url?o=edit_alchemies_types&e=" . $row["id_alchemy_type"] . "'><i class='bi bi-pencil'></i></a></td>";
      echo "<td><a href='$url?o=delete_alchemies_types&d=" . $row["id_alchemy_type"] . "'><i class='bi bi-trash'></i></a></td>";
      echo "</tr>";
    }
  } else {
    echo "0 results";
  }

  ?>

</table>