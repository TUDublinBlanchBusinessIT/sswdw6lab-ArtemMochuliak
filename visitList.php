<?php
include 'dbcon.php';

$sql = "SELECT * FROM visit";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['visit_date'] . "</td>";
        echo "<td>" . $row['visit_time'] . "</td>";
        echo "<td>" . $row['doctor_id'] . "</td>";
        echo "<td>" . $row['patient_id'] . "</td>";
        echo "<td>" . $row['cost'] . "</td>";
        echo "<td>" . ($row['overtime'] ? 'Yes' : 'No') . "</td>";  
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No visits found</td></tr>";
}

mysqli_close($conn);
?>
