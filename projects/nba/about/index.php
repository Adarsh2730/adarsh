<!DOCTYPE html>
<html lang="en">
<head>
    <title>ABOUT US</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- <link rel="stylesheet" href="about/style.css"> -->
</head>
<body>
    
    <div class="main">
        <div class="navbar">
            <img src="pic/logo24.png" class="logo">

            <ul>
                <li><a href="../home.php">HOME</a></li>
                <li><a href="../info/index.php">INFORMATION</a></li>
                <li><a href="../videos/index.php">VIDEOS</a></li>
                <li><a href="../shop.php">SHOP</a></li>
                <li><a href="../contact.php">CONTACT US</a></li>
            </ul>
        </div>

        <div class="info">
            <h3>ABOUT <span>US</span>.</h3>
            <h1><span>SLAM</span> <span></span>DUNK</h1>
            <h3>"Welcome to our NBA website, where passion for the game meets curated insights. <br>Explore the world of basketball with us <br> and uncover the stories behind the game's greatest moments and players." </h3>
                <a href="../contact.php">CONTACT US</a>
        </div>

        <div class="image">
            <img src="pic/bg.png" class="girl">
        </div>

        <div class="icons">
            <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            
           
        </div>
    </div>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
<style>
    *{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: url(pic/bg.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
    position: relative;
    font-family: sans-serif;
}

.navbar{
    width: 86%;
    display: flex;
    margin: auto;
    padding: 15px 0;
    align-items: center;
    justify-content: space-between;
}

.navbar .logo{
    width: 160px;
    cursor: pointer;
    margin-top: -2%;
    margin-left: -2%;
}

ul{
    margin-top: -4%;
}

ul li{
    list-style: none;
    display: inline-block;
    padding: 10px 16px;
}

ul li a{
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    color: darkslategray;
    margin-top: -3%;
    transition: .4s ease;

}

ul li a:hover{
    color: rgb(230,104,59);
}

.info{
    margin-left: 7%;
    margin-top: 6%;
}

.info h1{
    font-size: 65px;
    color: rgb(36,32,30);
}

.info h3{
    font-size: 18px;
    letter-spacing: 1px;
    line-height: 24px;
}

.info span{
    color: rgb(230,104,59);
}

.info a{
    text-decoration:  none;
    color: #fff;
    background: rgb(36,32,30);
    margin: 26px 0;
    padding: 10px 18px;
    border-radius: 10px;
    display: inline-block;
    transition: .4s ease;
}

.info a:hover{
    background: rgb(59,174,209);
}

.image{
    width: 30%;
    height: 60%;
    position: absolute;
    right: 100px;
    bottom: 0;
}

.image img{
    position: absolute;
    height: 140%;
    left: 40%;
    transform: translate(-55%);
    bottom: 0;
    transition: left 2s ease;
}

.image:hover .girl{
    left: 55%;
}

.icons a{
    text-decoration: none;
    color: #000;
}

.icons ion-icon{
    margin-left: 7%;
    color: #000;
    margin-right: -60px;
    font-size: 40px;
    transition: .4s ease;
    
}

.icons ion-icon:hover{
    color: rgb(59,174,209);
}

    </style>