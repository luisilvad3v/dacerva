<ul class="nav nav-pills">
  <li class="nav-item">
    <a href="<?= $url ?>?o=shop_jewelries" class="nav-link active"><i class="bi bi-arrow-return-left"></i> Previous</a>
  </li>
</ul>

<?php
include_once("connect.php");

if (!empty($_GET["id"]) && isset($_GET["id"])) {
  $id_jewelry = $_GET["id"];

  $sql = "SELECT * FROM jewelries
          INNER JOIN jewelries_types ON jewelries_types.id_jewelry_type = jewelries.id_jewelry_type
          INNER JOIN stones ON stones.id_stone = jewelries.id_stone  
          WHERE id_jewelry = $id_jewelry";

  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    if ($row = $result->fetch_assoc()) {
      $jewelry_type = $row["jewelry_type"];
      $stone = $row["stone"];
      $price = $row["price"];
      $stock = $row["stock"];
      $img_url = $row["img_url"];

      echo "<div class='container'>";
      echo "<h2 class='text-capitalize text-center mb-5'>$stone $jewelry_type</h2>";
      echo "<div class='row'>";

      echo "<div class='col-sm-6'>";
      echo "<img src='$img_url' alt='' class='img-fluid rounded img-thumbnail'>";
      echo "</div>";

      echo "<div class='col-sm-6'>";
      echo "<p>{$price}€</p>";
      echo "</div>";

      echo "</div>";
      echo "</div>";
    }
  } else {
    echo "0 results";
  }
}
