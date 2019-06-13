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
        $("#comment-header-view").show();
        $("#comment-header-modal").modal("show");
        var id = $(this).attr("data-key");
        $("#comment-header-save").attr("data-key", id);
        $.get("/admin/comment/header/" + id, function(e) {
            $("#comment-header-title").val(e.name);
            var hostname = $(location).attr("host");
            var image = e.src;
            var d = image.substr(6);
            $("#comment-header-view a").attr(
                "href",
                `http://${hostname}/storage/${d}`
            );
            console.log(e);
        });
    });
    $("#add_comment_header").click(function() {
        $("#comment-header-title").val("");
        $("#comment-header-save").attr("data-key", 0);
        $("#comment-header-view").hide();
        $("#comment-header-modal").modal("show");
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
        $.ajax({
            url: "/admin/comment/header",
            dataType: "text",
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: "post",
            success: function() {
                $("#comment-header-modal").modal("hide");
                getCommentHeader();
            }
        });
    });
});
