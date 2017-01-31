/* Validate Regex.  Front-end scrub. */
$(document).ready(function() {
    $("#login_submit").on("submit", function(e) {
        e.preventDefault();
        var user = $("#username").val();
        var pass = $("#user_pass").val();
    });
});

function Sanitize() {
    this.username = function(user_string) {
        //*<>:"';jos-()&eph_user$?^@#!
    }
    this.user_pass = function(pass_string) {

    }
}