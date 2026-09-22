```php
<?php
session_start();

$correct_username = "admin";
$correct_password = "12345";

$message = "";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $correct_username && $password == $correct_password) {
        $_SESSION["username"] = $username;
        header("Location: game.php");
        exit();
    } else {
        $message = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <br><br>

        <input type="password" name="password" placeholder="Password" required>
        <br><br>

        <button type="submit" name="login">Login</button>
    </form>

    <p><?php echo $message; ?></p>

</body>
</html>
```
