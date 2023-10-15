<?php
include('connection.php');
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_POST['fromDate']) && isset($_POST['toDate'])) {
    $fromDate = $_POST['fromDate'];
    $toDate = $_POST['toDate'];

    $sql = "SELECT * FROM cvsRocket WHERE dateOfBirth BETWEEN '$fromDate' AND '$toDate'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table><tr>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Date of Birth</th>
                            <th>University</th>
                            <th>Used Technologies</th></tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['firstName']}</td>
                            <td>{$row['middleName']}</td>
                            <td>{$row['lastName']}</td>
                            <td>{$row['dateOfBirth']}</td>
                            <td>{$row['uniName']}</td>
                            <td>{$row['technology']}</td>
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