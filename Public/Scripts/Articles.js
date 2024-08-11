
let position = 0;

const loadArticles = function() {
    $('#articlesResults').children().last().addClass('my-5').removeClass('mt-5');
    $('#articlesResults').append('<img id="loading" class="mx-auto' + (position != 0 ? ' mt-5' : '') + '" src="/BlogsBerry/Public/Images/Animations/Loading.gif" alt="' + Translate.articles($('#language').val(), 'loading') + '"/>');

    const copy = position;
    position = 0;

    $.post('/BlogsBerry/', {
        'Request' : 'Articles',
        'Action' : 'Search',
        'Language' : $('#language').val(),
        'Search' : $('#articlesSearch').val(),
        'Position' : copy,
    }).done(function(response) {
        $('#loading').remove();

        let found = 0;

        if(response.includes('[') && response.includes(']')) JSON.parse(response).forEach(function(article) {
            $('#articlesResults').append('\
                <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 ' + (found != 0 || copy != 0 ? 'my-5' : 'mb-5') + '">\
                    <div class="row">\
                        <p class="h2 w-100 my-4 text-center"> ' + article['Title'] + ' </p>\
                        <div class="row">\
                            <div class="col-12 col-md-6 my-auto' + (found % 2 ? ' order-md-1' : '') + '">\
                                <p class="my-4 text-justify"> ' + article['Content'] + ' </p>\
                                <div class="d-flex justify-content-end align-items-center">\
                                    <p class="my-4"> ' + Translate.articles($('#language').val(), 'by') + ' ' + article['Username'] + ' (' + Translate.articles($('#language').val(), 'on') + ' ' + Translate.date($('#language').val(), article['Published'].substr(0, 10)) + ') </p>\
                                    <img id="' + article['ID'] + '" class="ml-3 articlesBookmark' + (article['Bookmark'] ? '' : ' off') + '" src="/BlogsBerry/Public/Images/Icons/' + (article['Bookmark'] ? 'On' : 'Off') + '.png" alt="' + Translate.articles($('#language').val(), 'bookmark') + '"/>\
                                </div>\
                            </div>\
                            <div class="col-12 col-md-6 my-auto">\
                                <a id="' + article['ID'] + '" class="articlesLink" href="' + article['Link'] + '" target="_blank">\
                                    <img class="img-fluid my-4 shadow rounded" src="/BlogsBerry/Public/Images/Articles/' + article['Image'] + '.jpeg" alt="' + article['Title'] + '"/>\
                                </a>\
                            </div>\
                        </div>\
                        <a id="' + article['ID'] + '" class="btn btn-primary w-100 my-4 articlesLink" href="' + article['Link'] + '" target="_blank"> ' + Translate.articles($('#language').val(), 'read') + ' ' + article['Title'] + ' </a>\
                    </div>\
                </article>\
            ');

            found ++;
        });

        if(found > 0) {
            $('.articlesLink').off('click');
            $('.articlesLink').click(function() {
                $.post('/BlogsBerry/', {
                    'Request' : 'Clicks',
                    'Action' : 'Create',
                    'ArticleID' : $(this).attr('id'),
                });
            });

            $('.articlesBookmark').off('click');
            $('.articlesBookmark').click(function() {
                const article = $(this);

                if(article.hasClass('off')) $.post('/BlogsBerry/', {
                    'Request' : 'Bookmarks',
                    'Action' : 'Create',
                    'ArticleID' : article.attr('id'),
                }).done(function(response) {
                    if(response.includes('true')) article.attr('src', '/BlogsBerry/Public/Images/Icons/On.png').removeClass('off');
                    else if(response.includes('false')) {
                        alert(Translate.articles($('#language').val(), 'loginError'));

                        window.location.assign('/BlogsBerry/Login');
                    } else alert(Translate.articles($('#language').val(), 'bookmarkError'));
                }).fail(function() {
                    alert(Translate.articles($('#language').val(), 'bookmarkError'));
                });
                else $.post('/BlogsBerry/', {
                    'Request' : 'Bookmarks',
                    'Action' : 'Delete',
                    'ArticleID' : article.attr('id'),
                }).done(function(response) {
                    if(response.includes('true')) article.attr('src', '/BlogsBerry/Public/Images/Icons/Off.png').addClass('off');
                    else if(response.includes('false')) {
                        alert(Translate.articles($('#language').val(), 'loginError'));

                        window.location.assign('/BlogsBerry/Login');
                    } else alert(Translate.articles($('#language').val(), 'bookmarkError'));
                }).fail(function() {
                    alert(Translate.articles($('#language').val(), 'bookmarkError'));
                });
            });

            $('html').animate({ scrollTop : $('#articlesResults').children().eq(copy * 10).offset().top });

            if(found == 10) position = copy + 1;
        } else if(position == 0) {
            $('#articlesDiv').addClass('d-none');

            alert(Translate.articles($('#language').val(), 'loadEmpty'));
        }

        $('#articlesResults').children().last().addClass('mt-5').removeClass('my-5');
    }).fail(function() {
        $('#loading').remove();
        $('#articlesResults').children().last().addClass('mt-5').removeClass('my-5');

        alert(Translate.articles($('#language').val(), 'loadError'));
    });
};

$(document).ready(function() {
    $(this).scroll(function() {
        if($(this).scrollTop() >= $(this).height() - $(window).height() && position != 0) loadArticles();
    });

    $('#articlesSearch').change(function() {
        $('#articlesResults').empty();
        $('#articlesDiv').removeClass('d-none');

        position = 0;

        loadArticles();
    });
});
