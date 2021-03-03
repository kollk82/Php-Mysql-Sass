<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../css/style.css" rel="stylesheet"> 
    <link href="../css/all.css" rel="stylesheet">
    <link href="../css/solid.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="container--wrapper">
            <section id="login-page">
                <main class="login-locked">
                    <h1>Access Denied<br>&nbsp;Please login</h1>
                    <i class="fas fa-lock"></i>
                </main>
                <main>   
                <h1 class="no-access">Login to gain access </h1>
                    <div class="main-contact">
                        <form action="../../private/login_include.php" method="post">
                            <h5>Username:</h5>
                            <input type="text" name="username" placeholder="Username">
                            <h5>Password:</h5>
                            <input type="password" name="password" placeholder="Password*">
                            <button type="submit" name="submit">Submit</button>
                            <a href="signup.php">Register here!</a>
                            <?php
                                if (isset($_GET["error"])){
                                    if ($_GET["error"] == "emptyinput"){
                                        echo "<small>&nbsp;&nbsp;Empty fields!</small>";
                                    }                         
                                    else if ($_GET["error"] == "wronglogin"){
                                        echo "<small>&nbsp;&nbsp;Wrong username!</small>";
                                    }
                                    else if ($_GET["error"] == "wrongpassword"){
                                        echo "<small>&nbsp;&nbsp;Wrong password!</small>";
                                    }                          
                                }
                            ?>
                        </form>
                        
                    </div>
                </main>
            </section>
        </div>
        <p class="copy-rights">Copyrights&copy;&nbsp;<span id="date"></span>&nbsp;kollk.com. All Rights Reserved.</p>
    </div>
    <script type="text/javascript" src="../static/js/jcode.js"></script>
</body>
</html>