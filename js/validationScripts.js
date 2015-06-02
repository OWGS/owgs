/**
 * Created by eeglit on 12.05.2015.
 */



function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function checkPass() {
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var message = document.getElementById('confirmMessage');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if (pass1.value == pass2.value && !pass1.value == "") {
        message.style.color = goodColor;
        message.innerHTML = "Passwörter stimmen überein!"
        document.getElementById("submit").disabled = false;


    } else if (pass1.value == "") {
        message.style.color = badColor;
        message.innerHTML = "Bitte geben Sie ein Passwort ein!"
        document.getElementById("submit").disabled = true;

    } else {
        message.style.color = badColor;
        message.innerHTML = "Passwörter stimmen nicht überein!"
        document.getElementById("submit").disabled = true;

    }
    if (pass1.value.length < 8) {
        message.style.color = badColor;
        message.innerHTML = "Mindestens 8 Zeichen benötigt!"
        document.getElementById("submit").disabled = true;
    }

}
function onlyText(e) {
    var code;
    if (!e) var e = window.event;
    if (e.keyCode) code = e.keyCode;
    else if (e.which) code = e.which;
    var character = String.fromCharCode(code);
    var AllowRegex = /^[\ba-zA-Z\s-]$/;
    if (AllowRegex.test(character)) return true;
    return false;
}



