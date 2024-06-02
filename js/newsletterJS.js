

$(document).on('click', '#subscribe', function(e){
    e.preventDefault();

    let newsEmail = $('#newsEmail').val();
    let subscribe = $('#subscribe').val();

    $.ajax({
        url: "classes/Users.class.php",
        type: "post",
        data: {
            newsEmail:newsEmail,
            subscribe:subscribe
        },
        success: function(data) {
            $('#result').html(data);
        }
    });

    // RESET FORM FIELD
    $('#newsForm')[0].reset();
});