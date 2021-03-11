<?php

?>
<!DOCTYPE html>

<!-- HTML lang attribute -->

<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/myStyles.css">
    
    <title>Login Page</title>

</head>

<body>

<div class="center">
    <form action = "login.php" method= "post">
        <p>Username</p>
        <input id ="username">
        <br>
        <br>
        <p>Password</p>
        <input id="password">

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>

