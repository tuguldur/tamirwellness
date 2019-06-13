$(function() {
    $("#contact_phone_number,#contact_email,#contact_location").change(
        function() {
            $("#contact_submit").prop("disabled", false);
        }
    );
});
