<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["root"]; 
    $password = $_POST[" "]; 
    $email = $_POST[" "];      

    echo "Username: $username<br>";
    echo "Password: $password<br>";
    echo "Email: $email<br>";
} else {
    echo "Form not submitted.";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $leaving_from = $_POST["leaving_from"]; 
    $going_to = $_POST["going_to"]; 
    $departing_date = $_POST["departing_date"]; 
    $returning_date = $_POST["returning_date"]; 
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $dbname = "informations";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO your_table_name (leaving_from, going_to, departing_date, returning_date) VALUES ('$leaving_from', '$going_to', '$departing_date', '$returning_date')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Procces done successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
} else {
    echo "Form not submitted.";
}
?>



