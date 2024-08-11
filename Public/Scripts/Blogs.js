
let position = 0;

const loadBlogs = function() {
    $('#blogsResults').children().last().addClass('my-5').removeClass('mt-5');
    $('#blogsResults').append('<img id="loading" class="mx-auto' + (position != 0 ? ' mt-5' : '') + '" src="/BlogsBerry/Public/Images/Animations/Loading.gif" alt="' + Translate.blogs($('#language').val(), 'loading') + '"/>');

    const copy = position;
    position = 0;

    $.post('/BlogsBerry/', {
        'Request' : 'Blogs',
        'Action' : 'Search',
        'Language' : $('#language').val(),
        'Search' : $('#blogsSearch').val(),
        'Position' : copy,
    }).done(function(response) {
        $('#loading').remove();

        let found = 0;

        if(response.includes('[') && response.includes(']')) JSON.parse(response).forEach(function(blog) {
            $('#blogsResults').append('\
                <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 ' + (found != 0 || copy != 0 ? 'my-5' : 'mb-5') + '">\
                    <div class="row">\
                        <p class="h2 w-100 my-4 text-center"> ' + blog['Title'] + ' </p>\
                        <div class="row">\
                            <div class="col-12 col-md-6 my-auto' + (found % 2 ? ' order-md-1' : '') + '">\
                                <p class="my-4 text-justify"> ' + blog['Content'] + ' </p>\
                                <div class="d-flex justify-content-end align-items-center">\
                                    <p class="my-4"> ' + Translate.blogs($('#language').val(), 'by') + ' ' + blog['Username'] + ' (' + blog['Articles'] + ' ' + Translate.blogs($('#language').val(), 'articles') + ') </p>\
                                    <img id="' + blog['ID'] + '" class="ml-3 blogsBookmark' + (blog['Bookmark'] ? '' : ' off') + '" src="/BlogsBerry/Public/Images/Icons/' + (blog['Bookmark'] ? 'On' : 'Off') + '.png" alt="' + Translate.blogs($('#language').val(), 'bookmark') + '"/>\
                                </div>\
                            </div>\
                            <div class="col-12 col-md-6 my-auto">\
                                <a id="' + blog['ID'] + '" class="blogsLink" href="' + blog['Link'] + '" target="_blank">\
                                    <img class="img-fluid my-4 shadow rounded" src="/BlogsBerry/Public/Images/Blogs/' + blog['Image'] + '.jpeg" alt="' + blog['Title'] + '"/>\
                                </a>\
                            </div>\
                        </div>\
                        <a id="' + blog['ID'] + '" class="btn btn-primary w-100 my-4 blogsLink" href="' + blog['Link'] + '" target="_blank"> ' + Translate.blogs($('#language').val(), 'read') + ' ' + blog['Title'] + ' </a>\
                    </div>\
                </article>\
            ');

            found ++;
        });

        if(found > 0) {
            $('.blogsLink').off('click');
            $('.blogsLink').click(function() {
                $.post('/BlogsBerry/', {
                    'Request' : 'Clicks',
                    'Action' : 'Create',
                    'BlogID' : $(this).attr('id'),
                });
            });

            $('.blogsBookmark').off('click');
            $('.blogsBookmark').click(function() {
                const blog = $(this);

                if(blog.hasClass('off')) $.post('/BlogsBerry/', {
                    'Request' : 'Bookmarks',
                    'Action' : 'Create',
                    'BlogID' : blog.attr('id'),
                }).done(function(response) {
                    if(response.includes('true')) blog.attr('src', '/BlogsBerry/Public/Images/Icons/On.png').removeClass('off');
                    else if(response.includes('false')) {
                        alert(Translate.blogs($('#language').val(), 'loginError'));

                        window.location.assign('/BlogsBerry/Login');
                    } else alert(Translate.blogs($('#language').val(), 'bookmarkError'));
                }).fail(function() {
                    alert(Translate.blogs($('#language').val(), 'bookmarkError'));
                });
                else $.post('/BlogsBerry/', {
                    'Request' : 'Bookmarks',
                    'Action' : 'Delete',
                    'BlogID' : blog.attr('id'),
                }).done(function(response) {
                    if(response.includes('true')) blog.attr('src', '/BlogsBerry/Public/Images/Icons/Off.png').addClass('off');
                    else if(response.includes('false')) {
                        alert(Translate.blogs($('#language').val(), 'loginError'));

                        window.location.assign('/BlogsBerry/Login');
                    } else alert(Translate.blogs($('#language').val(), 'bookmarkError'));
                }).fail(function() {
                    alert(Translate.blogs($('#language').val(), 'bookmarkError'));
                });
            });

            $('html').animate({ scrollTop : $('#blogsResults').children().eq(copy * 10).offset().top });

            if(found == 10) position = copy + 1;
        } else if(position == 0) {
            $('#blogsDiv').addClass('d-none');

            alert(Translate.blogs($('#language').val(), 'loadEmpty'));
        }

        $('#blogsResults').children().last().addClass('mt-5').removeClass('my-5');
    }).fail(function() {
        $('#loading').remove();
        $('#blogsResults').children().last().addClass('mt-5').removeClass('my-5');

        alert(Translate.blogs($('#language').val(), 'loadError'));
    });
};

$(document).ready(function() {
    $(this).scroll(function() {
        if($(this).scrollTop() >= $(this).height() - $(window).height() && position != 0) loadBlogs();
    });

    $('#blogsSearch').change(function() {
        $('#blogsResults').empty();
        $('#blogsDiv').removeClass('d-none');

        position = 0;

        loadBlogs();
    });
});
