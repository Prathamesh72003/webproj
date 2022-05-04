<?php
include './db.php';

$results_per_page = 4;
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

    <!-- PRODUCTS -->

    <section class="section products">
        <div class="products-layout container">

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
                    <?php
                    $search_term = $_GET['search'];
                    if (!isset($_GET['page'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }
                    $page_first_result = ($page - 1) * $results_per_page;
                    $sql = "SELECT * FROM `products` WHERE name LIKE '%$search_term%' LIMIT " . $page_first_result . "," . $results_per_page;
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $product_id = $row['id'];
                            $product_name = $row['name'];
                            $price = $row['price'];
                            $discount_price = $row['discount_price'];
                            $image_url = $row['image_url'];

                            echo "
                                <div class='product'>
                                    <a href='productDetails.php?id=$product_id'>
                                        <div class='img-container'>
                                            <img src='$image_url' alt='' />
                                            <div class='addCart'>
                                                <i class='fas fa-shopping-cart'></i>
                                            </div>

                                            <ul class='side-icons'>
                                                <span><i class='fas fa-share'></i></span>
                                            </ul>
                                        </div>
                                        <div class='bottom'>
                                            <a>$product_name</a>
                                            <div class='price'>
                                                <span>₹$discount_price</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            ";
                        }
                    }

                    ?>

                </div>

                <!-- PAGINATION -->
                <ul class="pagination">
                    <?php

                    $search_term = $_GET['search'];
                    $sql = "SELECT * FROM `products` WHERE name LIKE '%$search_term%'";
                    $result = $conn->query($sql);
                    $num = mysqli_num_rows($result);
                    $number_of_page = ceil($num / $results_per_page);
                    for ($i = 1; $i <= $number_of_page; $i++) {
                        echo "
                            <span><a href='./Search.php?search=$search_term&page=$i'>$i</a></span>
                        ";
                    }
                    ?>
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