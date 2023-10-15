<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $date = $_POST['dateOfBirth'];
    $uniName = $_POST['uniName'];
    $technology = implode(", ", $_POST['technology']);

    if (!empty($firstName) && !empty($lastName) && !empty($date) && !empty($uniName) && !empty($technology)) {
        $checkQuery = "SELECT * FROM cvsRocket WHERE firstName='$firstName' AND middleName='$middleName' AND lastName='$lastName' AND dateOfBirth='$date'";
        $result = $conn->query($checkQuery);

        if ($result->num_rows > 0) {
            echo '<script>alert("Вече има такова CV")</script>';
            echo "<p><a href=./index.php>Върнете се на главната страница:</a></p>";
        } else {
            $sql = "INSERT INTO cvsRocket (`firstName`,`middleName`,`lastName`,`dateOfBirth`,`uniName`,`technology`)
            VALUES ('$firstName', '$middleName','$lastName','$date','$uniName','$technology')";

            if ($conn->query($sql) === TRUE) {
                echo "Успешно изпращане на данните";
                echo "<p><a href=./index.php>Върнете се на главната страница:</a></p>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    } else {
    echo '<script>alert("Моля попълнете всички полета")</script>';
}
}
?>
