<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

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

  <!-- Cart Items -->
  <div class="container cart">
    <table>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/product-1.jpg" alt="" />
            <div>
              <p>Bambi Print Mini Backpack</p>
              <span>Price: ₹500.00</span>
              <br />
              <a href="#">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1" /></td>
        <td>₹50.00</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/product-2.jpg" alt="" />
            <div>
              <p>Bambi Print Mini Backpack</p>
              <span>Price: ₹900.00</span>
              <br />
              <a href="#">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1" /></td>
        <td>₹90.00</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/product-3.jpg" alt="" />
            <div>
              <p>Bambi Print Mini Backpack</p>
              <span>Price: ₹700.00</span>
              <br />
              <a href="#">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1" /></td>
        <td>₹60.00</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/product-4.jpg" alt="" />
            <div>
              <p>Bambi Print Mini Backpack</p>
              <span>Price: ₹600.00</span>
              <br />
              <a href="#">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1" /></td>
        <td>₹60.00</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/product-5.jpg" alt="" />
            <div>
              <p>Bambi Print Mini Backpack</p>
              <span>Price: ₹600.00</span>
              <br />
              <a href="#">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1" /></td>
        <td>₹60.00</td>
      </tr>
    </table>

    <div class="total-price">
      <table>
        <tr>
          <td>Subtotal</td>
          <td>₹200</td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>₹50</td>
        </tr>
        <tr>
          <td>Total</td>
          <td>₹250</td>
        </tr>
      </table>
      <a href="#" class="checkout btn">Proceed To Checkout</a>
    </div>
  </div>

  <!-- Footer -->
  <?php

  include "./components/footer.php";

  ?>
  <!-- End Footer -->

  <!-- Custom Scripts -->
  <script src="./js/index.js"></script>
</body>

</html>