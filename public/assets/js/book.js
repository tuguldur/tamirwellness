$(function() {
    console.log("Message being loaded");
    function getMessage() {
        console.log("Getting message");
        $("#table-new ,#table-read, #table-archived").html("");
        $(".table-loading").removeClass("d-none");
        $(".table-responsive").addClass("d-none");
        $.get("/admin/book/get", function(data) {
            console.log(data);
            data.forEach(function(item) {
                switch (item.status) {
                    case "new":
                        {
                            $("#table-new").append(
                                `<tr data-key=${
                                    item.id
                                } class="table-book"><td>${item.name}</td><td>${
                                    item.email
                                }</td><td>${item.phone_number}</td><td>${
                                    item.message
                                }</td><td>${item.created_at.slice(
                                    0,
                                    -9
                                )}</td></tr>`
                            );
                        }
                        break;
                    case "read": {
                        $("#table-read").append(
                            `<tr data-key=${item.id} class="table-book"><td>${
                                item.name
                            }</td><td>${item.email}</td><td>${
                                item.phone_number
                            }</td><td>${
                                item.message
                            }</td><td>${item.created_at.slice(0, -9)}</td></tr>`
                        );
                        break;
                    }
                    case "archive": {
                        $("#table-archived").append(
                            `<tr data-key=${item.id} class="table-book"><td>${
                                item.name
                            }</td><td>${item.email}</td><td>${
                                item.phone_number
                            }</td><td>${
                                item.message
                            }</td><td>${item.created_at.slice(0, -9)}</td></tr>`
                        );
                        break;
                    }
                }
            });
            $(".table-loading").addClass("d-none");
            $(".table-responsive").removeClass("d-none");
        });
    }
    getMessage();
    $(".inbox-table").on("click", ".table-book", function() {
        $(".inbox-ready").addClass("d-none");
        $(".inbox-load").removeClass("d-none");
        var id = $(this).attr("data-key");
        $("#inbox-modal").modal("show");
        $.get("/admin/book/" + id, function(data) {
            var s = new Date(data.start_date).toDateString();
            var e = new Date(data.end_date).toDateString();
            var end_date = e.substr(e.indexOf(" ") + 1);
            var start_date = s.substr(s.indexOf(" ") + 1);
            var date = data.created_at;
            console.log(data);
            $("#inbox-name").html(
                `${data.name}<span id='inbox-email'> &nbsp;&lt;${
                    data.email
                }&gt;</span>`
            );
            if (data.status == "archive") {
                $("#inbox-toolbar").hide();
                console.log("IS THIS WORKING?");
            }
            $(".inbox-date").html(`${start_date} - ${end_date}`);
            $("#inbox-date span").html(date);
            $("#inbox-message div span").text(data.message);
            $(".inbox-archive").attr("data-key", id);
            $(".inbox-ready").removeClass("d-none");
            $(".inbox-load").addClass("d-none");
        });
    });

    $('[data-toggle="tooltip"]').tooltip();
    // ARCHIVE BUTTON FUNCTION
    $(".inbox-archive").click(function() {
        var id = $(this).attr("data-key");
        var token = $('meta[name="csrf-token"]').attr("content");
        console.log(token);
        $.ajax(
            {
                type: "POST",
                url: "/admin/book/update",
                data: { type: "read", id: id, _token: token }
            },
            function(data) {
                console.log(data);
            }
        );
    });
    $("#inbox-modal").on("hidden.bs.modal", function() {
        $("#inbox-toolbar").show();
        getMessage();
    });
});
