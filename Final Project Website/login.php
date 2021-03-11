<!DOCTYPE html>

<!-- HTML lang attribute -->

<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/myStyles.css">

    <script src="scripts/script_1.js"></script>
    
    <title>Welcome</title>

</head>

<body>

<?php
include "db.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

#Grabs input from Username and Password input forms.
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    #Conditional check if username form empty
    if (empty($username)) {
        header("Location: index.php?error=No User");
        exit();

    #Conditional check if password form empty    
    } else if (empty($password)) {
        header("Location: index.php?error=No Pass");
        exit();

    #If makes past conditonals, checks to see if username and password match database records.
    } else {
        $sql = "SELECT * FROM users WHERE Usernames='$username' AND Passwords= '$password'";
        $result = mysqli_query($conn, $sql);
        
        #If finds matching value execute code.
        if (mysqli_num_rows($result) === 1) {
            $fetch = mysqli_fetch_assoc($result);

            if ($fetch['Usernames'] == $username && $fetch['Passwords'] == $password) {


                //Had to hop out of PHP into html to get into javascript to run this function.
                //Sure there is an easier way to display this, but this made immediate sense to me.


                ?> <div class="center">Logged in.
                    <form action="index.php">
                    <input type="submit" value="Log out" />
                    </form>
                </div>

                <?php
            } 
        } else {
            ?>
                <script>
                password_fail();
                </script>
            <?php
        }
    }

} 

#Stops you from accessing login.php by url. Must input correct user/pass.
else {
    header("Location: index.php?error");
    exit();
}
?>
</body>

</html>