$(function() {
    $("#service-file,#service-file-mn").on("change", function(e) {
        //get the file name
        //var fileName = $(this).val();
        var fileName = e.target.files[0].name;
        //replace the "Choose a file" label
        $(this)
            .next(".custom-file-label")
            .html(fileName);
    });
    $("#service-reset").click(function() {
        $("#english .custom-file-label").html("Choose file");
        $("#english .fr-element.fr-view").html("");
        $("#english #id").val("0");
        $("#english #service-file").val("");
        $("#service-submit").attr("disabled", true);
        console.log("Reseting...");
    });
    $("#service-reset-mn").click(function() {
        $("#mongolia .custom-file-label").html("Choose file");
        $("#mongolia .fr-element.fr-view").html("");
        $("#mongolia #id").val("0");
        $("#mongolia #service-file").val("");
        $("#service-submit-mn").attr("disabled", true);
        console.log("Reseting...");
    });
    $("#service-file").on("change", function() {
        if (document.getElementById("service-file").files.length == 0) {
            $("#service-submit").attr("disabled", true);
        } else {
            $("#service-submit").attr("disabled", false);
        }
    });
    $("#service-file-mn").on("change", function() {
        if (document.getElementById("service-file-mn").files.length == 0) {
            $("#service-submit-mn").attr("disabled", true);
        } else {
            $("#service-submit-mn").attr("disabled", false);
        }
    });
    // EDIT AND GET
    function getServiceEnglish() {
        console.log("Getting English services...");
        $.get("/admin/service/english/get", function(e) {
            e.forEach(function(item) {
                $("#english-table").append(
                    `<tr data-key=${item.id} class="english-data">
                    <td>${item.title}</td>
                    <td>${item.desc}</td>
                    <td>${item.updated_at}</td>
                    <td><a href="/admin/service/english/delete/${
                        item.id
                    }" class="text-danger delete-service">Delete</a></td>
                    </tr>`
                );
            });
            $(".english-table-loading").hide();
            $("#table-en").show();
        });
    }
    function getServiceMongolia() {
        console.log("Getting Mongolian services...");
        $.get("/admin/service/mongolia/get", function(e) {
            e.forEach(function(item) {
                $("#mongolia-table").append(
                    `<tr data-key=${item.id} class="mongolian-data">
                    <td>${item.title}</td>
                    <td>${item.desc}</td>
                    <td>${item.updated_at}</td>
                    <td><a href="/admin/service/mongolia/delete/${
                        item.id
                    }" class="text-danger delete-service">Delete</a></td>
                    </tr>`
                );
            });
            $(".mongolian-table-loading").hide();
            $("#table-mn").show();
        });
    }
    getServiceEnglish();
    getServiceMongolia();
    $(".card-overlay").hide();
    $("#mongolia-table").on("click", ".mongolian-data", function() {
        $(".card-overlay").show();
        var id = $(this).attr("data-key");
        $("#mongolia .fr-placeholder").hide();
        $.get("/admin/service/mongolia/" + id, function(e) {
            $("#mongolia #title").val(e.title);
            $("#mongolia #image_description_mn").val(e.desc);
            $("#mongolia #id").val(e.id);
            $("#mongolia .custom-file-label").text(e.src);
            $("#mongolia .fr-element.fr-view").html(e.data);
            $(".card-overlay").hide();
            $("#service-submit-mn").attr("disabled", false);
        });
    });
    $("#english-table").on("click", ".english-data", function() {
        $(".card-overlay").show();
        var id = $(this).attr("data-key");
        $("#english .fr-placeholder").hide();
        $.get("/admin/service/english/" + id, function(e) {
            $("#english #title").val(e.title);
            $("#english #image_description").val(e.desc);
            $("#english #id").val(e.id);
            $("#english .custom-file-label").text(e.src);
            $("#english .fr-element.fr-view").html(e.data);
            $(".card-overlay").hide();
            $("#service-submit").attr("disabled", false);
        });
    });
    $("#english form,#mongolia form").submit(function() {
        $(".card-overlay").show();
    });
});
