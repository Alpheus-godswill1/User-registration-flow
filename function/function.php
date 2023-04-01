<?php

// connect to the database
$conn = new mysqli('localhost', 'root', '', 'userregistration');

// check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit-button'])){
// retrieve form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$encryted_password = md5($password);


// insert user data into the database
$query = "INSERT INTO user_registration(first_name, last_name, username, email, gender, password) VALUES ('$first_name', '$last_name', '$username', '$email', '$gender', '$encryted_password')";
if (mysqli_query($conn, $query)) {
    header('Localhost: index.php?User-registered-successfully.');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}


// check if email and username are unique
$query = "SELECT FROM user_registration  email AND username ";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($result)) {
    $db_email = $row['email'];
    $db_username = $row['username'];
    $db_password = $row['password'];


    if($email == $db_email AND $db_username = $username ){
        echo 'Sorry username and email already exist';
    }
}

global $db_password;
if($encryted_password == $db_password ){
    header("Localhost: ./404/404.php?Sorry_you_can't_access_this_page");
}


// close database connection
mysqli_close($conn);
}

?>
