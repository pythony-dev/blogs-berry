
$(document).ready(function() {
    $('#signupForm').submit(function(event) {
        event.preventDefault();

        $.post('/BlogsBerry/', {
            'Request' : 'Users',
            'Action' : 'Signup',
            'Status' : $('#signupStatus').val(),
            'Language' : $('#language').val(),
            'Email' : $('#signupEmail').val(),
            'Username' : $('#signupUsername').val(),
        }).done(function(response) {
            alert(Translate.signup($('#language').val(), response.includes('true') ? 'signupSuccess' : 'signupError'));
        }).fail(function() {
            alert(Translate.signup($('#language').val(), 'signupError'));
        });
    });

    $('#signupEmail').change(function() {
        $.post('/BlogsBerry/', {
            'Request' : 'Users',
            'Action' : 'Email',
            'Email' : $('#signupEmail').val(),
        }).done(function(response) {
            if(response.includes('1')) $('#signupEmail').addClass('is-valid').removeClass('is-invalid');
            else $('#signupEmail').addClass('is-invalid').removeClass('is-valid');
        });
    });

    $('#signupUsername').change(function() {
        $.post('/BlogsBerry/', {
            'Request' : 'Users',
            'Action' : 'Username',
            'Username' : $('#signupUsername').val(),
        }).done(function(response) {
            if(response.includes('1')) $('#signupUsername').addClass('is-valid').removeClass('is-invalid');
            else $('#signupUsername').addClass('is-invalid').removeClass('is-valid');
        });
    });
});
