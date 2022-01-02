<?php
session_start([
    'cookie_lifetime' => 300 // 5 minutes
]);
$error = false;
// session_destroy();

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$fp = fopen("./data/users.txt", "r");
if ($username && $password) {
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    while ($data = fgetcsv($fp)) {
        if ($data[0] == $username && $data[1] == md5($password)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $username;
            header('location:index.php');
        }
    }
    if(!$_SESSION['loggedin']){
        $error = true;
    }
}

if (isset($_GET['logout'])) {
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    session_destroy();
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple User Authentication</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Simple Auth Example</h2>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php
                echo md5("rabbit") . "<br>";
                if (true == $_SESSION['loggedin']) {
                    echo "Hello Admin, Welcome";
                } else {
                    echo "Hello Stranger, Login Below";
                }
                ?>

            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php
                if ($error) {
                    echo "<blockquote>Username and Password didn't match!!</blockquote>";
                }
                if (false == $_SESSION['loggedin']) :
                ?>
                    <form method="POST">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                        <button type="submit" class="button-primary">Log In</button>
                    </form>
                <?php
                else :
                ?>
                    <form action="auth.php" method="POST">
                        <input type="hidden" name="logout" value="1">
                        <button type="submit" class="button-primary">Log Out</button>
                    </form>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</body>

</html>