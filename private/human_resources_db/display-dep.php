<?php
/* Attempt MySQL server connection.*/
include 'conection.php';
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT a.emp_no, a.first_name, a.last_name, b.dept_no, b.from_date, b.to_date
        FROM employees a    
        INNER JOIN dept_emp b
        ON a.emp_no = b.emp_no";
        
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Employee number</th>";
                echo "<th>First name</th>";
                echo "<th>Last name</th>";
                echo "<th>Department number</th>";
                echo "<th>Hire date</th>";
                echo "<th>Hire to date</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['emp_no'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['dept_no'] . "</td>";
                echo "<td>" . $row['from_date'] . "</td>";
                echo "<td>" . $row['to_date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
