<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.png" type="image/png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./styles.css" />
  <title>Codevo - Ecommerce Website</title>
</head>

<body>

    <!-- Navigation -->
    <?php
    include "./components/nav.php";
  ?>

  <!-- PRODUCTS -->

  <section class="section products">
    <div class="products-layout container">
      <!-- <div class="col-1-of-4"> -->
        <!-- <div>
          <div class="block-title">
            <h3>Category</h3>
          </div>

          <ul class="block-content">
            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Shoes</span>
                <small>(10)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Bags</span>
                <small>(7)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span> Accessories</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Clothings</span>
                <small>(3)</small>
              </label>
            </li>
          </ul>
        </div>

        <div>
          <div class="block-title">
            <h3>Brands</h3>
          </div>

          <ul class="block-content">
            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Gucci</span>
                <small>(10)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Burberry</span>
                <small>(7)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span> Accessories</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Valentino</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Dolce & Gabbana</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Hogan</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Moreschi</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Givenchy</span>
                <small>(3)</small>
              </label>
            </li>
          </ul>
        </div> -->
      <!-- </div> -->
      <div class="col-3-of-4">
        <div class="sortclass">
          <form action="" class="SortSubClass">
            <div class="item">
              <label for="sort-by">Sort By</label>
              <select name="sort-by" id="sort-by">
                <option value="title" selected="selected">Name</option>
                <option value="number">Price</option>
                <option value="search_api_relevance">Relevance</option>
                <option value="created">Newness</option>
              </select>
            </div>
            <a href="">Apply</a>
          </form>
        </div>

        <div class="product-layout">

          <div class="product">
            <div class="img-container">
              <img src="./images/product-1.jpg" alt="" />
              <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
              </div>

              <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
              </ul>
            </div>
            <div class="bottom">
              <a href="productDetails.php">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
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
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
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
              <img src="./images/product-3.jpg" alt="" />
              <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
              </div>

              <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
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
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
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
              <img src="./images/product-5.jpg" alt="" />
              <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
              </div>

              <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
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
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
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
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
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
              <img src="./images/product-8.jpg" alt="" />
              <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
              </div>

              <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
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
              <img src="./images/product-9.jpg" alt="" />
              <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
              </div>

              <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
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
              <img src="./images/product-10.jpg" alt="" />
              <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
              </div>

              <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
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
              <img src="./images/product-11.jpg" alt="" />
              <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
              </div>

              <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
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
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
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
              <img src="./images/product-2.jpg" alt="" />
              <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
              </div>

              <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
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
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
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
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
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

        <!-- PAGINATION -->
        <ul class="pagination">
          <span>1</span>
          <span>2</span>
          <span class="icon">››</span>
          <span class="last">Last »</span>
        </ul>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php
    include "./components/footer.php";
  ?>
  <!-- End Footer -->

  <!-- Custom Scripts -->
  <script src="./js/index.js"></script>
</body>

</html>