$(function() {
    $("#contact_phone_number,#contact_email,#contact_location,#contact_location_mn").change(
        function() {
            $("#contact_submit").prop("disabled", false);
        }
    );
});
