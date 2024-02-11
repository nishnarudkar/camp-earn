<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['addre'];
    $education = $_POST['edu'];
    $collegeName = $_POST['collname'];
    $resume = $_POST['resume'];

    // Do something with the form data, such as storing it in a database
    // For demonstration purposes, let's just print the data
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Education: " . $education . "<br>";
    echo "College Name: " . $collegeName . "<br>";
    echo "Resume: " . $resume . "<br>";
}
?>
