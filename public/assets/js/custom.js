$(document).ready(function () {
    $.datepicker.setDefaults({
        dateFormat: 'yy-mm-dd'   
    });
    $(".date_picker").datepicker();
});


$(document).on('change', '#start_date', function() {
    if ($(this).val()) {
        const start_date = $('#start_date').val();
        if (start_date) {
            getDataAnalytics();
            alert(start_date);
        }
	}
});

$(document).on('change', '#end_date', function() {
    if ($(this).val()) {
        const end_date = $('#end_date').val();
        if (end_date) {
            getDataAnalytics();
            alert(end_date);   
        }
	}
});


function getDataAnalytics() { 
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: 'get_data',
        data: {
            start_date: $('#start_date').val(),
            end_date: $('#end_date').val(),
        },
        success: function (response) { 
            $('#piechart').html(response);
        }
        
    });
}