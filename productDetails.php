<?php
include './db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <!-- ======== Swiper Js ======= -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css" />

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'>

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./styles.css" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="/webproj/images/logo.png" type="image/png" />
  <title>Niranjan</title>
</head>

<body>

  <!-- Navigation -->
  <?php
  include "./components/nav.php";
  ?>

  <!-- Product Details -->
  <section class="section product-detail">
    <div class="details container">
      <?php
      $id = $_GET['id'];
      $query = mysqli_query($conn, "SELECT *, 
                            products.name AS product_name, products.image_url 
                            AS product_image, categories.name 
                            AS category_name FROM `products` 
                            INNER JOIN categories ON products.category_id=categories.id 
                            where products.id=$id");
      while ($run = mysqli_fetch_array($query)) {
        $id = $run['id'];
        $image = $run['product_image'];
        $name = $run['name'];
        $price = $run['price'];
        $discount_price = $run['discount_price'];
        $details = $run['details'];
        $cat_name = $run['category_name'];
      ?>
        <div class="left">
          <div class="main row">
            <div class="swiper-container slider-4">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?= $image ?>" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="./images/product-2.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="./images/product-3.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="./images/product-1.jpg" alt="" />
                </div>
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>
        <div class="right">
          <span><?= $cat_name ?></span>
          <h1><?= $name ?></h1>
          <div style="display: flex; flex-direction:row">
            <div class="price">₹<?= $discount_price ?></div>
            <div class="prevPrice">₹<?= $price ?></div>
          </div>

          <form class="form">
            <input type="number" placeholder="1" style="width: 60px" />
            <a href="cart.php" class="addCart">Add To Cart</a>
          </form>
          <h3>Product Detail</h3>
          <p>
            <?= $details ?>
          </p>
        </div>

      <?php
      }
      ?>
    </div>
  </section>



  <!-- Footer -->
  <?php

  include "./components/footer.php";

  ?>
  <!-- End Footer -->

  <!-- Custom Scripts -->
  <script src="./js/index.js"></script>
  <script type="text/javascript">
    const swiper4 = new Swiper(".slider-4", {
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      grabCursor: true,
      effect: "fade",
      loop: true,
      navigation: {
        nextEl: ".swiper-next",
        prevEl: ".swiper-prev",
      },
    });
  </script>
</body>

</html>