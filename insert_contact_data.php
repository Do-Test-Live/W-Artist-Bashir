<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "artist";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {

    die("Sorry we failed to connect: " . mysql_connect_error());
} else {
    echo "( Connection was successful )";

}
if (isset($_POST['contact'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);

    $query = $conn->query("INSERT INTO `bashir`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$comments')");

    if ($query) {
        $_SESSION['status'] = 'success';
        header('Location: contact.php');
    }
}


?>