$(function() {
    function homeHeader() {
        $("#home-header").html("");
        $.get("/admin/home/header", function(e) {
            console.log(e);
            e.forEach(function(e) {
                $("#home-header").append(
                    `<tr data-key=${e.id} class="comment-data">
                    <td>${e.name}</td>
                    <td>${e.updated_at.slice(0, -9)}</td>
                    </tr>`
                );
            });
        });
        $("#home-header-loader").hide();
        $("#home-header-table").removeClass("d-none");
    }
    homeHeader();
    $("#add_home_header").click(function() {
        $("#home-header-title").val("");
        $("#home-header-save a").attr("data-key", 0);
        $("#home-header-view,#home-header-delete").hide();
        $("#home-header-modal").modal("show");
    });

    $("#home-header").on("click", ".comment-data", function() {
        $("#home-header-view,#home-header-delete").show();
        $("#home-header-modal").modal("show");
        var id = $(this).attr("data-key");
        $("#home-header-save a,#home-header-delete a").attr("data-key", id);
        $.get("/admin/home/header/" + id, function(e) {
            $("#home-header-title").val(e.name);
            var hostname = $(location).attr("host");
            var image = e.src;
            var d = image.substr(6);
            $("#home-header-view a").attr(
                "href",
                `http://${hostname}/storage/${d}`
            );
            console.log(e);
        });
    });
    $("#home-header-delete a").click(function() {
        var id = $(this).attr("data-key");
        $.get("/admin/home/header/delete/" + id, function(e) {
            console.log(e);
            $("#home-header-modal").modal("hide");
            homeHeader();
        });
    });
    $("#home-header-save a").on("click", function() {
        var file_data = $("#homeHeaderFile").prop("files")[0];
        var form_data = new FormData();
        var token = $('meta[name="csrf-token"]').attr("content");
        var id = $(this).attr("data-key");
        var name = $("#home-header-title").val();
        form_data.append("file", file_data);
        form_data.append("name", name);
        form_data.append("_token", token);
        form_data.append("id", id);
        $.ajax({
            url: "/admin/home/header",
            dataType: "text",
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: "post",
            success: function() {
                $("#home-header-modal").modal("hide");
                homeHeader();
            }
        });
    });
});
