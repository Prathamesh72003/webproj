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
      <?php
      $sql = "SELECT *, cart.id AS cart_id, cart.quantity AS cart_quantity, products.quantity AS product_quantity FROM `cart` INNER JOIN products ON product_id=products.id WHERE cust_id=1";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $product_id = $row['product_id'];
          $cart_id = $row['cart_id'];
          $product_name = $row['name'];
          $cust_id = $row['cust_id'];
          $product_id = $row['product_id'];
          $price = $row['price'];
          $discount_price = $row['discount_price'];
          $total = $row['total'];
          $cart_quantity = $row['cart_quantity'];
          $product_quantity = $row['product_quantity'];
          $image_url = $row['image_url'];
          $cart_item_total = $discount_price * $cart_quantity;

          echo "
            <tr>
              <td>
                <div class='cart-info'>
                  <img src='$image_url' alt='' />
                  <div>
                    <p>$product_name</p>
                    <span>Price: $discount_price</span>
                    <br />
                    <a href='#'>remove</a>
                  </div>
                </div>
              </td>
              <td>
                <button class='' onsubmit='decrease($cart_id, $ccust_id, $product_id, $cart_quantity, $cart_quantity-1 )' >-</button>
                <input id='$cart_id' name='$cust_id-$product_id-$cart_quantity-$discount_price' class='btnCounter' type='number' value='$cart_quantity' min='1' max='$product_quantity' />
                <button class='' >+</button>
              </td>
              <td>₹$cart_item_total</td>
            </tr>
          ";
        }
      }
      ?>
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
  <script>
    document.querySelectorAll('.btnCounter').forEach(item => {
      item.addEventListener('change', event => {
        alert(event.target.id + " " + event.target.value + " " + event.target.name);

        var arr = event.target.name.split('-');

        var data = new FormData();
        data.append("updateCart", "updateCart");
        data.append("cust_id", arr[0]);
        data.append("p_id", arr[1]);
        data.append("quantity", arr[2]);
        data.append("total", arr[2] * arr[3]);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "functions.php", true);
        xhr.onload = function() {
          // do something to response
          console.log(this.responseText);
          if (this.responseText == "true") {
            // setTimeout(() => {
            //   window.location.assign("/webproj/auth/Login");
            // }, 3000);

          } else {
            sendToast("Cannot be added");
            event.target.value = arr[2];
          }
        };
        xhr.send(data);
      })
    })
  </script>
</body>

</html>