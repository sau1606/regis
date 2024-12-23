<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Personal Information
    $name = htmlspecialchars($_POST['name']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);

    // Contact Information
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    // Educational Information
    $degree = htmlspecialchars($_POST['degree']);
    $institute = htmlspecialchars($_POST['institute']);
    $passingYear = htmlspecialchars($_POST['passingYear']);
    $cgpa = htmlspecialchars($_POST['cgpa']);

    // Extracurricular Information
    $activities = htmlspecialchars($_POST['activities']);
    $hobbies = htmlspecialchars($_POST['hobbies']);

    // Display Information
    echo "Registration Successful!<br><br>";
    echo "<strong>Personal Information:</strong><br>";
    echo "Name: $name<br>";
    echo "Date of Birth: $dob<br>";
    echo "Gender: $gender<br><br>";

    echo "<strong>Contact Information:</strong><br>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";
    echo "Address: $address<br><br>";

    echo "<strong>Educational Information:</strong><br>";
    echo "Qualification: $degree<br>";
    echo "Institute: $institute<br>";
    echo "Year of Passing: $passingYear<br>";
    echo "CGPA/Percentage: $cgpa<br><br>";

    echo "<strong>Extracurricular Information:</strong><br>";
    echo "Achievements: $activities<br>";
    echo "Hobbies/Interests: $hobbies<br>";
} else {
    echo "Invalid request method.";
}
?>
