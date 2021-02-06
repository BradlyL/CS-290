function password_input() {
    var submit_value;  // Kept trying to run this variable outside of function and I realized why that didn't make sense..
    var text;
    var password_1 = "password";

    submit_value = document.getElementById("code").value;
   
    if (submit_value == password_1) {
        text = "Correct.";
        window.location.href = './Subpages/Subpage_1.html';
    } else {
        text = "Incorrect.";
    }

    document.getElementById("password_reveal").innerHTML = text;
}

function repeat_func() {
    var submit_value;
    var text = "Secret code! <br>";

    submit_value = document.getElementById("num_repeat").value;

    document.getElementById("code").innerHTML = text.repeat(submit_value);
}

function password_hint() {
    var codes = ["Common password.", "8 letters.", "Two 4 letter words together all lower case."];
    var submit_value;
    submit_value = document.getElementById("hints").value;
    submit_value -= 1;

    document.getElementById("pass_hint").innerHTML = codes[submit_value];
}