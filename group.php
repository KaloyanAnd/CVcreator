<?php
include('connection.php');
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_POST['fromDate']) && isset($_POST['toDate'])) {
    $fromDate = $_POST['fromDate'];
    $toDate = $_POST['toDate'];

    $sql = "SELECT COUNT(*) as count, FLOOR(DATEDIFF(CURRENT_DATE, dateOfBirth)/365.25)
        as age, GROUP_CONCAT(DISTINCT technology) as technologies FROM cvsRocket WHERE dateOfBirth
        BETWEEN '$fromDate' AND '$toDate' GROUP BY age";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table><tr>
                            <th>Age</th>
                            <th>Number of Applicants</th>
                            <th>Technologies</th></tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['age']}</td>
                            <td>{$row['count']}</td>
                            <td>{$row['technologies']}</td>
                        </tr>";
                }

                echo "</table>";
                mysqli_free_result($result);
            } else {
                echo "Няма CV-та които да отговарят за този период.";
            }
        } else {
            echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
        }
    echo "Данни за справката от $fromDate до $toDate";
}

?>