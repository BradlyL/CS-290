<!DOCTYPE html>

<!-- HTML lang attribute -->

<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/myStyles.css">

    <script src="../scripts/script_1.js"></script>

    <title>Super Secret Code Page</title>

</head> 

<body>
    <a href="../index.php">Home</a>

    <br>
    <!-- Not sure if this was the "repitition" you were thinking of -->
    <p>Entered correct password, enter number of times you'd like to repeat super secret code...</p>

    <input id ="num_repeat">

    <button type="button" onclick="repeat_func()">Submit</button>

    <p id="code"></p>

</body>

</html>
