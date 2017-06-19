<!-- optional, prevents the submit button from being pressed more than once -->
var submitButton = document.getElementById("submit_form");
var form = document.getElementById("email_form");
form.addEventListener("submit", function (e) {
    setTimeout(function () {
        submitButton.value = "Sending...";
        submitButton.disabled = true;
    }, 1);
});