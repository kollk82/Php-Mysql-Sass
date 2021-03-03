<div class="nav-bar" id="nav-bar"><i class="fas fa-bars"></i></div>
<div class="hide-it">
    <nav id="top-nav" class="top-nav-cl">
        <ul>
            <li><h5>Welcome<?php echo "&nbsp;", $_SESSION["useruid"]; ?></h5></li>
            <li><a href="../../" class="<?php if($page == 'home'){echo 'active';} ?>">home</a></li>
            <li><a href="/public/php/about.php" class="<?php if($page == 'about'){echo 'active';} ?>">about</a></li>
            <li><a href="/public/php/portfolio.php" class="<?php if($page == 'portfolio'){echo 'active';} ?>">portfolio</a></li>                  
            <li><a href="/public/php/dept.php" class="<?php if($page == 'dept'){echo 'active';} ?>">DB review</a></li>
            <li><a href="/public/php/freestyle.php" class="<?php if($page == 'table'){echo 'active';} ?>">freestyle</a></li>
            <li><a href="/public/php/contact.php" class="<?php if($page == 'contact'){echo 'active';} ?>">contact</a></li>
            <li><a href="../../private/logout_include.php">logout</a></li>
        </ul>
    </nav>
</div>
