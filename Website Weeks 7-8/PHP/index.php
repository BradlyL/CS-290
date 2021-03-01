<?php
session_start();
?>
<!DOCTYPE html>

<!-- HTML lang attribute -->

<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/myStyles.css">
    
    <script src="scripts/script_1.js"></script>
    
    <title>Super Secret Login Page</title>

</head>
<!-- Created a page that requires a password to enter with hints. Password is password. -->
<body>
    <p>Secret password required:</p>
    <input id ="code">

    <button type="button" onclick="password_input()">Submit</button>

    <p id="password_reveal"></p>

    <p>Enter 1, 2, or 3 for different password hints:</p>

    <input id="hints">

    <button type="button" onclick="password_hint()">Submit</button>

    <p id ="pass_hint"></p>

    <a href="Subpages/Subpage_2.php">Secret page</a>

<br>
<br>

<?php
    $_SESSION['username'] = "bradly";
    echo $_SESSION['username']
?>

</body>

</html>
