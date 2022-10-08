<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>about us</title>
        <link rel="stylesheet" href="css/style.css"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">

    </head>

    <body class="about-us-page">
        <header id="photo-header">
        
            <div class="banner-title">
                
                <h1>About Us</h1>
            </div>
        </header>

        <div id="menu" >
            <span role="button" data-message="this is a mobile menu button. click to get navigation bar">
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
            <h3>There are more information about us.</h3>
            <section class="about-section about-section1">
                <figure class="photo">
                    <img src="image/stage-1357961_640.jpg" alt="The stage for the show of the war of Currents" >

                </figure>
                <article class="coloum-container activity-article">
                    <h2>Information about park</h2>
                    <p>
                        industry revolution park is divided into two areas corresponding to the first and second industrial revolutions. Each area has its own time zone so people can travel back to the past and see what happened during that time from Gad's view.
                    </p>
                </article>
                
            </section>

            <section class="coloum-container about-section">
                <article class="location-heading">
                    <h2>Location</h2>
                </article>
                <div class="contact-container">
                    <div id="location-text">
                        <h3>Industry Revolution park</h3>
                        <p>32 Ericl streat, changlong, Queensland, Australia</p>
                    </div>

                    <figure id="location-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.4491010252323!2d113.31370831496754!3d23.007276984960843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3402547409b6e971%3A0xcdd890aafe51f209!2sGuangzhou%20Chimelong%20Safari%20Park%20%EF%BC%88Main%20Gate%EF%BC%89!5e0!3m2!1sen!2sau!4v1631688375381!5m2!1sen!2sau"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </figure>
                </div>
                

            </section>

            <section class="coloum-container about-section">
                <article class="location-heading">
                    <h2 >Contact</h2>
                </article>
                <div class="contact-container">
                    <article class="contact-us">
                        <h3>Call Us</h3>
                        
                        <p>Phone Number: 116677</p>

                        <p>
                            Contact center hours: 
                            <br>
                            8 AM - 5:30 PM - Monday to Friday
                            <br>
                            8 AM - 5 PM - Saturday
                            <br>
                            8 AM - 4 PM - Sunday
                        </p>
                        
                    </article>
                
                    <article class="contact-us">
                        <h3>Email Us</h3>
                        <p>We would like to help. Send us an Email and a member of Guests Services team will get back to you as soon as possible</p>
                        <p>Email: revolutionpark@servi.com</p>
                    </article>
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
        <script src="js/script.js"></script>
    </body>
</html>