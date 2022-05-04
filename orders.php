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
        <th>Amount</th>
        <th>Status</th>
      </tr>

      <?php
      $query = mysqli_query($conn, "SELECT *, orders.quantity AS order_quantity FROM `orders` INNER JOIN products ON orders.product_id=products.id where cust_id=1");
      while ($run = mysqli_fetch_array($query)) {
        $image = $run['image_url'];
        $name = $run['name'];
        $price = $run['amount'];
        $quantity = $run['order_quantity'];
        $status = $run['order_status'];
        if ($status == 1) {
          $st = "Completed!";
        } else {
          $st = "Processing...";
        }

      ?>
        <tr>
          <td>
            <div class="cart-info">
              <img src="<?= $image ?>" alt="" />
              <div style="align-items: center;
                          justify-content: center;
                          display: flex;
                          flex-direction: column;">
                <p><?= $name ?></p>
                <span>Price: ₹ <?= $price ?></span>
              </div>
            </div>
          </td>
          <td>
            <h4><?= $quantity ?></h4>
          </td>
          <td>₹ <?= $price ?></td>
          <td><?= $st ?></td>
        </tr>

      <?php
      }
      ?>
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