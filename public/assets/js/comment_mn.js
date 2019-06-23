$(function() {
    function getComment() {
        $.get("/admin/comment/mongolia/get", function(data) {
            console.log(data);
            $("#comment-table-mn").html("");
            data.forEach(function(item) {
                $("#comment-table-mn").append(
                    `<tr data-key=${item.id} class="comment-data">
                    <td>${item.name}</td>
                    <td>${item.comment}</td>
                    </tr>`
                );
            });
        });
    }
    function getMongolianComment() {}
    getComment();
    console.log("Comment being loaded");
    $("#comment-table-mn").on("click", ".comment-data", function() {
        var id = $(this).attr("data-key");
        $(".comment-delete-mn").show();
        $(".comment-edit-mn").show();
        // ADD ID
        $(".comment-delete-mn a").attr("data-key", id);
        $(".comment-form-mn,.comment-save-mn").hide();
        // ADD ID
        $(".comment-edit-mn a").attr("data-key", id);
        $(".comment-delete-mn").show();
        $("#comment-modal-mn").modal("show");
        $.get("/admin/comment/mongolia/" + id, function(data) {
            $(".comment-title-mn").html(data.name);
            $("#comment-text-mn").html(data.comment);
        });
    });
    $("#add_comment_mn").click(function() {
        $("#comment-name-mn,#comment-value-mn").val("");
        $(
            ".comment-title-mn,#comment-text-mn,.comment-edit-mn,.comment-delete-mn"
        ).hide();
        $(".comment-form-mn,.comment-save-mn,#comment-form-mn").show();
        $("#comment-modal-mn").modal("show");
    });
    $("#comment-modal-mn").on("hidden.bs.modal", function() {
        $(".comment-title-mn,#comment-text-mn").show();
        $(".comment-edited-mn").addClass("d-none");
        // $(".comment-table").html("");
        // getComment();
    });
    $(".comment-save-mn a").click(function() {
        var name = $("#comment-name-mn").val();
        var comment = $("#comment-value-mn").val();
        var token = $('meta[name="csrf-token"]').attr("content");
        $.post("/admin/comment/mongolia/", {
            name: name,
            comment: comment,
            _token: token
        }).done(function() {
            $("#comment-modal-mn").modal("hide");
            $("#comment-name-mn,#comment-value-mn").val("");
            getComment();
        });
    });
    $(".comment-delete-mn a").click(function() {
        var id = $(this).attr("data-key");
        $.get("/admin/comment/mongolia/delete/" + id, function(data) {
            console.log(data);
            $("#comment-modal-mn").modal("hide");
            getComment();
        });
    });
    $(".comment-edit-mn a").click(function() {
        var id = $(this).attr("data-key");
        $(".comment-form-mn").show();
        $(
            "#comment-text-mn,.comment-title-mn,.comment-save-mn,.comment-edit-mn,.comment-delete-mn"
        ).hide();
        $(".comment-edited-mn").removeClass("d-none");
        $(".comment-edited-mn a").attr("data-key", id);
        var title = $(".comment-title-mn").text();
        var text = $("#comment-text-mn").text();
        $("#comment-name-mn").val(title);
        $("#comment-value-mn").val(text);
        console.log(title, text);
    });
    $(".comment-edited-mn a").click(function() {
        var id = $(this).attr("data-key");
        var name = $("#comment-name-mn").val();
        var comment = $("#comment-value-mn").val();
        var token = $('meta[name="csrf-token"]').attr("content");
        $.post("/admin/comment/mongolia/update", {
            id: id,
            name: name,
            comment: comment,
            _token: token
        }).done(function() {
            $("#comment-modal-mn").modal("hide");
            $("#comment-name-mn,#comment-value-mn").val("");
            getComment();
        });
    });
});
