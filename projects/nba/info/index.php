<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="../home.php">Home</a>
            
            <a href="../shop.php">SHOP</a>
            <a href="../videos/index.php">VIDEOS</a>
            <a href="../about/index.php">ABOUT US</a>
            <a href="../contact.php">CONTACT US</a>
        </nav>
    </header>

    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="image/james2.jpg">
                <div class="content">
                    <div class="author">GOAT</div>
                    <div class="title">LeBorn James</div>
                    <div class="topic">Los Angeles Lakers </div>
                    <div class="des">
                        <!-- lorem 50 -->
                        LeBron James is a professional basketball player known for his versatility, athleticism, and leadership, playing for the Los Angeles Lakers in the NBA.
                        <br>
                        If you want to see more about LeBorn James click see more.

            
                    </div>
                    <div class="buttons">
                    <button id="videoButton">SEE MORE</button>

<script>
document.getElementById("videoButton").onclick = function() {
    window.location.href = "https://www.youtube.com/watch?v=nXd2IQvtrHs";
};
</script>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg">
                <div class="content">
                    <div class="author"></div>
                    <div class="title"> Michael Jordan</div>
                    <div class="topic"></div>
                    <div class="des">
                    Michael Jordan, widely regarded as one of the greatest basketball players of all time, achieved unparalleled success in the NBA with the Chicago Bulls, winning six championships and earning numerous accolades for his scoring, athleticism, and competitiveness.
                </div>
                    <div class="buttons">
                    <button id="hii">SEE MORE</button>

<script>
document.getElementById("hii").onclick = function() {
    window.location.href = "https://www.youtube.com/watch?v=jbW4f60dCNA";
};
</script>
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg">
                <div class="content">
                    <div class="author"></div>
                    <div class="title">Kobe Bryant</div>
                    <div class="topic">Los Angeles Lakers</div>
                    <div class="des">
                    Kobe Bryant, a legendary basketball player, represented the United States throughout his career in the NBA, primarily playing for the Los Angeles Lakers. He also competed for the United States national basketball team in international competitions, including the Olympics, where he won gold medals.        
                </div>
                    <div class="buttons">
                    <button id="hi">SEE MORE</button>

<script>
document.getElementById("hi").onclick = function() {
    window.location.href = "https://www.youtube.com/watch?v=1fjhIWJSxfw";
};
</script>
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content">
                    <div class="author"></div>
                    <div class="title">Shaquille O'Neal</div>
                    <div class="topic"></div>
                    <div class="des">
                    Shaquille O'Neal, commonly known as Shaq, is a retired professional basketball player who played for various NBA teams during his career, including the Orlando Magic, Los Angeles Lakers, Miami Heat, Phoenix Suns, Cleveland Cavaliers, and Boston Celtics. He represented the United States in international competitions and is widely regarded as one of the most dominant players in the history of the NBA due to his size, strength, and skill.

                </div>
                    <div class="buttons">
                        
                        <button id="h">SEE MORE</button>

<script>
document.getElementById("h").onclick = function() {
    window.location.href = "https://www.youtube.com/watch?v=3VlMSo7AXow";
};
</script>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="image/james.jpg">
                <div class="content">
                    <div class="title">
                    LeBorn James
                    </div>
                    <div class="description">
                    Los Angeles Lakers
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg">
                <div class="content">
                    <div class="title">
                    Michael Jordan
                    </div>
                    <div class="description">

                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg">
                <div class="content">
                    <div class="title">
                    Kobe Bryant
                    </div>
                    <div class="description">
                    Los Angeles Lakers
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content">
                    <div class="title">
                    Shaquille O'Neal
                    </div>
                    <div class="description">

                    </div>
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>

    <script src="app.js"></script>
</body>
</html>


<?php include '../hello.php'; ?>
<?php include '../slider/index.php'; ?>
