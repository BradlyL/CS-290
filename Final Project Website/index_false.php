<!DOCTYPE html>

<!-- HTML lang attribute -->

<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/myStyles.css">
    
    <script src="scripts/script_1.js"></script>

    <title>Login Page</title>

</head>

<body>

<div class="center">
    <form action = "login.php" method= "post">
        <p>Username</p>
        <input name = "username">
        <br>
        <br>
        <p>Password</p>
        <input name = "password">

        <button type="submit">Login</button>

        <p>Incorrect password, try again.</p>
    </form>
</div>

</body>
</html>

