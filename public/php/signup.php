<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href= "../css/style.css"> 
</head>
<body>
    <div class="container">
        <div class="container--wrapper">
            <section id="signup-page">
                <main class="signup-page-main">
                    <h1>Registration Form</h1>
                    <div class="main-contact">
                        <form action="../../private/signup_include.php" method="post">
                            <h5>Username:</h5>
                            <input type="text" name="username" placeholder="Username" autocomplete="off" noValidate>
                            <h5>Password:</h5>
                            <input type="password" name="password" placeholder="Password*"  autocomplete="off" noValidate>
                            <h5>Confirm Password:</h5>
                            <input type="password" name="password-confirm" placeholder="Confirm Password*"  autocomplete="off" noValidate>
                            <button type="submit" name="signup-submit">Submit</button>
                            <a href="login.php">Log in</a>
                            <?php
                                if (isset($_GET["error"])){
                                    if ($_GET["error"] == "emptyinput"){
                                        echo "<small>&nbsp;&nbsp;Empty fields!</small>";
                                    }
                                    else if ($_GET["error"] == "nopwdmatch"){
                                        echo "<small>&nbsp;&nbsp;Passwords do not match!</small>";
                                    }
                                    else if ($_GET["error"] == "stmtfailed"){
                                        echo "<small>&nbsp;&nbsp;Something went wrong!</small>";
                                    }
                                    else if ($_GET["error"] == "invalidusername"){
                                        echo "<small>&nbsp;&nbsp;Use proper username!</small>";
                                    }
                                    else if ($_GET["error"] == "usernametaken"){
                                        echo "<small>&nbsp;&nbsp;Username already taken!</small>";
                                    }
                                    else if ($_GET["error"] == "none"){
                                        echo "<small>&nbsp;&nbsp;You have signed up!</small>";
                                    }
                                }
                            ?>
                            
                        </form>                        
                    </div>                    
                </main>
            </section>
        </div> 
        <p class="copy-rights">Copyrights&copy;&nbsp;<span id="date"></span>kollk.com. All Rights Reserved</p>
        <script type="text/javascript" src="../static/js/jcode.js"></script>
    </div>
</body>
</html>