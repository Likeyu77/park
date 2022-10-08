<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Booking</title>
        <link rel="stylesheet" href="css/style.css"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    </head>
    <body class="book-page">
        <header id="photo-header">
        
            <div class="banner-title">
                
                <h1>Booking</h1>
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

        <main class="coloum-container">
            <article>
               <h2>Please, following these steps to book your trip!</h2>
            </article>
            
            <fieldset>
               
                <figure class="photo-book">
                    <img src="image/social-media-5187243_640.png" alt="animation persion with some colorful smart phone">
                </figure>
                
                <form name="contact-form" class="form" method="post">
                    
                    <p>Contact Information</p> 
                    
                    <div class="book-info">
                        <label for="name">Name:</label>
                        <div class="book-input">
                            <input type="text" id="name" name="name" placeholder=" First Name and Last Name." required><br>
                        </div>   
                    </div>

                    <div class="book-info">
                        <label for="email">E-mail:</label>
                        <div class="book-input">
                            <input type="email" name="email" id="email" placeholder="Please, enter your E-mail." required>
                        </div>
                    </div>
                    <div class="book-info">
                        <label for="contact-number">Contact Number:</label>
                        <div class="book-input">
                            <input type="number" name="contact-number" id="contact-number" placeholder="Enter your mobile number">
                        </div>
                    </div>
                    <div class="submission">
                        <button type="submit">
                            Submit
                        </button>
                    </div>
                </form>
            </fieldset>

            <fieldset>
                
                <figure class="photo-book">
                    <img src="image/amusement-2456905_640.jpg" alt="people and children play recreation facility">
                </figure>

                <form  class="form" method="post">
                    
                    <p>Booking Ticket</p> 
                    
                    <div class="book-info">
                        <p>Ticket price: $125 per adult
                        <br>
                        Ticket price: $80 per child </p>
                    </div>
                    <div class="book-info">
                        <label for="adult-ticket">Adult tickets:</label>
                        <div class="book-input">
                            <input type="number" name="adult-ticket" id="adult-ticket" min="0" >
                        </div>
                    </div>
                    <div class="book-info">
                        <label for="child_ticket">Child tickets:</label>
                        <div class="book-input">
                            <input type="number" name="child_ticket" id="child-ticket" min="0">
                        </div>
                    </div>
                    <div class="book-info">
                        <label for="booking_date">Booking date:</label>
                        <div class="book-input">
                            <input type="date" name="booking_date" id="booking-date" required>
                        </div>
                    </div>
                    <div class="book-info check-available">
                        <p id="ticket-total-price">Total price:</p>
                        <button type="submit" name="Check-Price">
                            Check Price
                        </button>
                    </div> 
                    <p class="error-message"></p>
                    <div class="submission">
                        <button name="ticket-submit">
                            Submit
                        </button>
                    </div>
                </form>

                <article class="pop-up-window window-ticket">
                    <span>❎</span>

                    <div>✅</div>
                    <h3>Thank you for booking tickets!</h3>
                    
                    <p> Please, check your E-mail for booking information.</p>
                    
                </article>
            </fieldset>


            <fieldset>
                
                <figure class="photo-book">
                    <img src="image/newhouse-diningroom-unsplash.jpg" alt="there is wood diner table in dining room with black wall">
                </figure>

                <form class="form" method="post">
                    
                    <p>Booking Accommodation</p> 
                    
                    <div>
                        <p>Select time zone:</p>
                        <div class="book-info">
                            <div class="book-input">
                                <input type="radio" name="time-zone", id="first-industry" required>
                            </div> 
                            <label for="first-industry">The first industry revolution</label>
                               
                        </div>
                        <div class="book-info">
                            <div class="book-input">
                                <input type="radio" name="time-zone", id="second-industry" required>
                            </div>
                            <label for="second-industry">The second industry revolution</label>
                            
                        </div>
                    </div>

                    <div>
                        <p id="accommodation-price">Accommodation Price:</p>
                    </div>
                    <div class="check-available check-date">
                        <div class="book-info">
                            <label for="check-in">Check In:</label>
                            <div class="book-input">
                                <input type="date" name="check-in" id="check-in" required>
                            </div>
                        </div>
                        <div class="book-info">
                            <label for="check-out">Check Out:</label>
                            <div class="book-input">
                                <input type="date" name="check-out" id="check-out" required>
                            </div>
                        </div>
                    </div>
                    <div class="check-available">
                        <div class="book-info">
                            <p id="stay">Stay:</p>
                        </div>
                        <div class="book-info">
                            <label for="number-people">People:</label>
                            <div>
                                <select name="number-people">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div class="book-info">
                            <label for="number-room">Room:</label>
                            <div>
                                <select name="number-room">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="submission">
                        <button type="submit">
                            Check Available
                        </button>
                    </div>
                    <div>
                        <p id="accommodation-total-price">Total price:</p>
                    </div>
                    <p class="error-message"></p>
                    <div class="submission">
                        <button  name="accommodation-submit">
                            Submit
                        </button>
                    </div>
                </form>
                <article class="pop-up-window window-accommodation">
                    <span>❎</span>

                    <div>✅</div>
                    <h3>Thank you for booking accommodation!</h3>
                    
                    <p> Please, check your E-mail for booking information.</p>
                    

                </article>
            </fieldset>
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