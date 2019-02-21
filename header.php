<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!--<link rel="stylesheet" type="text/css" href="stylelogin.css">-->
    <link href="./css/styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <header>
        <nav class="log-wrapper flex center grid10">
                <ul class="flex column center">
                    <li class="abs">
                        <a href="index.php">Back</a>
                    </li>
                </ul>
                <div class="nav-login flex">
                <h1> Morreale Interface </h1>
                    <?php
                        if(isset($_SESSION['u_id'])){
                            echo '<form action="includes/logout.inc.php" method="POST">
                                    <button type="submit" name="submit">Logout</button>
                                </form>';
                        } else {
                            echo'<form action="includes/login.inc.php" method="POST">
                                    <input type="text" name="uid" placeholder="Username">
                                    <input type="password" name="pwd" placeholder="Password">
                                    <button type="submit" name="submit">Login</button>
                                </form>';
                        }
                    ?>             
                </div>
        </nav>
    </header>