<!DOCTYPE html>

<!-- HTML lang attribute -->

<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/myStyles.css">
    
    <script src="../scripts/script_1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    //$(document).ready, lets the page load before it begins to load jquery info. Also, $("button").click, lets the button know to run the two included functions.
    $(document).ready(function(){
        $("button").click(function(){
            $("#div1").fadeIn();  //Can specify in fadeIn() parantheses to define how long it takes to fade in.
            $("#div1").animate({left: '1000px'}); //Moves div element until the left property gets to 1000px. https://www.w3schools.com/jquery/jquery_animate.asp
        });
    });

    </script>

    <title>Super Secret Jqeury Page</title>

</head> 

<body>
    <a href="../index.php">Home</a>

    <br>
    <!-- Using Jqeury I created a small box that fades in and moves it to the right 1000px -->
    <button>Secret Boxes (slide and fade)</button>

    <div id ="div1" style="width:50px;height:50px;display: none;background-color:red"></div>

</body>

</html>