<?php $page = 'dept'; include 'header.php'; ?>
<section>
    <main>
        <div class="main-contact">
            <h1>Select employee number</h1>
        <form id="errors" action="display-emp.php" method="POST">
            <input type="text" name="search" placeholder="search" pattern=".{5,}" title="minimum 
            5 characters">
            <button type="submit" name="submit-search">submit</button>
            <?php
                if (isset($_GET["error"])){
                    if ($_GET["error"] == "emptyfields"){
                        echo "<small>Empty fields!</small>";
                    }else if ($_GET["error"] == "norecords"){
                        echo "<small>No records!</small>";
                    }else if ($_GET["error"] == "sqlconnectionerror"){
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }                            
                }
            ?>
        </form>
        </div>
    </main>
</section>
<?php include 'footer.php'; ?>