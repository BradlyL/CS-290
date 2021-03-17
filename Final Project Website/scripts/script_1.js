function password_fail() {
    window.location.href = 'index_false.php';
    console.log("Password_failure function is working.");
}

function simple_add() {
    x = +document.getElementById("x").value;
    y = +document.getElementById("y").value;
    document.getElementById("password_reveal").innerHTML = "Total: " + (x + y);
    console.log("Addition function, functioning.");
}