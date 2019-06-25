$(function() {
    $("#add_user").click(function() {
        $("#users").modal("show");
        $("#user-loader").addClass("d-none");
        $("#user-main").removeClass("d-none");
        $("#delete-user").hide();
    });
    $("#users").on("shown.bs.modal", function() {
        $("#save-user").prop("disabled", false);
    });
    $("#password_next").keyup(function() {
        var e = $("#password").val();
        var new_password = e.trim();
        var p = $(this).val();
        var password = p.trim();
        if (password != new_password) {
            $("#add_password_next").html("Password should match");
        } else {
            $("#add_password_next").html("");
        }
    });
    $("#email").blur(function() {
        var e = $(this).val();
        var email = e.trim();
        var token = $('meta[name="csrf-token"]').attr("content");
        $.post("/admin/user/check/", {
            email,
            _token: token
        }).done(function(e) {
            if (e == "true") {
                $("#save-user").prop("disabled", true);
                $("#add_email").html("This user .");
            } else {
                $("#save-user").prop("disabled", false);
                $("#add_email").html("");
            }
        });
    });
    $("#user-table").on("click", ".user-data", function() {
        var id = $(this).attr("data-key");
        $("#delete-user")
            .show()
            .attr("data-key", id);
        var userKey = $("#delete-user").attr("user-key");
        if (userKey == id) {
            $("#delete-user").hide();
        }
        $("#user_id").val(id);
        $("#users").modal("show");
        $.get("/admin/user/" + id, function(data) {
            $("#username").val(data.user.name);
            $("#email").val(data.user.email);
            data.roles.forEach(e => {
                if (e.name == "comment") {
                    $("#edit_comment").prop("checked", true);
                } else if (e.name == "home") {
                    $("#edit_home").prop("checked", true);
                } else if (e.name == "admin") {
                    $("#edit_users").prop("checked", true);
                } else if (e.name == "inbox") {
                    $("#edit_inbox").prop("checked", true);
                } else if (e.name == "contact") {
                    $("#edit_contact").prop("checked", true);
                } else if (e.name == "service") {
                    $("#edit_service").prop("checked", true);
                }
            });
            $("#user-loader").addClass("d-none");
            $("#user-main").removeClass("d-none");
        });
    });
    $("#users").on("hidden.bs.modal", function() {
        $(
            "#edit_comment,#edit_home,#edit_users,#edit_inbox,#edit_contact,#edit_service"
        ).prop("checked", false);
        $("#username,#email,#password,#password_next").val("");
        $("#user_id").val("0");
        $("#user-loader").removeClass("d-none");
        $("#user-main").addClass("d-none");
    });
    $("#user_").submit(function(e) {
        var e = $("#password").val();
        var new_password = e.trim();
        var p = $("#password_next").val();
        var password = p.trim();
        $("#save-user").prop("disabled", true);
        if ($(".roles:checkbox:checked").length == 0) {
            $("#roles_check").html("Please select at least one Role");
            $("#save-user").prop("disabled", false);
            return false;
        } else if (
            new_password == password &&
            $(".roles:checkbox:checked").length != 0
        ) {
            return true;
        } else {
            return false;
        }
    });
    $("#delete-user").click(function() {
        var id = $(this).attr("data-key");
        $.get("/admin/user/delete/" + id, function(e) {
            if (e == "ok") $("#users").modal("hide");
        });
    });
});
