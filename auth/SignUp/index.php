<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/webproj/images/logo.png" type="image/png" />
    <title>Niranjan</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <!-- ======== Swiper Js ======= -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css" />

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'>

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!--  style -->
    <link rel="stylesheet" href="../../styles.css">

    <!-- snakcbar -->
    <link rel="stylesheet" href="../../css/snackbar.css">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--Nav bar -->
    <?php
    include "../../components/nav.php"
    ?>
    <!-- Nav bar end -->

    <div class="authwrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
        <div class="inner">
            <form action="" onsubmit="return false;">
                <h3>Signup Form</h3>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">First Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-wrapper">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-wrapper">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-wrapper">
                    <label for="">Password</label>
                    <input type="password" class="form-control">
                </div>
                <div class="form-wrapper">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> I caccept the Terms of Use & Privacy Policy.
                        <span class="checkmark"></span>
                    </label>
                </div>
                <button class="signup-btn">Signup</button>
            </form>
        </div>
    </div>
    <script>
        let signup = document.querySelector(".signup-btn");
        const div = document.createElement("div");
        signup.addEventListener("click", () => {
            console.log("fired");
            div.classList.add("snackbar");

            div.id = "emailToast";
            div.innerHTML = "Verification link has been send to your Email address";
            document.body.appendChild(div);

            var x = document.getElementById("emailToast");
            x.className = "show";
            setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 3000);
        })
    </script>
</body>

</html>