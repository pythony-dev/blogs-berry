
$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        event.preventDefault();

        $.post('/BlogsBerry/', {
            'Request' : 'Users',
            'Action' : 'Login',
            'Username' : $('#loginUsername').val(),
            'Password' : $('#loginPassword').val(),
        }).done(function(response) {
            if(response.includes('Reader')) window.location.replace('/BlogsBerry/Home');
            else if(response.includes('Blogger')) window.location.replace('/BlogsBerry/User');
            else alert(Translate.login($('#language').val(), 'loginError'));
        }).fail(function() {
            alert(Translate.login($('#language').val(), 'loginError'));
        });
    });

    $('#forgotForm').submit(function(event) {
        event.preventDefault();

        $.post('/BlogsBerry/', {
            'Request' : 'Users',
            'Action' : 'Forgot',
            'Email' : $('#forgotEmail').val(),
        }).done(function(response) {
            alert(Translate.login($('#language').val(), response.includes('true') ? 'forgotSuccess' : 'forgotError'));
        }).fail(function() {
            alert(Translate.login($('#language').val(), 'forgotError'));
        });
    });
});
