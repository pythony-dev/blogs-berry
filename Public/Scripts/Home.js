
let position = 1;

const loadHome = function() {
    $('#homeResults').children().last().addClass('my-5').removeClass('mt-5');
    $('#homeResults').append('<img id="loading" class="mx-auto mt-5" src="/BlogsBerry/Public/Images/Animations/Loading.gif" alt="' + Translate.home($('#language').val(), 'loading') + '"/>');

    const copy = position;
    position = 0;

    $.post('/BlogsBerry/', {
        'Request' : 'Articles',
        'Action' : 'Home',
        'Position' : copy,
    }).done(function(response) {
        $('#loading').remove();

        let found = 0;

        if(response.includes('[') && response.includes(']')) {
            JSON.parse(response).forEach(function(article) {
                $('#homeResults').append('\
                    <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 my-5">\
                        <div class="row">\
                            <p class="h2 w-100 my-4 text-center"> ' + article['Title'] + ' </p>\
                            <div class="row">\
                                <div class="col-12 col-md-6 my-auto' + (found % 2 ? ' order-md-1' : '') + '">\
                                    <p class="my-4 text-justify"> ' + article['Content'] + ' </p>\
                                    <p class="my-4 text-right"> ' + Translate.home($('#language').val(), 'by') + ' ' + article['Username'] + ' (' + Translate.home($('#language').val(), 'on') + ' ' + Translate.date($('#language').val(), article['Published'].substr(0, 10)) + ') </p>\
                                </div>\
                                <div class="col-12 col-md-6 my-auto">\
                                    <a id="' + article['ID'] + '" class="homeLink" href="' + article['Link'] + '" target="_blank">\
                                        <img class="img-fluid my-4 shadow rounded" src="/BlogsBerry/Public/Images/Articles/' + article['Image'] + '.jpeg" alt="' + article['Title'] + '"/>\
                                    </a>\
                                </div>\
                            </div>\
                            <a id="' + article['ID'] + '" class="btn btn-primary w-100 my-4 homeLink" href="' + article['Link'] + '" target="_blank"> ' + Translate.home($('#language').val(), 'read') + ' ' + article['Title'] + ' </a>\
                        </div>\
                    </article>\
                ');

                found ++;
            });

            if(found > 0) {
                clickHome();

                $('html').animate({ scrollTop : $('#homeResults').children().eq(copy * 10 + 1).offset().top });

                if(found == 10) position = copy + 1;
            }

            $('#homeResults').children().last().addClass('mt-5').removeClass('my-5');
        }
    }).fail(function() {
        $('#loading').remove();
        $('#homeResults').children().last().addClass('mt-5').removeClass('my-5');

        alert(Translate.home($('#language').val(), 'error'));
    });
};

const clickHome = function() {
    $('.homeLink').off('click');
    $('.homeLink').click(function() {
        $.post('/BlogsBerry/', {
            'Request' : 'Clicks',
            'Action' : 'Create',
            'ArticleID' : $(this).attr('id'),
        });
    });
};

$(document).ready(function() {
    $(this).scroll(function() {
        if($(this).scrollTop() >= $(this).height() - $(window).height() && position != 0) loadHome();
    });

    clickHome();
});
