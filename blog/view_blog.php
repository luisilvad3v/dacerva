<ul class="nav nav-pills">
  <li class="nav-item">
    <a href="<?= $url ?>blog/" class="nav-link active"><i class="bi bi-arrow-return-left"></i> Previous</a>
  </li>
</ul>

<?php
include_once("../connect.php");

if (!empty($_GET["id"]) && isset($_GET["id"])) {
  $id_blog = $_GET["id"];

  $sql = "SELECT * FROM blogs WHERE id_blog = $id_blog";

  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    if ($row = $result->fetch_assoc()) {
      $title = $row["title"];
      $text = $row["text"];
      $date = $row["date"];
      $youtube_url = $row["youtube_url"];
      $thumbnail_url = $row["thumbnail_url"];

      echo "<div class='container mt-5'>";
      echo "<div class='row'>";
      echo "<div class='col'>";
      echo "$youtube_url";
      echo "</div>";
      echo "<div class='col text-center'>";
      echo "<h2>$title</h2>";
      echo "<p>$date</p>";
      echo "</div>";
      echo "</div>";
      echo "<div class='b-example-divider'>";
      echo "</div>";
      echo "<div class='row mt-5'>";
      echo "<p>$text</p>";
      echo "</div>";
      echo "</div>";
    }
  } else {
    echo "0 results";
  }
}
?>