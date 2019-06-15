$(function() {
    console.log("home main being loaded");
    function getMain() {
        $("#home-main").html("");
        $.get("/admin/home/main", function(e) {
            console.log(e);
            e.forEach(function(e) {
                $("#home-main").append(
                    `<tr data-key=${e.id} class="main-data">
                    <td>${e.name}</td>
                    <td>${e.desc}</td>
                    <td>${e.updated_at.slice(0, -9)}</td>
                    </tr>`
                );
            });
        });
        $("#home-main-loader").hide();
        $("#home-main-table").show();
    }
    getMain();
    $("#add_main").click(function() {
        $("#home-main-save a").attr("data-key", 0);
        $("#home-main-view,#home-main-delete").hide();
        $("#home-main-desc,#home-main-title").val("");
        $("#home-main-modal").modal("show");
    });
    $("#home-main-save a").click(function() {
        var file_data = $("#homeMainFile").prop("files")[0];
        var form_data = new FormData();
        var token = $('meta[name="csrf-token"]').attr("content");
        var id = $(this).attr("data-key");
        var name = $("#home-main-title").val();
        var desc = $("#home-main-desc").val();
        form_data.append("file", file_data);
        form_data.append("name", name);
        form_data.append("desc", desc);
        form_data.append("_token", token);
        form_data.append("id", id);
        $.ajax({
            url: "/admin/home/main",
            dataType: "text",
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: "post",
            success: function(e) {
                $("#home-main-modal").modal("hide");
                getMain();
                console.log(e);
            }
        });
    });
    $("#home-main").on("click", ".main-data", function() {
        $("#home-main-view,#home-main-delete").show();
        $("#home-main-modal").modal("show");
        var id = $(this).attr("data-key");
        $("#home-main-save a,#home-main-delete a").attr("data-key", id);
        $.get("/admin/home/main/" + id, function(e) {
            $("#home-main-title").val(e.name);
            $("#home-main-desc").val(e.desc);
            var hostname = $(location).attr("host");
            var image = e.src;
            var d = image.substr(6);
            $("#home-main-view a").attr(
                "href",
                `http://${hostname}/storage/${d}`
            );
            console.log(e);
        });
    });
    $("#home-main-delete a").click(function() {
        var id = $(this).attr("data-key");
        $.get("/admin/home/main/delete/" + id, function(e) {
            if (e) {
                $("#home-main-modal").modal("hide");
                getMain();
            }
            console.log(e);
        });
    });
});
//86890130
