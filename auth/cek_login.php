<?php
session_start();

require '../config/config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM petugas WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['level_petugas'] = $row['level'];

        if ($row['level'] == 'admin') {
            header("Location: ../admin/index.php");
        } elseif ($row['level'] == 'petugas') {
            header("Location: ../petugas/index.php");
        }
    } else {
        echo "Login failed. Invalid username or password.";
    }
}

mysqli_close($conn);
?>
