<ul class="nav nav-pills">
  <li class="nav-item">
    <a href="<?= $url ?>shop/alchemies" class="nav-link active"><i class="bi bi-arrow-return-left"></i> Previous</a>
  </li>
</ul>

<?php
include_once("../../connect.php");

if (!empty($_GET["id"]) && isset($_GET["id"])) {
  $id_alchemy = $_GET["id"];

  $sql = "SELECT * FROM alchemies
          INNER JOIN alchemies_types ON alchemies_types.id_alchemy_type = alchemies.id_alchemy_type
          INNER JOIN plants ON plants.id_plant = alchemies.id_plant  
          WHERE id_alchemy = $id_alchemy";

  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    if ($row = $result->fetch_assoc()) {
      $alchemy_type = $row["alchemy_type"];
      $plant_eng = $row["plant_eng"];
      $plant_la = $row["plant_la"];
      $price = $row["price"];
      $stock = $row["stock"];
      $img_url = $row["img_url"];

      echo "<div class='container'>";
      echo "<h2 class='text-capitalize text-center mb-5'>$plant_eng $alchemy_type</h2>";
      echo "<div class='row'>";

      echo "<div class='col-sm-6'>";
      echo "<img src='$img_url' alt='' class='img-fluid rounded img-thumbnail'>";
      echo "</div>";

      echo "<div class='col-sm-6'>";
      echo "<p class='text-capitalize'>$plant_la</p>";
      echo "<p>{$price}€</p>";
      echo "<p>$stock unit in stock</p>";
      echo "</div>";

      echo "</div>";
      echo "</div>";
    }
  } else {
    echo "0 results";
  }
}