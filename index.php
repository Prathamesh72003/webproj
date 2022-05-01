<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
      <!-- Favicon -->
      <link rel="shortcut icon" href="./images/favicon.png" type="image/png" />
      <title>Niranjan</title>
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
            <img src="./images/hero_1.jpg" alt="" />
            <div class="content">
              <h1>Super Make-Up fullbox
                <br/>
                starting from 
                <span>₹.1500</span>
              </h1>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti ad natus facilis magni corporis alias.</p>

              <a href="">Shop Now</a>
            </div>
          </div>

          <div class="swiper-slide">
            <img src="./images/hero_2.jpg" alt="hero image" />
            <div class="content">
              <h1>You first Order
                <br/>
                <span>30% off</span>
                at Niranjan web store! 
              </h1>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti ad natus facilis magni corporis alias.</p>
              <a href="#">Shop Now</a>
            </div>
          </div>
          
          <div class="swiper-slide">
            <img src="./images/hero_3.jpg" alt="hero image" />
            <div class="content">
              <h1>All products
                <br/>
                <span>100% Natural</span>
                and turstable!
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
      <h2>Collections</h2>
      <span>Select from the premium product and save plenty money</span>
    </div>

    <div class="promotion-layout container">
      <div class="promotion-item">
        <img src="./images/Categories/skin.jpg" alt="" />
        <div class="promotion-content">
          <h3>Skin Care</h3>
          <a href="./CollectionOnClick.php">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/Categories/sun.jpg" alt="" />
        <div class="promotion-content">
          <h3>Sun Care</h3>
          <a href="./CollectionOnClick.php">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/Categories/hair.jpg" alt="" />
        <div class="promotion-content">
          <h3>Hair Care</h3>
          <a href="./CollectionOnClick.php">SHOP NOW</a>
        </div>
      </div>
      <div class="promotion-item">
        <img src="./images/Categories/bodycare.jpeg" alt="" />
        <div class="promotion-content">
          <h3>Body Care</h3>
          <a href="./CollectionOnClick.php">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/Categories/jewel.jpg" alt="" />
        <div class="promotion-content">
          <h3>Decorative</h3>
          <a href="./CollectionOnClick.php">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/Categories/perfume.jpg" alt="" />
        <div class="promotion-content">
          <h3>Perfumes</h3>
          <a href="./CollectionOnClick.php">SHOP NOW</a>
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
                <img src="./images/Featured/facewash.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="productDetails.php">Facewash</a>
                <div class="price">
                  <span>₹.150</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
                <img src="./images/Featured/lotion.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="">Lotion</a>
                <div class="price">
                  <span>₹.350</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
                <img src="./images/Featured/serum.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="">Face Serum</a>
                <div class="price">
                  <span>₹. 500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
                <img src="./images/Featured/lipstick.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="">Nykaa Lipstick</a>
                <div class="price">
                  <span>₹.130</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
                <img src="./images/Featured/facewash.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="productDetails.php">Facewash</a>
                <div class="price">
                  <span>₹.150</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
                <img src="./images/Featured/lotion.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="">Lotion</a>
                <div class="price">
                  <span>₹.350</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
                <img src="./images/Featured/serum.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="">Face Serum</a>
                <div class="price">
                  <span>₹. 500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
                <img src="./images/Featured/lipstick.jpg" alt="" />
                <div class="addCart">
                  <i class="fas fa-shopping-cart"></i>
                </div>

                <ul class="side-icons">
                  <span><i class="far fa-heart"></i></span>
                </ul>
              </div>
              <div class="bottom">
                <a href="">Nykaa Lipstick</a>
                <div class="price">
                  <span>₹.130</span>
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
          <img src="./images/New/new1.jpg" alt="" />
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
            <span>₹150</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/New/new7.jpg" alt="" />
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
            <span>₹150</span>
            <span class="cancel">₹160</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/New/new8.jpg" alt="" />
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
            <span>₹150</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/New/new4.jpg" alt="" />
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
            <span>₹150</span>
            <span class="cancel">₹160</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/New/new5.jpg" alt="" />
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
            <span>₹150</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/New/new6.jpg" alt="" />
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
            <span>₹150</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/New/new2.jpg" alt="" />
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
            <span>₹150</span>
            <span class="cancel">₹160</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/New/new3.jpg" alt="" />
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
            <span>₹150</span>
            <span class="cancel">₹160</span>
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
        <img src="./images/New/new6.jpg" alt="">
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

