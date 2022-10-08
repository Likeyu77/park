<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>activities in park</title>
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
 
</head>

<body class="activity-page">

    <header id="photo-header">
        
        <div class="banner-title">
            
            <h1>Activity</h1>
        </div>
    </header>

    <div id="menu">
        <span role="button" data-message="this is a mobile menu button. click to get navigation bar" >
            ☰
        </span>

        <article>
            <p>I R P</p>
        </article>
    </div>
    <nav>
        <article>
            <p>I R P</p>
        </article>

        <div class="inside-container">

                <a href="index.html">Home</a>

                <a  href="about.html">About Us</a>

                <a href="activity.html">Activity</a>

                <a href="accommodation.html">Accommodation</a>

                <a href="book.html">Book Now</a>

                <?php if (isset($_SESSION["user_id"])):?>

                    <a href="logout.php">Log Out</a>

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

    <main>
        <h2>Please, Finding activities you are intested.</h2>
        
        <section class="activity-section">

            <figure class="photo" data-aos="zoom-out-right">
                <img src="image/train-pixobay.jpg" alt="steam train is running on the briage with a blue sky">
            </figure>

            <article class="coloum-container activity-article"  
            data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1500">

                <h2>Ancient Steam Train</h2>
                <p><strong>Description:</strong> The train will run around the whole of Britain.Passengers can enjoy the beautiful scenery along the way and feel the changes in society.</p>
                <p><i>Time:</i>8 AM to 6 PM. Every 2 hours per train</p>
            </article>
           
        </section>

        <section class="activity-section">
            
            <figure class="photo" data-aos="fade-up" data-aos-duration="3000">
                <img src="image/museum-pixobay.jpg" alt="Domed Museum" >
            </figure>

            <article class="coloum-container activity-article" data-aos="fade-up" data-aos-duration="2000">
                <h2>Ancient Machine Museum</h2>
                <p><strong>Description:</strong> Visitors can see some of the ancient machinery, learn how it works and even try to use some of the machines。</p>
                <p><i>Time:</i>8 AM to 6 PM</p>
            </article>
            
        </section>

        <section class="activity-section">
            
            <figure class='photo' data-aos="zoom-in-right">
                <iframe src="https://www.youtube.com/embed/Snibt3CNqBA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </figure>
            <article class="coloum-container activity-article" data-aos="zoom-in-left">
                <h2>Tesla Coil & Faraday Cage</h2>
                <p><strong>Description:</strong>Visitors see the electricity dancing with the melody of the music and experience the shock they have never experienced before.Visitors can also wear a Faraday cage to experience it for themselves.</p>
                <p><i>Time:</i>8 AM to 6 PM</p>
            </article>
     
        </section>

        <section class="activity-section">
            
            <figure class="photo" data-aos="flip-left">
                <img src="image/stage-1357961_640.jpg" alt="The stage for the show of the war of Currents" >
            </figure>
            <article class="coloum-container activity-article" data-aos="flip-right">
                <h2>Stage Show: The War Of Currents</h2>
                <p><strong>Description:</strong>This stage show describes the battle between Edison and Tesla. Visitors can learn how people are gradually choosing to use alternating current instead of direct current through the show.</p>
                <p><i>Time:</i> 9 AM to 11 AM and 2 PM to 4 pm</p>
            </article>

            
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