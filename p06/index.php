<?php
session_start();
if (isset($_GET['action']) and $_GET['action'] == 'logout') {
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['logged_in']);
    // print('Logged out!');
    $_SESSION['logout_msg'] = "Successfully logged out";
    header('Location: http://localhost/php/p06');
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Session. HTTP cookies</title>
</head>

<body>
    <h1> Session. Cookies</h1>
    <a href="cookies.php">
        <button>Cookies</button>
    </a>
    <br>
    <br>
    <?php
    $msg = '';
    if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        if ($_POST['username'] == 'Jurgita' && $_POST['password'] == '1234') {
            $_SESSION['logged_in'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = 'Jurgita';

            echo 'You have entered valid user name and password';
        } else {
            $msg = 'Wrong username or password';
        }
    }

    if (isset($_SESSION['logout_msg'])) {
        print($_SESSION['logout_msg']);
        unset($_SESSION['logout_msg']);
    }
    ?>
    <?php
    if ($_SESSION['logged_in'] == true) {
        print('<h1>You can only see this if you are logged in!</h1>');
    }

    ?>
    <form action="" method="post">
        <h4><?php echo $msg; ?></h4>
        <input type="text" name="username" placeholder="username = Jurgita" required autofocus></br>
        <input type="password" name="password" placeholder="password = 1234" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
    </form>
    <br>
    Click here to <a href="index.php?action=logout"> logout.
</body>

</html>