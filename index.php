<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.png" type="image/png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
 <!-- ======== Swiper Js ======= -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css"
    />

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'>
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./styles.css" />
  <title>Nature Ecommerce Website</title>
</head>

<body>

  <!-- Navigation -->
  <?php
    include "./components/nav.php";
  ?>

  <div class="hero">
    <div class="row">
      <div class="swiper-container slider-1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./images/hero-1.png" alt="" />
            <div class="content">
              <h1>Super market vegbox
                <br/>
                start from 
                <span>$9</span>
              </h1>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti ad natus facilis magni corporis alias.</p>

              <a href="#">Shop Now</a>
            </div>
          </div>

          <div class="swiper-slide">
            <img src="./images/hero-2.png" alt="hero image" />
            <div class="content">
              <h1>You first Order
                <br/>
                <span>20% off</span>
                at Juice
              </h1>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti ad natus facilis magni corporis alias.</p>
              <a href="#">Shop Now</a>
            </div>
          </div>
          
          <div class="swiper-slide">
            <img src="./images/hero-3.png" alt="hero image" />
            <div class="content">
              <h1>You first Order
                <br/>
                <span>20% off</span>
                at Juice
              </h1>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti ad natus facilis magni corporis alias.</p>
              <a href="#">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Carousel Navigation -->
    <div class="arrows d-flex">
        <div class="swiper-prev d-flex">
          <i class="bx bx-chevrons-left swiper-icon"></i>
        </div>
        <div class="swiper-next d-flex">
          <i class="bx bx-chevrons-right swiper-icon"></i>
        </div>
    </div>
  </div>

  <!-- Promotion -->

  <section class="section promotion">
    <div class="title">
      <h2>Shop Collections</h2>
      <span>Select from the premium product and save plenty money</span>
    </div>

    <div class="promotion-layout container">
      <div class="promotion-item">
        <img src="./images/promo1.jpg" alt="" />
        <div class="promotion-content">
          <h3>JUICE</h3>
          <a href="">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/promo2.jpg" alt="" />
        <div class="promotion-content">
          <h3>MANGO</h3>
          <a href="">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/promo3.jpg" alt="" />
        <div class="promotion-content">
          <h3>GRAPES</h3>
          <a href="">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/promo4.jpg" alt="" />
        <div class="promotion-content">
          <h3>POTATOE</h3>
          <a href="">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/promo5.jpg" alt="" />
        <div class="promotion-content">
          <h3>ORANGE</h3>
          <a href="">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/promo6.jpg" alt="" />
        <div class="promotion-content">
          <h3>PINEAPPLE</h3>
          <a href="">SHOP NOW</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured -->
  <section class="section featured">
    <div class="title">
      <h2>Featured Products</h2>
      <span>Select from the premium product brands and save plenty money</span>
    </div>

    <div class="row container">
      <div class="swiper-container slider-2">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
                <img src="./images/product-1.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="productDetails.php">Bambi Print Mini Backpack</a>
                <div class="price">
                  <span>$150</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
                <img src="./images/product-8.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="">Bambi Print Mini Backpack</a>
                <div class="price">
                  <span>$150</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
                <img src="./images/product-10.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="">Bambi Print Mini Backpack</a>
                <div class="price">
                  <span>$150</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
                <img src="./images/product-7.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="">Bambi Print Mini Backpack</a>
                <div class="price">
                  <span>$150</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
                <img src="./images/product-6.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="">Bambi Print Mini Backpack</a>
                <div class="price">
                  <span>$150</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
                <img src="./images/product-5.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="">Bambi Print Mini Backpack</a>
                <div class="price">
                  <span>$150</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
                <img src="./images/product-1.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="">Bambi Print Mini Backpack</a>
                <div class="price">
                  <span>$150</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
                <img src="./images/product-10.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="">Bambi Print Mini Backpack</a>
                <div class="price">
                  <span>$150</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Carousel Navigation -->
    <div class="arrows d-flex">
       <div class="custom-next d-flex">
          <i class="bx bx-chevrons-right swiper-icon"></i>
        </div>
        <div class="custom-prev d-flex">
          <i class="bx bx-chevrons-left swiper-icon"></i>
        </div>
    </div>
  </section>

  <!-- Products -->
  <section class="section products">
    <div class="title">
      <h2>New Products</h2>
      <span>Select from the premium product brands and save plenty money</span>
    </div>

    <div class="product-layout">
      <div class="product">
        <div class="img-container">
          <img src="./images/product-9.jpg" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="far fa-heart"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="">Bambi Print Mini Backpack</a>
          <div class="price">
            <span>$150</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/product-1.jpg" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="far fa-heart"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="">Bambi Print Mini Backpack</a>
          <div class="price">
            <span>$150</span>
            <span class="cancel">$160</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/product-2.jpg" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="far fa-heart"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="">Bambi Print Mini Backpack</a>
          <div class="price">
            <span>$150</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/product-4.jpg" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="far fa-heart"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="">Bambi Print Mini Backpack</a>
          <div class="price">
            <span>$150</span>
            <span class="cancel">$160</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/product-5.jpg" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="far fa-heart"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="">Bambi Print Mini Backpack</a>
          <div class="price">
            <span>$150</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/product-6.jpg" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="far fa-heart"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="">Bambi Print Mini Backpack</a>

          <div class="price">
            <span>$150</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/product-7.jpg" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="far fa-heart"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="">Bambi Print Mini Backpack</a>

          <div class="price">
            <span>$150</span>
            <span class="cancel">$160</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/product-8.jpg" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="far fa-heart"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="">Bambi Print Mini Backpack</a>
          <div class="price">
            <span>$150</span>
            <span class="cancel">$160</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ADVERT -->
  <section class="section advert">
    <div class="advert-layout container">
      <div class="item ">
        <img src="./images/kit.png" alt="">
        <div class="content">
          <span>Exclusive Sales</span>
          <h3>Spring Collections</h3>
          <a href="">View Collection</a>
        </div>
      </div>
      <div class="item">
        <img src="./images/kit.png" alt="">
        <div class="content">
          <span>New Trending</span>
          <h3>Designer Bags</h3>
          <a href="">Shop Now </a>
        </div>
      </div>
    </div>
  </section>

  <!-- BRANDS -->
  <section class="section brands">
    <div class="title">
      <h2>Shop by Brand</h2>
      <span>Select from the premium product brands and save plenty money</span>
    </div>

    <div class="brand-layout container">
      <div class="swiper-container slider-3">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./images/brand1.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="./images/brand2.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="./images/brand3.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="./images/brand4.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="./images/brand5.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="./images/brand6.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="./images/brand7.png" alt="">
          </div>
          
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php
  
    include "./components/footer.php";
  
  ?>
  <!-- End Footer -->

  <!-- ======== SwiperJS ======= -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"></script>
  <!-- Custom Scripts -->
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>

