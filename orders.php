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
  <link rel="shortcut icon" href="./images/favicon.png" type="image/png" />
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
        <th>Amount</th>
        <th>Status</th>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/product-1.jpg" alt="" />
            <div>
              <p>Bambi Print Mini Backpack</p>
              <span>Price: ₹ 500.00</span>
              <br />
            </div>
          </div>
        </td>
        <td>
          <h4>4</h4>
        </td>
        <td>₹ 50.00</td>
        <td>Order placed</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/product-2.jpg" alt="" />
            <div>
              <p>Bambi Print Mini Backpack</p>
              <span>Price: ₹ 900.00</span>
              <br />
            </div>
          </div>
        </td>
        <td>
          <h4>4</h4>
        </td>
        <td>₹ 90.00</td>
        <td>Out for delivery</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/product-3.jpg" alt="" />
            <div>
              <p>Bambi Print Mini Backpack</p>
              <span>Price: ₹ 700.00</span>
              <br />
            </div>
          </div>
        </td>
        <td>
          <h4>4</h4>
        </td>
        <td>₹ 60.00</td>
        <td>Completed</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/product-4.jpg" alt="" />
            <div>
              <p>Bambi Print Mini Backpack</p>
              <span>Price: ₹ 600.00</span>
              <br />
            </div>
          </div>
        </td>
        <td>
          <h4>4</h4>
        </td>
        <td>₹ 60.00</td>
        <td>Completed</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/product-5.jpg" alt="" />
            <div>
              <p>Bambi Print Mini Backpack</p>
              <span>Price: ₹ 600.00</span>
              <br />
            </div>
          </div>
        </td>
        <td>
          <h4>4</h4>
        </td>
        <td>₹ 60.00</td>
        <td>Completed</td>
      </tr>
    </table>
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