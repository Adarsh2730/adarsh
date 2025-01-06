<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Header Section -->
<div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a href="home.php"><img src="images/logo24.png" alt="home" width="136px" /></a>
        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="home.php">HOME</a></li>
            <li><a href="info/index.php">INFORMATION</a></li>
            <li><a href="videos/index.php">VIDEOS</a></li>
            <li><a href="shop.php">SHOP</a></li> 
            <li><a href="contact.php">CONTACT US</a></li>
            <li><a href="about/index.php">ABOUT US</a></li>
          </ul>
        </nav>
        <a href="cart.php"><img src="https://i.ibb.co/PNjjx3y/cart.png" alt="" width="30px" height="30px" /></a>
        <img src="https://i.ibb.co/6XbqwjD/menu.png" alt="" class="menu-icon" onclick="menutoggle()" />
      </div>
      <div class="row">
        <div class="col-2">
          <h1>
            SLAM DUNK!! <br />
           
          </h1>
          <p>
          Welcome from Slamdunk, the one-stop shop for hoops fans! Discover our extensive library of materials, which includes insightful tutorials, sophisticated tactics, and basketball fundamentals. Explore our collection of educational videos, carefully selected to assist gamers of all skill levels in developing their abilities. Also, browse our collection of premium basketball accessories, such as shoes, clothing, balls, and training tools. Regardless of your level of experience, Slamdunk provides all the tools you need to improve your skills and maximize your basketball trip. <br />hard work gains success. Greatness will come.
          </p>
          <a href="info/index.php" target="_blank" rel="noopener noreferrer" class="btn">Explore Now →</a>
        </div>
        <div class="col-2">
          <img src="images/nba1.png" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- css for home  -->
<style>
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    font-family: "Poppins", sans-serif;
  }
  
  .navbar {
    display: flex;
    align-items: center;
    padding: 20px;
  }
  
  nav {
    flex: 1;
    text-align: right;
  }
  
  nav ul {
    display: inline-block;
    list-style-type: none;
  }
  
  nav ul li {
    display: inline-block;
    margin-right: 20px;
  }
  
  a {
    text-decoration: none;
    color: #555;
  }
  
  p {
    color: black;
  }
  
  .container {
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
  }
  
  .row {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
  }
  
  .col-2 {
    flex-basis: 50%;
    min-width: 300px;
  }
  
  .col-2 img {
    max-width: 100%;
    padding: 50px 0;
  }
  
  .col-2 h1 {
    font-size: 50px;
    line-height: 60px;
    margin: 25px 0;
  }
  
  .btn {
    display: inline-block;
    background: #ff523b;
    color: #ffffff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;
    transition: background 0.5s;
  }
  
  .btn:hover {
    background: #563434;
  }
  
  .header {
    background: radial-gradient(#fff, #ffd6d6);
  }
  
  .header .row {
    margin-top: 70px;
  }
  </style>

</head>
<body>
   <!-- footer -->
<?php include 'footer.php'; ?>

 <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script> 


</body>
</html>
