<div class="footer">
    <div class="container">
      <div class="row">
       

        <div class="footer-col-2">
          <img src="images/logo21.png" alt="" />
          <p>
            Our Purpose Is To Sustainably Make the Pleasure and Benefits of
            Sports Accessible to the Many.
          </p>
        </div>

        <div class="footer-col-3">
          <h3>Useful Links</h3>
          <ul>
         <li> <a href="home.php">Home</a></li>
         <li> <a href="about.php">About</a></li>
         <li><a href="shop.php">Shop</a></li>
         <li> <a href="contact.php">Contact</a></li>
           
          </ul>
        </div>

        <div class="footer-col-4">
          <h3>Follow us</h3>
          <ul>
            <li><a href=''>Facebook</a></li>
            <li><a href=''>Twitter</a></li>
            <li><a href=''>Instagram</a></li>
            <li><a href=''>YouTube</a></li>
          </ul>
        </div>
      </div>
      <hr />
      <p class="copyright">Copyright &copy; 2024 - Slam Dunk</p>
    </div>
  </div>

  <!-- css  -->
  <style>
    /* footer */
  
  .footer {
    background: #000;
    color: #8a8a8a;
    font-size: 14px;
    padding: 60px 0 20px;
  }
  
  .footer p {
    color: #8a8a8a;
  }
  
  .footer h3 {
    color: #ffffff;
    margin-bottom: 20px;
  }
  
  .footer-col-1,
  .footer-col-2,
  .footer-col-3,
  .footer-col-4 {
    min-width: 250px;
    margin-bottom: 20px;
  }
  
  .footer-col-1 {
    flex-basis: 30%;
  }
  
  .footer-col-2 {
    flex: 1;
    text-align: center;
  }
  
  .footer-col-2 img {
    width: 180px;
    margin-bottom: 20px;
  }
  
  .footer-col-3,
  .footer-col-4 {
    flex-basis: 12%;
    text-align: center;
  }
  
  ul {
    list-style-type: none;
  }
  
  .app-logo {
    margin-top: 20px;
  }
  .app-logo img {
    width: 140px;
  }
  
  .footer hr {
    border: none;
    background: #b5b5b5;
    height: 1px;
    margin: 20px 0;
  }
  
  .copyright {
    text-align: center;
  }
  
  .menu-icon {
    width: 28px;
    margin-left: 20px;
    display: none;
  }
  
  /* media query for menu */
  
  @media only screen and (max-width: 800px) {
    nav ul {
      position: absolute;
      top: 70px;
      left: 0;
      background: #333;
      width: 100%;
      overflow: hidden;
      transition: max-height 0.5s;
    }
    nav ul li {
      display: block;
      margin-right: 50px;
      margin-top: 10px;
      margin-bottom: 10px;
    }
  
    nav ul li a {
      color: #fff;
    }
    .menu-icon {
      display: block;
      cursor: pointer;
    }
  }
  
  /* all products page */
  
  .row-2 {
    justify-content: space-between;
    margin: 100px auto 50px;
  }
  
  select {
    border: 1px solid #ff523b;
    padding: 5px;
  }
  
  select:focus {
    outline: none;
  }
  
  .page-btn {
    margin: 0 auto 80px;
  }
  
  .page-btn span {
    display: inline-block;
    border: 1px solid #ff523b;
    margin-left: 10px;
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
  }
  
  .page-btn span:hover {
    background: #ff523b;
    color: #ffffff;
  }
  
  /* single product details */
  
  .single-product {
    margin-top: 80px;
  }
  
  .single-product .col-2 img {
    padding: 0;
  }
  
  .single-product .col-2 {
    padding: 20px;
  }
  
  .single-product h4 {
    margin: 20px 0;
    font-size: 22px;
    font-weight: bold;
  }
  
  .single-product select {
    display: block;
    padding: 10px;
    margin-top: 20px;
  }
  
  .single-product input {
    width: 50px;
    height: 40px;
    padding-left: 10px;
    font-size: 20px;
    margin-right: 10px;
    border: 1px solid #ff523b;
  }
  
  input:focus {
    outline: none;
  }
  
  .single-product .fas {
    color: #ff523b;
    margin-left: 10px;
  }
  
  .small-img-row {
    display: flex;
    justify-content: space-between;
  }
  
  .small-img-col {
    flex-basis: 24%;
    cursor: pointer;
  }
  
  /* cart items */
  
  .cart-page {
    margin: 90px auto;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
  }
  
  .cart-info {
    display: flex;
    flex-wrap: wrap;
  }
  
  th {
    text-align: left;
    padding: 5px;
    color: #ffffff;
    background: #ff523b;
    font-weight: normal;
  }
  td {
    padding: 10px 5px;
  }
  
  td input {
    width: 40px;
    height: 30px;
    padding: 5px;
  }
  
  td a {
    color: #ff523b;
    font-size: 12px;
  }
  
  td img {
    width: 80px;
    height: 80px;
    margin-right: 10px;
  }
  
  .total-price {
    display: flex;
    justify-content: flex-end;
  }
  
  .total-price table {
    border-top: 3px solid #ff523b;
    width: 100%;
    max-width: 400px;
  }
  
  td:last-child {
    text-align: right;
  }
  
  th:last-child {
    text-align: right;
  }
  /* account page */
  .account-page {
    padding: 50px 0;
    background: radial-gradient(#fff, #ffd6d6);
  }
  
  .form-container {
    background: #ffffff;
    width: 300px;
    height: 400px;
    position: relative;
    text-align: center;
    padding: 20px 0;
    margin: auto;
    box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }
  
  .form-container span {
    font-weight: bold;
    padding: 0 10px;
    color: #555555;
    cursor: pointer;
    width: 100px;
    display: inline-block;
  }
  
  .form-btn {
    display: inline-block;
  }
  
  .form-container form {
    max-width: 300px;
    padding: 0 20px;
    position: absolute;
    top: 130px;
    transition: transform 1s;
  }
  
  form input {
    width: 100%;
    height: 30px;
    margin: 10px 0;
    padding: 0 10px;
    border: 1px solid #ccc;
  }
  
  form .btn {
    width: 100%;
    border: none;
    cursor: pointer;
    margin: 10px 0;
  }
  
  form .btn:focus {
    outline: none;
  }
  
  #LoginForm {
    left: -300px;
  }
  
  #RegForm {
    left: 0;
  }
  
  form a {
    font-size: 12px;
  }
  
  #Indicator {
    width: 100px;
    border: none;
    background: #ff523b;
    height: 3px;
    margin-top: 8px;
    transform: translateX(100px);
    transition: transform 1s;
  }
  
  /* media query for less than 600 screen size */
  
  @media only screen and (max-width: 600px) {
    .row {
      text-align: center;
    }
    .col-2,
    .col-3,
    .col-4 {
      flex-basis: 100%;
    }
  
    .single-product .row {
      text-align: left;
    }
  
    .single-product .col-2 {
      padding: 20px 0;
    }
    .single-product h1 {
      font-size: 26px;
      line-height: 32px;
    }
    .cart-info p {
      display: none;
    }
  }
    </style>