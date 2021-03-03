<?php session_start() ?>
<?php $page = 'home' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/all.css">
    <link rel="stylesheet" href="public/css/solid.css">
    <link rel="stylesheet" href="public/css/brands.css">
</head>
<body>
    <div class="container">
        <div class="container--wrapper">
            <header>
                <?php
                    if(isset($_SESSION['useruid'])){ 
                        include 'public/php/nav-mobile.php';
                    }
                    if(!isset($_SESSION['useruid'])){ 
                        include 'public/php/nav-mobile-locked.php';   
                    }
                ?>
                <div class="box-1">   
                    <div class="box-top-content">
                        <img src="public/static/img/roundme-img.png" alt="profile-photo">
                        <ul>
                            <li>Details</li>
                            <li>Name: Lukasz Kolano</li>
                            <li>DOB: 28.08.1982</li>
                            <li>Location: Ireland/Dublin</li>
                        </ul>                        
                    </div>
                </div>
                <div class="box-2">
                    <div class="box-top-content social">
                        <ul>
                            <li><a href="http://www.twitter.com"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="http://www.facebook.com"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="http://www.instagram.com"><i class="fas fa-camera"></i></a></li>
                            <li><a href="public/php/contact.php"><i class="fas fa-envelope"></i></a></li>
                        </ul>                        
                    </div>
                </div>
            </header>
            <section>
                <aside>
                    <h1>Backup/Recovery</h1>
                    <p id="home--p">
                        About how to secure your data...
                    </p>
                    <div class="section--button"><a href="public/php/about.php">read more..</a></div>
                </aside>
                <main>
                    <h1>Portfolio</h1>
                    <p id="home--p">
                        Learn something about me my skills , my interests goals and many more.
                        In here you will have brief look at what I do and why.
                    </p>
                    <div class="section--button"><a href="public/php/portfolio.php">read more..</a></div>
                </main>
                <aside>
                    <h1>Freestyle</h1>
                    <p id="home--p">
                        Database queries on employees database.
                    </p>
                    <div class="section--button"><a href="public/php/freestyle.php">read more..</a></div>
                </aside>
            </section>
            <footer>
                <aside>
                    <div class="footer--aside">                
                        <h1>Personal portfolio</h1>
                        <?php
                            if(isset($_SESSION['useruid'])){ 
                                include 'public/php/nav-logout.php';
                                include 'public/php/nav.php';
                            }
                            if(!isset($_SESSION['useruid'])){ 
                                include 'public/php/left-locked.php';
                                include 'public/php/nav-locked.php';   
                            }
                        ?>
                    </div>
                </aside>
            </footer>       
        </div>
        <p class="copy-rights">Copyrights&copy;&nbsp;<span id="date"></span>&nbsp;kollk.com. All Rights Reserved.</p>
    <script type="text/javascript" src="public/static/js/jcode.js"></script>
</body>
</html>
