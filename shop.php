<?php
include_once("connect.php");
?>

<ul class="nav nav-pills">
  <li class="nav-item">
    <a href="<?= $url ?>" class="nav-link active"><i class="bi bi-arrow-return-left"></i> Previous</a>
  </li>
</ul>

<div class="container">
  <h1 class="text-center mb-5">Shop</h1>

  <div class="row">
    <div class="col-sm">
      <a href="<?= $url ?>?o=shop_alchemies" class="text-decoration-none">
        <div class="card">
          <img src="img/Lemon balm mosquitoes.jpg" alt="" class="card-img-top">
          <div class="card-body">
            <h2>Alchemies</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo, possimus nam ipsam atque cum? Iusto deserunt dolorum assumenda ipsum molestias exercitationem explicabo officiis quis. Consectetur mollitia quod accusantium reprehenderit?</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-sm">
      <a href="<?= $url ?>?o=shop_jewelries" class="text-decoration-none">
        <div class="card">
          <img src="img/flower woman.png" alt="" class="card-img-top">
          <div class="card-body">
            <h2>Jewelries</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo, possimus nam ipsam atque cum? Iusto deserunt dolorum assumenda ipsum molestias exercitationem explicabo officiis quis. Consectetur mollitia quod accusantium reprehenderit?</p>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>