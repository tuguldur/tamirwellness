$(function() {
    console.log("Comment header being loaded");
    function getCommentHeader() {
        $("#comment-header").html("");
        $.get("/admin/comment/header", function(data) {
            console.log(data);
            data.forEach(function(item) {
                $("#comment-header").append(
                    `<tr data-key=${item.id} class="comment-data">
                    <td>${item.name}</td>
                    <td>${item.updated_at.slice(0, -9)}</td>
                    </tr>`
                );
            });
        });
    }
    getCommentHeader();
    $("#comment-header").on("click", ".comment-data", function() {
        $("#comment-header-view,.comment-header-delete").show();
        $("#comment-header-modal").modal("show");
        var id = $(this).attr("data-key");
        $("#comment-header-save a,.comment-header-delete a").attr(
            "data-key",
            id
        );
        $.get("/admin/comment/header/" + id, function(e) {
            $("#comment-header-title").val(e.name);

            var image = e.src;

            $("#comment-header-view a").attr("href", `${image}`);
            console.log(e);
        });
    });
    $("#add_comment_header").click(function() {
        $("#comment-header-title").val("");
        $("#comment-header-save a").attr("data-key", 0);
        $("#comment-header-view,.comment-header-delete").hide();
        $("#comment-header-modal").modal("show");
    });
    $("#comment-header-modal").on("shown.bs.modal", function() {
        $("#comment-header-save a").removeClass("disabled");
    });
    $("#comment-header-save a").on("click", function() {
        var file_data = $("#headerFile").prop("files")[0];
        var form_data = new FormData();
        var token = $('meta[name="csrf-token"]').attr("content");
        var id = $(this).attr("data-key");
        var name = $("#comment-header-title").val();
        form_data.append("file", file_data);
        form_data.append("name", name);
        form_data.append("_token", token);
        form_data.append("id", id);
        if ($(this).hasClass("disabled")) {
            console.log("SPAMMING");
        } else {
            $.ajax({
                url: "/admin/comment/header",
                dataType: "text",
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: "post",
                success: function(e) {
                    $("#comment-header-modal").modal("hide");
                    getCommentHeader();
                    console.log(e);
                }
            });
        }
        $(this).addClass("disabled");
    });
    $(".comment-header-delete a").click(function() {
        var id = $(this).attr("data-key");
        $.get("/admin/comment/header/delete/" + id, function(e) {
            $("#comment-header-modal").modal("hide");
            getCommentHeader();
        });
    });
});
