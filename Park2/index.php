<?php
session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
      
    // find user from database based on user_id in session  
    $result = $mysqli->query($sql);
    
    // fetches a result row as an associative array.
    $user = $result->fetch_assoc();
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/style.css"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet"> 

    </head>
    <body class="main-page">
        
        <header id="photo-header">
            <article class="banner-title in-main-page">
                <h1>Welcome to <br>
                The industry revolution park</h1>
            </article>
            
            <div id="main-button"><a href="#main">⟱</a></div>
            
        </header>

        <div id="menu">
            <span role="button" data-message="this is a mobile menu button. click to get navigation bar" >
                ☰
            </span>

            <article>
                <p>I R P</p>
            </article>
        </div>
        <!-- learn from W3school [Horizontal Navigation Bar] https://www.w3schools.com/css/css_navbar_horizontal.asp-->
       <nav>
            <article>
                <p>I R P</p>
            </article>
            <div class="inside-container">
                <a href="index.php">Home</a>

                <a  href="about.php">About Us</a>

                <a href="activity.php">Activity</a>

                <a href="accommodation.php">Accommodation</a>

                <a href="book.php">Book Now</a>

                <?php if (isset($_SESSION["user_id"])):?>

                    <a href="logout.php">Log Out</a>
                    <p id="userID">Hello <?= htmlspecialchars($user["name"])?></p>

                <?php else: ?>

                    <a href="signup.html">Sign Up</a>
                    <a href="login.php">Log In</a>


                <?php endif; ?>
           
            </div>
        </nav>
        <section class="animation-container">
            <div class="animation train">
                <img src="image/carriage.png" alt="train carriage">
                <img src="image/carriage.png" alt="train carriage">
                <img src="image/train.png" alt="steam train">
                
            </div>

            <div class="animation high-speed-train">
                <img src="image/high speed carriage.png" alt="high speed train carraiage">
                <img src="image/high speed carriage.png" alt="high speed train carraiage">
                <img src="image/high-speed-train.png" alt="high speed train">
            </div>
        </section>

        <main id="main">
            <section class="main-section">
                <div class="coloum-container" data-aos="flip-left">
                    <h2>The history of the industry revolution</h2>
                    <p>The first industry revolution from 1740 to 1840 </p>
                    <p>The second industry revolution from 1870 to 1914 </p>
                </div>
                <figure class ="history-video" data-aos="fade-left">
                    <iframe class="vedio-train" src="https://www.youtube.com/embed/vizSn5_uZNg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </figure>

            </section> 

            <div class="section-with-back">
                <div class="content-on-image">
                    <h2>Get more Information about the Industry revolution park</h2>

                    <button class="button find-more">
                        <a href="about.html">Find More</a>
                    </button>
                </div>
                            
            </div>

            <section class="main-section">

                <figure class ="vedio-train-container">
                    <video class="vedio-train" controls data-aos="fade-right" >
                        <source src="image/Train - 79556.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    
                </figure>

                <div class="coloum-container fun-in-park" data-aos="flip-right">
                    <h2>Have fun in this park</h2>
                    <p>There are some interesting activities in our park. You can enjoy these activities with your friends or family. <a href="activity.html">Find more >></a></p>
                </div>
        
            </section>

           

        </main>
        <footer>
            <div id="footer-container">
                <ul class="footer-list">
                    <li>
                        <a href="about.html"> Contact Us</a>
                    </li>
                    <li>32 Ericl streat</li>
                    <li>changlong, Queensland</li>
                    <li>Australia</li>
                </ul>
                <ul class="footer-list">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="activity.html">Activity</a></li>
                    <li><a href="accommodation.html">Accommodation</a></li>
                    <li><a href="book.html">Book Now</a></li>
                    <li><a href="reference.html">Reference</a></li>
                </ul>

                <ul class="footer-list">
                    <li>Follow Us</li>
                    <li><img src="image/facebook.png" alt="facebook logo"></li>
                    <li><img src="image/twitter.png" alt="twitter logo"></li>
                    <li><img src="image/instagram.png" alt="instagram logo"></li>
 
                </ul>
            </div>
        </footer>
        <script src="js/aos.js"></script>
        <script src="js/script.js"></script>
    </body>
    
</html>