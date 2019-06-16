$(function() {
    var message = "This cannot be empty";
    // USERNAME
    $("#username").keyup(function() {
        var data = $(this).val();
        var trimed_data = data.trim();
        if (trimed_data.length) {
            $("#help_username").html("");
        } else {
            $("#help_username").html(message);
        }
    });
    $("#email").keyup(function() {
        var data = $(this).val();
        var trimed_data = data.trim();
        if (trimed_data.length) {
            $("#help_email").html("");
        } else {
            $("#help_email").html(message);
        }
    });
    $("#old_password").keyup(function() {
        var data = $(this).val();
        var trimed_data = data.trim();
        if (trimed_data.length) {
            $("#help_old_password").html("");
        } else {
            $("#help_old_password").html(message);
        }
    });
    $("#new_password").keyup(function() {
        var data = $(this).val();
        var trimed_data = data.trim();
        if (trimed_data.length == 0) {
            $("#help_new_password").removeClass("text-muted");
            $("#help_new_password").addClass("text-danger");
            $("#help_new_password").html(message);
        } else if (trimed_data.length <= 8) {
            $("#help_new_password").removeClass("text-danger");
            $("#help_new_password").addClass("text-muted");
            $("#help_new_password").html(
                "New password must be at least eight characters long"
            );
        } else {
            $("#help_new_password").html("");
        }
    });

    $("#password").keyup(function() {
        var e = $("#new_password").val();
        var new_password = e.trim();
        var p = $(this).val();
        var password = p.trim();
        if (password != new_password) {
            $("#help_password").html("Password should match");
        } else {
            $("#help_password").html("");
        }
    });
    $("#profile-form").submit(function(e) {
        e.preventDefault();
        var username = $("#username").val();
        var email = $("#email").val();
        var old_password = $("#old_password").val();
        var new_password = $("#new_password").val();
        var password = $("#new_password").val();
        console.log(
            `username: ${username} ,email: ${email} ,old_password: ${old_password} , new_password: ${new_password} , password: ${password}`
        );
        if (
            username &&
            email &&
            old_password.length <= 8 &&
            new_password.length <= 8 &&
            password.length <= 8
        ) {
            console.log("ok");
        }
    });
});
