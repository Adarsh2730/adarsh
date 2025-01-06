<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Testimonial Slider</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../slider/css/swiper-bundle.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="../slider/css/style.css" />

    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class=dhoni>
    <h1>MORE PLAYERS</h1>
</div>
<style>
  .dhoni {
    text-align: center; /* Center-align the content */
    padding-top: 20px; /* Add padding to the top */
  }
  .dhoni h1 {
    font-size: 36px; /* Increase the font size */
  }
</style>
    <section class="container">
    <video autoplay muted loop id="video-bg">
    <source src="../info/image/bg.mp4" type="video/mp4">   
    Your browser does not support the video tag.
  </video>
      <div class="testimonial mySwiper">
        <div class="testi-content swiper-wrapper">
          <div class="slide swiper-slide">
            <img src="../slider/images/img2.jpg" alt="" class="image" />
            <p>
            Kareem Abdul-Jabbar is a retired American basketball player, widely considered one of the greatest in NBA history. Standing at 7 feet 2 inches, he dominated the game with his patented skyhook shot, winning six NBA championships and six MVP awards during his 20-season career. Abdul-Jabbar's impact extends beyond the court, as he's also a prolific author, activist, and advocate for social justice.
            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name"></span>
              <span class="job">Kareem Abdul-Jabbar</span>
            </div>
          </div>

          <!-- new player -->
          <div class="slide swiper-slide">
            <img src="../slider/images/img1.jpg" alt="" class="image" />
            <p>
            Charles Barkley is a retired American professional basketball player known for his powerful playing style and outspoken personality. Standing at 6 feet 6 inches tall, Barkley earned the nickname "The Round Mound of Rebound" for his rebounding prowess despite his relatively short stature for a power forward. He played for the Philadelphia 76ers, Phoenix Suns, and Houston Rockets during his NBA career, earning numerous accolades including the NBA MVP award in 1993. Post-retirement, Barkley became a popular NBA analyst on television, known for his candid and often controversial commentary.
            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name"></span>
              <span class="job">Charles Barkley</span>
            </div>
          </div>

          <!-- new -->
          <div class="slide swiper-slide">
            <img src="../slider/images/img3.jpg" alt="" class="image" />
            <p>
            Wilt Chamberlain was an American basketball player who is considered one of the greatest of all time. Standing at 7 feet 1 inch tall, Chamberlain was known for his dominance on the court, particularly his scoring and rebounding abilities. He famously scored 100 points in a single game, a record that still stands in the NBA. Throughout his career, Chamberlain won two NBA championships and four MVP awards. Off the court, he was known for his larger-than-life personality and various ventures, including acting and writing. Chamberlain's impact on the game of basketball is indelible, and he remains a legendary figure in sports history.

            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name"></span>
              <span class="job">Wilt Chamberlain</span>
            </div>
          </div>
          <!-- new -->
          <div class="slide swiper-slide">
            <img src="../slider/images/img4.jpg" alt="" class="image" />
            <p>
            Tim Duncan is a retired professional basketball player from the United States, widely regarded as one of the greatest power forwards in NBA history. Spending his entire 19-season career with the San Antonio Spurs, Duncan led the team to five NBA championships and earned numerous accolades, including two NBA MVP awards. Known for his fundamental skills, leadership, and consistency, he was nicknamed "The Big Fundamental." After retiring as a player in 2016, Duncan briefly served as an assistant coach for the Spurs before stepping away from coaching.
            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name"></span>
              <span class="job">Tim Duncan</span>
            </div>
          </div>
        </div>
        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!-- Swiper JS -->
    <script src="../slider/js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="../slider/js/script.js"></script>
  </body>
</html>

