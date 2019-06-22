$(function() {
    function getComment() {
        $.get("/admin/comment/english/get", function(data) {
            console.log(data);
            $("#comment-table").html("");
            data.forEach(function(item) {
                $("#comment-table").append(
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
    $("#comment-table").on("click", ".comment-data", function() {
        var id = $(this).attr("data-key");
        $(".comment-delete").show();
        $(".comment-edit").show();
        // ADD ID
        $(".comment-delete a").attr("data-key", id);
        $(".comment-form,.comment-save").hide();
        // ADD ID
        $(".comment-edit a").attr("data-key", id);
        $(".comment-delete").show();
        $("#comment-modal").modal("show");
        $.get("/admin/comment/english/" + id, function(data) {
            $(".comment-title").html(data.name);
            $("#comment-text").html(data.comment);
        });
    });
    $("#add_comment").click(function() {
        $("#comment-name,#comment-value").val("");
        $(".comment-title,#comment-text,.comment-edit,.comment-delete").hide();
        $(".comment-form,.comment-save,#comment-form").show();
        $("#comment-modal").modal("show");
    });
    $("#comment-modal").on("hidden.bs.modal", function() {
        $(".comment-title,#comment-text").show();
        $(".comment-edited").addClass("d-none");
        // $(".comment-table").html("");
        // getComment();
    });
    $(".comment-save a").click(function() {
        var name = $("#comment-name").val();
        var comment = $("#comment-value").val();
        var token = $('meta[name="csrf-token"]').attr("content");
        $.post("/admin/comment/english/", {
            name: name,
            comment: comment,
            _token: token
        }).done(function() {
            $("#comment-modal").modal("hide");
            $("#comment-name,#comment-value").val("");
            getComment();
        });
    });
    $(".comment-delete a").click(function() {
        var id = $(this).attr("data-key");
        $.get("/admin/comment/english/delete/" + id, function(data) {
            console.log(data);
            $("#comment-modal").modal("hide");
            getComment();
        });
    });
    $(".comment-edit a").click(function() {
        var id = $(this).attr("data-key");
        $(".comment-form").show();
        $(
            "#comment-text,.comment-title,.comment-save,.comment-edit,.comment-delete"
        ).hide();
        $(".comment-edited").removeClass("d-none");
        $(".comment-edited a").attr("data-key", id);
        var title = $(".comment-title").text();
        var text = $("#comment-text").text();
        $("#comment-name").val(title);
        $("#comment-value").val(text);
        console.log(title, text);
    });
    $(".comment-edited a").click(function() {
        var id = $(this).attr("data-key");
        var name = $("#comment-name").val();
        var comment = $("#comment-value").val();
        var token = $('meta[name="csrf-token"]').attr("content");
        $.post("/admin/comment/english/update", {
            id: id,
            name: name,
            comment: comment,
            _token: token
        }).done(function() {
            $("#comment-modal").modal("hide");
            $("#comment-name,#comment-value").val("");
            getComment();
        });
    });
});
