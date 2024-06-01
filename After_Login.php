<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/After_Login.css">
    <link rel="shortcut icon" href="Phots/favicon.png" type="image/x-icon">
    <script src="JS/After_Login.js"></script>
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="headerConatiner">
            <ul id="headList">
                <li>
                    <div class="logo">
                        <img src="Phots/Logo.png" alt="logo">
                    </div>
                </li>
                <li>
                    <div class="heading-text">
                        <h1>National Health Scheme</h1>
                    </div>
                </li>
                <li>
                    <div class="headLinks">
                    <?php
                    require('db.php');
                    session_start();
                    if (isset($_SESSION['username'])) {
                        $username = $_SESSION['username'];
                    }?>
                        <a href="Profile.php"><?php echo $username; ?></a>
                        <a href="index.html" id="logout" onclick="logout()" > Log Out </a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="navContainer">
            <nav>
                <ul>
                    <li>
                        <div class="navLinks">
                            <a href="After_Login.html">Home</a>
                            <a href="After_Login_AboutUs.html">About Us</a>
                            <a href="After_Login_ContactUs.html">Conatact Us</a>
                            <a href="#">E-Resource</a>
                            <div class="search">
                                <input type="search" placeholder="search">
                                <button type="button">Search</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="mainContainer">
            <marquee behavior="" direction="left"><h3>Welcome to my website</h3></marquee>
            <div class="Slider">
                <div class="imgContainer">
                    <div class="imgSlider">
                        <img src="Phots/banner-1.jpg" alt="">
                        <img src="Phots/banner-2.jpg" alt="">
                        <img src="Phots/banner-3.jpg" alt="">
                        <img src="Phots/banner-5.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="aboutWebsite">
                <h1>About Website</h1>
                <p>In Gujarat state, Mother and Child protection card is called Mamta Card. With the vision of our honourable Prime Minister Shri XYZ to spread awareness "HEALTH IS WEALTH" and "MAMTA EMPOWERNMENT", Government of Gujarat took the first initiative step in 2005 by launching Mamta Scheme in online as well as offline mode where a Mamta Card is issued to the women and with its help, health service is provided to her at the time of menturation as well as to her child at free of cost. Under this scheme, number of anganvadies have been established in various disricts of Gujarat which are open 24 X 7 for the welfare of women, children and the society.This card empowers families to make decisions for improved health and nutritional status and development of young children on a continual basis.</p>
                <p>The institutional scheme also proved at the time of COVID 19 by doing door to door survey and organizing camps in the rural areas and in slum areas.</p>
                <p>The institutional scheme also recieved Award  of Appreciation by Government of Gujarat in 2021 for its constant efforts in this domain.</p>
            </div>
            <div class="informationContainer">
                <div class="ic1">
                    <img src="" alt="img1">
                    <h2>Divij Rana</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, illo quibusdam dignissimos quae natus distinctio odit sequi voluptatum reprehenderit sint veritatis ratione quod, quos amet doloremque provident optio, animi eius!</p>
                </div>
                <div class="ic2">
                    <img src="" alt="img1">
                    <h2>Yash Pavar</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptate totam quod atque sit ducimus obcaecati ratione nulla recusandae dolorem eaque voluptates, debitis delectus alias ea soluta eligendi provident a.</p>
                </div>
            </div>
        </div>
        <div class="footerContainer">
            <div class="links">
                <ul>
                    <li>
                        <div class="navLinks">
                            <a href="index.html">Home</a>
                            <a href="AboutUs.html">About Us</a>
                            <a href="ContactUs.html">Conatact Us</a>
                            <a href="#">E-Resource</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body> 
</html>