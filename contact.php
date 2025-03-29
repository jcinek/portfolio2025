<!doctype html>

<html lang="en-US">

<?php include('php/sendform.php'); ?>


    <!-- ╾━╤デ╦︻( ͡° ͜ʖ ͡°) Opening DevTools, are we? ╾━╤デ╦︻( ͡° ͜ʖ ͡°) -->
    <head>
        <title>Contact</title>
        <link rel="icon" type="image/x-icon" href="assets/thelogo21.svg">
        <link rel="stylesheet" href="stylesheets/mainstyle.css">
        <link rel="stylesheet" href="stylesheets/contactstyle.css">
        <link rel="stylesheet" href="stylesheets/hamburger.css">
		<meta charset="UTF-8">
		<meta name="description" content="John Cinek Portfolio">
		<meta name="keywords" content="John, Cinek, John Cinek, Portfolio, John Cinek Portfolio">
		<meta name="author" content="John Cinek">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/08d99e7348.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <?php
        ?>

    <header>
        <a href="">
            <h3>
                John T. Cinek
            </h3>
        </a>
        <a href="">
            <img src="assets/thelogo21black.svg" alt="JTC Logo" width="50px" height="50px">
        </a>
    </header>
        <div class="videodiv">
            <video autoplay loop muted class="backvideo">
                <source src="assets/plexus5.mp4">
            </video>
        </div>
        
        <!-- (　ﾟДﾟ )⊃旦 Hamburger Menu, activated via css media queries and powered by JavaScript -->

        <div class="containerWrapper">
            <div class="container"> 
                <div class="navBar">
                    <ul class="hamburgerNav">
                        <li class="navItem">
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li class="navItem">
                            <a href="about.html">
                                About
                            </a>
                        </li>
                        <li class="navItem">
                            <a href="resume.html">
                                Resume
                            </a>
                        </li>
                        <li class="navItem">
                            <a href="gallery.html">
                                Gallery
                            </a>
                        </li>
                        <li class="navItem">
                            <a href="">
                                Contact
                            </a>
                        </li>
                        <li>
                            <div class="hamburgerheader">
                                <a href="">
                                    <img src="assets/thelogo21.svg" alt="JTC Logo" width="44px" height="44px">
                                </a>
                            </div>
                        </li>
                    </ul>
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbox">
            <nav class="navlist">
                <div class="navitems">
                    <a href="index.html" class="iconlable">
                        <p>
                            Home
                        </p>
                    </a>
                    <a href="index.html" class="iconbox">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </div>
                <div class="navitems">
                    <a href="about.html" class="iconlable">
                        <p>
                            About
                        </p>
                    </a>
                    <a href="about.html" class="iconbox">
                        <i class="fa-solid fa-circle-info"></i>
                    </a>
                </div>
                <div class="navitems">
                    <a href="resume.html" class="iconlable">
                        <p>
                            Resume
                        </p>
                    </a>
                    <a href="resume.html" class="iconbox">
                        <i class="fa-solid fa-file"></i>
                    </a>
                </div>
                <div class="navitems">
                    <a href="gallery.html" class="iconlable">
                        <p>
                            Gallery
                        </p>
                    </a>
                    <a href="gallery.html" class="iconbox">
                        <i class="fa-regular fa-image"></i>
                    </a>
                </div>
                <div class="navitems" id="navactive">
                    <a href="" class="iconlable">
                        <p>
                            Contact
                        </p>
                    </a>
                    <a href="" class="iconbox">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                </div>
            </nav>
        </div>
        <div class="mainflex">
            <main>
                <section class="mainitem contactitem">
                    <div>
                        <h2 class="formheaders">
                            Contact Me
                        </h2>
                    </div>
                    
                    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" class="formbox">
                        <label for="name"> Full Name</label>
                        <input type="text" id="name" name="name" placeholder="John Wick" value="<?= $name; ?>">
                        <span class="formerror">
                            <?= $name_error ?>
                        </span>

                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="johnwick@example.com" value="<?= $email; ?>">
                        <span class="formerror">
                            <?= $email_error ?>
                        </span>

                        <label for="message">Your Message</label>
                        <textarea type="text" name="message" id="message" cols="30" rows="10" maxlength="350" placeholder="Max 350 Characters"></textarea>
                        <span class="formerror">
                            <?= $message_error ?>
                        </span>

                        <button type="submit">Send</button>
                    </form>
                </section>
                <footer>
                    <p id="copyright">
                        &copy; John T. Cinek 2024
                    </p>
                    <a href="index.html">
                        <img class="footerlogo" src="assets/thelogo21.svg" alt="JTC Logo" width="30px" height="30px">
                    </a>
                </footer>
            </main>
        </div>
        
        <!-- JavaScript (ง ͠ ᵒ̌ Дᵒ̌ )▬▬ι═══════ﺤ -->
        <script src="scripts/hamburger.js"></script>

    </body>
</html>