<ul class="nav nav-pills">
  <li class="nav-item">
    <a href="../" class="nav-link active"><i class="bi bi-arrow-return-left"></i> Previous</a>
  </li>
</ul>

<div class="container">
  <h1 class="text-center mb-5">Blog</h1>
  <div class="row">

    <?php

    $sql = "SELECT * FROM blogs ORDER BY id_blog DESC";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $id_blog = $row["id_blog"];
        $title = $row["title"];
        $text = $row["text"];
        $date = $row["date"];
        $youtube_url = $row["youtube_url"];
        $thumbnail_url = $row["thumbnail_url"];

        echo "<div class='col-sm-6 col-md-4 col-lg-3'>";
        echo "<a href='?o=blog&id=$id_blog' class='text-decoration-none'>";
        echo "<div class='card mb-3 shadow'>";
        echo "<img src='img/$thumbnail_url' alt='' class='card-img-top'>";
        echo "<div class='card-body'>";
        echo "<p class='text-center'>$date</p>";
        echo "<p class='text-capitalize text-center'>$title</p>";
        echo "</div>";
        echo "</div>";
        echo "</a>";
        echo "</div>";
      }
    } else {
      echo "0 resultados";
    }

    ?>
  </div>
</div>