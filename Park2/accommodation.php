<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>accommodation</title>
        <link rel="stylesheet" href="css/style.css"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    </head>

    <body class="accommodation-page">

        <header id="photo-header">
        
            <div class="banner-title">
                
                <h1>Accommodation</h1>
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
            <section class="accommodation-section">
                <figure class="photo">
                    <img id="first-hotel-image"> 
                </figure>

                <article class="activity-article">
                    <h2>Accommodation in the first industry revolution</h2>
                    <p><i><strong>Description:</strong></i> Red land Hotel claims to be one of the most historic hotels in Europe (opened in 1220). Visitors can enjoy the unique cuisine in this time and space.The hotel is decorated with fireplaces, paintings, stone walls and antique furniture.</p>
                    <p>location: London, UK.  Time Location: 1845</p>
                    <p><strong>Price: </strong>$300 / night</p>
                </article>
                <div class='coloum-container'>
                    <button class='button book'>
                        <a href="book.html">Book</a>
                    </button>
                </div>    
            </section>

            <section class="accommodation-section">
                <figure class="photo">
                    <img id="second-hotel-image"> 
                </figure>
                <article class="activity-article">
                    <h2>Accommodation in the second industry revolution</h2>
                    <p> CoCo is the oldest hotel in Germany. Visitors can enjoy the traditional Germany food in this timeline. It is only a short walk from the hotel to the bustling university town activity center. Here, you can get to know others, visit the colorful cathedral market, or enjoy the unforgettable performances at the Freiburg Concert Hall.</p>
                    <p> Location: Freiburg, Germany.   Time Location: 1900</p>
                    <p><strong>Price: </strong>$350 / night</p>
                </article>
                <div class='coloum-container'>
                    <button class='button book'>
                        <a href="book.html">Book</a>
                    </button>
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

        <script src="js\script.js"></script>
    </body>

</html>