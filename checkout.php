<?php 
 session_start();

 if (!empty($_SESSION['cart']) &&   isset($_POST['checkout'])  ) {
  // let user in
 }
 // send user to home page
 else {
header('location: index.php');
  
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container">
      <a href="index.html"><img src="assets/imgs/logo.jpeg" class="logo" /></a>
      <h2 class="brand">Orange</h2>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a href="cart.php"><i class="fal fa-shopping-bag"></i></a>
            <a href="account.html"><i class="fal fa-user-alt"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--Checkout-->

  <section class="my-5 py-5">
    <div class="container text-center mt-3 pt-5">
      <h2 class="form-weight-bold">Checkout</h2>
      <hr class="mx-auto" />
    </div>

    <div class="mx-auto container">
      <form id="checkout-form" method="POST" action="place_order.php">
        <div class="form-group checkout-small-element">
          <label>Name</label>
          <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Name" required />
        </div>
        <div class="form-group checkout-small-element">
          <label>Email</label>
          <input type="text" class="form-control" id="checkout-email" name="email" placeholder="Email" required />
        </div>
        <div class="form-group checkout-small-element">
          <label>Phone</label>
          <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Phone" required />
        </div>

        <div class="form-group checkout-small-element">
          <label>City</label>
          <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City" required />
        </div>

        <div class="form-group checkout-large-element">
          <label>Address</label>
          <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required />

          <div class="form-group checkout-btn-container">
            <p>Total amount : $ <?php echo $_SESSION['total'] ?></p>
            <input type="submit" class="btn" id="checkout-btn" name="place_order" value="Place Order" />
          </div>
      </form>
    </div>
  </section>

  <!--Footer-->
  <footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <img src="assets/imgs/logo.jpeg" class="logo" />
        <p class="pt-3">
          We provide the best products for the most affordable prices
        </p>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Featured</h5>
        <ul class="text-uppercase">
          <li><a href="#">Men</a></li>
          <li><a href="#">Women</a></li>
          <li><a href="#">boys</a></li>
          <li><a href="#">girls</a></li>
          <li><a href="#">new arrivals</a></li>
          <li><a href="#">Clothes</a></li>
        </ul>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Contact Us</h5>
        <div>
          <h6 class="text-uppercase">Address</h6>
          <p>1234 Street Name, City</p>
        </div>
        <div>
          <h6 class="text-uppercase">Phone Number</h6>
          <p>123 456 7890</p>
        </div>
        <div>
          <h6 class="text-uppercase">Email</h6>
          <p>info@email.com</p>
        </div>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Instagram</h5>
        <div class="row">
          <img src="assets/imgs/featured1.jpeg" alt="" class="img-fluid w-25 h-100 m-2" />
          <img src="assets/imgs/featured2.jpeg" alt="" class="img-fluid w-25 h-100 m-2" />
          <img src="assets/imgs/featured3.jpeg" alt="" class="img-fluid w-25 h-100 m-2" />
          <img src="assets/imgs/featured4.jpeg" alt="" class="img-fluid w-25 h-100 m-2" />
          <img src="assets/imgs/clothes1.jpeg" alt="" class="img-fluid w-25 h-100 m-2" />
        </div>
      </div>
    </div>
    <div class="copyright mt-5">
      <div class="row container mx-auto">
        <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
          <img src="assets/imgs/payment.jpeg" />
        </div>
        <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
          <p>eCommerce @2025 All rights reserved</p>
        </div>
        <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>