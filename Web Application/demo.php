<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>The polycycle</title>
        <!--Font awesome CDN-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <!--Scroll reveal CDN-->
        <script src="https://unpkg.com/scrollreveal"></script>
        <link rel="stylesheet" href="style9.css">   
    </head>
    <body>
        <header>
            <div class="container">
                <nav class="nav">
                    <div class="menu-toggle">
                        <i class="fas fa-bars"></i>
                        <i class="fas fa-times"></i>
                    </div>
                    <a href="home.html" class="logo"><img src="#" alt=""></a>
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="home.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">Roads</a>
                        </li>
                        <li class="nav-item">
                            <a href="polycycle.html" class="nav-link">Costumes</a>
                        </li>
                        <li class="nav-item">
                            <a href="access.html" class="nav-link">Accesories</a>
                        </li>
                        <li class="nav-item">
                            <a href="team.html" class="nav-link">Team</a>
                        </li>
                        <li class="nav-item">
                            <a href="Contact.html" class="nav-link active"> Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--Headers ends-->
        <section class="hero" id="hero">
            <div class="container">
                <h1 class="headline">Contact Us</h1>
                
            </div>
        </section>
        <!--Hero ends-->
        <script src="main.js"></script>
        <div class="phpshow">
        <h4 class="phpshow1">Thank you for resgistering, 
        <?php
         $name= $_POST["name"];
         $number= $_POST["mobile"];
         $email =$_POST["email"];
         $queries = $_POST["queries"];
         $other = $_POST["other"];
         $create_datetime = date("Y-m-d H:i:s");

         $conn = new mysqli('localhost','root','','registration');
         if ($conn->connect_error){
             die('Connection Failed :' .$conn->connect_error);
         }else{
             $stmt =$conn->prepare("insert into contact(name,mobile,email,queries,other,create_datetime) values(?,?,?,?,?,?)");
             $stmt->bind_param("ssssss",$name,$number,$email,$queries,$other,$create_datetime);
             $stmt->execute();       
            echo  $_POST["name"];

            $stmt->close();
            $conn->close();
        }
        ?>, We will contact you soon</h4>
         </div>
        <!--map-->
        <div class="add">
            <div id="map"> </div>
        <div class="address">
            <div class="addr">
                <h1 class="add1">Address</h1>
                <h2 class="address1">#139, 140, Teppakulam W St,</h2>
                <h2 class="address1">Kamarajar Salai,</h2>
                <h2 class="address1">Tamil Nadu 625009</h2>
            </div>
            <div class="Contact">
                <h1 class="add1">Contact Number</h1>
                <h2 class="address1">Main Office-06930806890</h2>
                
            </div>
         </div>
        </div>
       
         <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTebK1oGSnEcdXC85SXGWpn-X0XAp9KSM&callback=initMap&libraries=&v=weekly"async>
        </script>
		
        <!--join us ends-->


        <!--footer-->
        <footer>
            <div class="container">
                <div class="back-to-top">
                    <a href="#hero"><i class="fas fa-chevron-up"></i> </a>
                </div>
                <div class="footer-content">
                    <div class="footer-content-about animate-top">
                        <h4>About P3</h4>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                    <div class="footer-content-divider animate-bottom">
                        <div class="social-menu">
                            <h4>Follow Along</h4>
                            <ul class="social-icons">
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="newsletter-container">
                            <h4>Newsletter</h4>
                            <form action="" class="newsletter-form">
                                <input type="text" class="newsletter-input" placeholder="Your email address....">
                                <button class="newsletter-btn" type="submit">
                                    <i class="fas fa-envelope"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </body>
</html>


