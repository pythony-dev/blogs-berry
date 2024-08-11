
$(document).ready(function() {
    $('.blogsDelete').click(function() {
        const blog = $(this);

        $.post('/BlogsBerry/', {
            'Request' : 'Bookmarks',
            'Action' : 'Delete',
            'BlogID' : blog.attr('id'),
        }).done(function(response) {
            if(response.includes('true')) {
                if($('#blogsList').children().length > 1) blog.parent().parent().remove();
                else {
                    $('#blogsTable').remove();
                    $('#blogsContent').text(Translate.reader($('#language').val(), 'blogsEmpty'));
                }
            } else alert(Translate.reader($('#language').val(), 'blogsError'));
        }).fail(function() {
            alert(Translate.reader($('#language').val(), 'blogsError'));
        });
    });

    $('.articlesDelete').click(function() {
        const article = $(this);

        $.post('/BlogsBerry/', {
            'Request' : 'Bookmarks',
            'Action' : 'Delete',
            'ArticleID' : article.attr('id'),
        }).done(function(response) {
            if(response.includes('true')) {
                if($('#articlesList').children().length > 1) article.parent().parent().remove();
                else {
                    $('#articlesTable').remove();
                    $('#articlesContent').text(Translate.reader($('#language').val(), 'articlesEmpty'));
                }
            } else alert(Translate.reader($('#language').val(), 'articlesError'));
        }).fail(function() {
            alert(Translate.reader($('#language').val(), 'articlesError'));
        });
    });

    $('#settingsForm').submit(function(event) {
        event.preventDefault();

        $.post('/BlogsBerry/', {
            'Request' : 'Users',
            'Action' : 'Update',
            'Password' : $('#settingsPassword').val(),
            'Language' : $('#settingsLanguage').val(),
            'Email' : $('#settingsEmail').val(),
            'Username' : $('#settingsUsername').val(),
            'Frequency' : $('#settingsFrequency').val(),
        }).done(function(response) {
            if(response.includes('true')) window.location.reload();
            else alert(Translate.reader($('#language').val(), 'settingsError'));
        }).fail(function() {
            alert(Translate.reader($('#language').val(), 'settingsError'));
        });
    });

    $('#settingsEmail').change(function() {
        $.post('/BlogsBerry/', {
            'Request' : 'Users',
            'Action' : 'Email',
            'Email' : $('#settingsEmail').val(),
        }).done(function(response) {
            if(response.includes('1')) $('#settingsEmail').addClass('is-valid').removeClass('is-invalid');
            else $('#settingsEmail').addClass('is-invalid').removeClass('is-valid');
        });
    });

    $('#settingsUsername').change(function() {
        $.post('/BlogsBerry/', {
            'Request' : 'Users',
            'Action' : 'Username',
            'Username' : $('#settingsUsername').val(),
        }).done(function(response) {
            if(response.includes('1')) $('#settingsUsername').addClass('is-valid').removeClass('is-invalid');
            else $('#settingsUsername').addClass('is-invalid').removeClass('is-valid');
        });
    });
});
