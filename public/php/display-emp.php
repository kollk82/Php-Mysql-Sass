<?php $page = 'dept'; include 'header.php' ?>
<section>
    <main id="main-human_res">
        <div class="human_res">
            <h1>Selected employees details</h1>
        <div>
        <div>
            <?php
                /*MySQL server connection. */
                $link = mysqli_connect("localhost", "admin", "9C~s_RcTGGfY", "employees");
                $number = $_POST['search'];
                // Check connection
                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                if (!isset($number) || trim($number) == ''){
                    header("location:display-table.php?error=emptyfields");
                    exit;
                } 
                // Attempt select query execution
                 $sql = "SELECT *
                         FROM dept_emp
                         WHERE emp_no 
                         LIKE '%{$number}%'";
                
                if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo "<table>";
                            echo "<tr>";
                                echo "<th>Employee No.</th>";
                                echo "<th>Department no.</th>";
                                echo "<th>From</th>";
                                echo "<th>To</th>";
                            echo "</tr>";
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                                echo "<td>" . $row['emp_no'] . "</td>";
                                echo "<td>" . $row['dept_no'] . "</td>";
                                echo "<td>" . $row['from_date'] . "</td>";
                                echo "<td>" . $row['to_date'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        header("location:display-table.php?error=norecords");
                        exit;
                    }
                } else{
                    header("location:display-table.php?error=sqlconnectionerror");
                    exit;
                }
                
                // Close connection
                mysqli_close($link);
            ?>
        </div>
    </main>
</section>
<?php include 'footer.php' ?>