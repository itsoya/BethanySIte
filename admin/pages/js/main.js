$(document).ready(function() {
    //Check box function to display/hide table columns
    $(function() {
        $('.country,.project,.address1, .address2, .address3, .address4').hide();
        var $chk = $(".checkboxes input:checkbox");
        var $tbl = $(".donateTable");
        $chk.click(function() {
            var colToHide = $tbl.find("." + $(this).attr("name"));
            $(colToHide).toggle();
        });
    });
    //Function to show rest of form is Country selected is America
    $(function() {
        $('#addressForm').hide();
        $('#countrySelect').change(function() {
            if ($('#countrySelect').val() !== 'N/A') {
                $('#addressForm').fadeIn("fast");
            } else {
                $('#addressForm').fadeOut("fast");
            }
        });
    });


    //Function to pull database information and display in donations table
    $.ajax({
        type: 'POST',
        dataType: "json",
        url: '../../Minh/Donation/get_donation.php',
        success: function(result) {
            var table = $('.tableData');
            var insertData = "";
            for (var i = 0; i < result.length; i++) {
                insertData += "<tr>";
                insertData += "<td class='fName'>" + result[i].first_name + "</td>";
                insertData += "<td class='lname'>" + result[i].last_name + "</td>";
                insertData += "<td class='email'>" + result[i].email + "</td>";
                insertData += "<td class='amount'>" + result[i].amount + "</td>";
                insertData += "<td class='type'>" + result[i].payment_type + "</td>";
                insertData += "<td class='date'>" + result[i].date_received + "</td>";
                insertData += "<td class='project' style='display: none;'>" + result[i].related_project + "</td>";
                insertData += "<td class='country' style='display: none;'>" + result[i].country + "</td>";
                insertData += "<td class='address1' style='display: none;'>" + result[i].address1 + "</td>";
                insertData += "<td class='address2' style='display: none;'>" + result[i].address2 + "</td>";
                insertData += "<td class='address3' style='display: none;'>" + result[i].address3 + "</td>";
                insertData += "<td class='address4' style='display: none;'>" + result[i].address4 + "</td>";
                insertData += "</tr>";
            }
            table.append(insertData);
        }
    });
    //To display the data from the database to the visitor page table
    $.ajax({
        type: 'POST',
        dataType: "json",
        url: "http://bethanynegashfoundation.org/Minh/get_facility_visitors.php",
        success: function(result) {
            var table = $('.tableDataVisit');
            var insertData = "";
            for (var i = 0; i < result.length; i++) {
                insertData += "<tr>";
                insertData += "<td class='visits'>" + result[i].total_visitor + "</td>";
                insertData += "<td class='dayDate'>" + result[i].day + "</td>";
                insertData += "<td class='monthDate'>" + result[i].month + "</td>";
                insertData += "<td class='yearDate'>" + result[i].year + "</td>";
                insertData += "</tr>";
            }
            table.append(insertData);
        }
    });
    //Works with the calander to display the correct format
  $(function() {
    $( "#datepicker" ).datepicker();
    $( "#format" ).hide(function() {
      $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
    });
  });

});
//Document ready end