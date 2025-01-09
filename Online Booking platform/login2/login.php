<?php
session_start();

// Database connection variables
$host = 'localhost'; // Database host
$dbname = 'costumer'; // Database name
$user = 'root'; // Database username
$pass = ''; // Database password

// Create a new PDO instance for the database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}

$login_failed = false;

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Fetch user data from the database
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if a user was found with the given credentials
    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: ../index2.php'); // Redirect to a welcome page after login
        exit();
    } else {
        echo"<script>
            alert('Invalid email or password.');
        </script>";
        echo"<script>
           window.open('index.php','_self')
        </script>";
    }
}
?>
