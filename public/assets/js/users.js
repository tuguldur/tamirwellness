$(function() {
    function getUsers() {
        $.get("/admin/user/get", function(e) {
            console.log(e);
            $("#users").html("");
            e.forEach(function(item) {
                $("#users").append(
                    `<tr data-key=${item.id} class="user-data">
                    <td>${item.name}</td>
                    <td>commenter, inbox</td>
                    <td>${item.created_at.slice(0, -9)}</td>
                    </tr>`
                );
            });
        });
    }
    getUsers();
});
