
            <footer>
                <aside>
                    <div class="footer--aside">                
                        <h1>Personal portfolio</h1>
                        <div class="left-nav">
                            <ul>
                                <li><h5>Welcome, <?php echo "&nbsp;", $_SESSION["useruid"]; ?></h5></li>
                                <li><a href="../../private/logout_include.php"><h5>&nbsp;&nbsp;logout</h5></a></li>                                      
                            </ul>
                        </div>
                        <?php
                            if(isset($_SESSION['useruid'])){ 
                                include 'nav.php';
                            }
                        ?>
                    </div>
                </aside>
            </footer>       
        </div>
        <p class="copy-rights">Copyrights&copy;&nbsp;<span id="date"></span>&nbsp;kollk.com. All Rights Reserved.</p>
    <script type="text/javascript" src="../static/js/jcode.js"></script>
</body>
</html>
