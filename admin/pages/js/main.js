$(document).ready(function() {
    //Check box function to display/hide table columns
    $(function() {
    	$('.country, .address, .city, .zip, .state').hide();
        var $chk = $(".checkboxes input:checkbox");
        var $tbl = $(".donateTable");
        $chk.click(function() {
            var colToHide = $tbl.find("." + $(this).attr("name"));
            $(colToHide).toggle();
        });
    });
    //Function to show rest of form is Country selected is America
    $(function() {
        $('#usaForm').hide();
        $('#countrySelect').change(function() {
            if ($('#countrySelect').val() == 'United States of America') {
                $('#usaForm').fadeIn("fast");
            } else {
                $('#usaForm').fadeOut("fast");
            }
        });
    });

});
//Document ready end