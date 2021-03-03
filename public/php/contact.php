<?php $page = 'contact'; include 'header.php'; ?>
<section>
    <main>
        <h1>Contact</h1>
        <div class="main-contact">
            <form action="../../private/contact_include.php" method="post">
                <h5>Name:</h5>
                <input type="text" name="name" placeholder="Name" required>
                <h5>Subject:</h5>
                <input type="text" name="subject" placeholder="Subject" required>
                <h5>E-mail:</h5>
                <input type="email" name="email" placeholder="E-mail*" required>
                <h5>Your message:</h5>
                <textarea type="text" name ="message" placeholder="Your message*" rows="5" maxlength="50" required></textarea>
                <button type="submit" name="submit">Submit</button>
                
                <?php 
                if (isset($_GET["success"])){
                    if ($_GET["success"] == "mailsend"){
                        echo "<small style='color: green';>Mail send!</small>";
                    }   
                }
                ?>

            </form>
        </div>
    </main>
</section>

<?php include 'footer.php'; ?>
    