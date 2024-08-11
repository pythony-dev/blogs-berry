
const uploadImage = function(selector, request) {
	if($('#' + selector + 'File')[0].files.length == 1 && $('#' + selector + 'File')[0].files[0].size < 4194304) {
		$('#' + selector + 'Image').attr('src', '/BlogsBerry/Public/Images/Animations/Loading.gif').attr('alt', Translate.overview($('#language').val(), 'loading')).addClass('w-100').removeClass('d-none');
		$('#' + selector + 'Div').addClass('d-none');

		let formData = new FormData();
		formData.append('Request', request);
		formData.append('Action', 'Image');
		formData.append('Image', $('#' + selector + 'File')[0].files[0]);

		$.ajax({
			url : '/',
			type : 'POST',
			data : formData,
			processData : false,
			contentType : false,
		}).done(function(response) {
			if(parseInt($('#' + selector + 'ImageID').val()) > 0) $('#' + selector + 'Image').attr('src', '/BlogsBerry/Public/Images/' + request + '/' + parseInt($('#' + selector + 'ImageID').val()) + '.jpeg').attr('alt', $('#' + selector + 'Title').val()).removeClass('w-100');
			else {
				$('#' + selector + 'Image').removeAttr('src', 'alt').addClass('d-none').removeClass('w-100');
				$('#' + selector + 'Div').removeClass('d-none');
			}

			const id = parseInt(response);

			if(response.includes('size')) alert(Translate.overview($('#language').val(), 'fileSize'));
			else if(response.includes('extension')) alert(Translate.overview($('#language').val(), 'fileExtension'));
			else if(response.includes('type')) alert(Translate.overview($('#language').val(), 'fileType'));
			else if(id > 0) {
				$('#' + selector + 'ImageID').val(id);
				$('#' + selector + 'Image').attr('src', '/BlogsBerry/Public/Images/' + request + '/' + id + '.jpeg').attr('alt', $('#' + selector + 'Title').val()).removeClass('d-none');
				$('#' + selector + 'Div').addClass('d-none');
			} else alert(Translate.overview($('#language').val(), 'fileError'));
		}).fail(function() {
			$('#' + selector + 'Image').removeAttr('src', 'alt').addClass('d-none').removeClass('w-100');
			$('#' + selector + 'Div').removeClass('d-none');

			alert(Translate.overview($('#language').val(), 'fileError'));
		});
	} else alert(Translate.overview($('#language').val(), 'fileSize'));
};

$(document).ready(function() {
	$('.edit').click(function() {
		$.post('/BlogsBerry/', {
            'Request' : 'Articles',
            'Action' : 'Article',
            'ArticleID' : $(this).attr('id'),
        }).done(function(response) {
			if(response.includes('{') && response.includes('}')) {
				const article = JSON.parse(response);

				$('#editArticleID').val(parseInt(article['ID']));
				$('#editTitle').val(article['Title']);
				$('#editContent').val(article['Content']);
				$('#editLink').val(article['Link']);
				$('#editImageID').val(article['Image']);
				$('#editImage').attr('src', '/BlogsBerry/Public/Images/Articles/' + article['Image'] + '.jpeg').attr('alt', article['Title']);
				$('#editModal').modal('show');
			} else alert(Translate.overview($('#language').val(), 'editClick'));
        }).fail(function() {
			alert(Translate.overview($('#language').val(), 'editClick'));
		});
	});

	$('#editForm').submit(function(event) {
		event.preventDefault();

		$.post('/BlogsBerry/', {
            'Request' : 'Articles',
            'Action' : 'Update',
            'ArticleID' : $('#editArticleID').val(),
			'Title' : $('#editTitle').val(),
			'Content' : $('#editContent').val(),
			'Link' : $('#editLink').val(),
			'Image' : $('#editImageID').val(),
        }).done(function(response) {
			if(response.includes('true')) window.location.reload();
			else alert(Translate.overview($('#language').val(), 'editSubmit'));
        }).fail(function() {
			alert(Translate.overview($('#language').val(), 'editSubmit'));
		});
	});

	$('#editFile').change(function() {
		uploadImage('edit', 'Articles');
	});

	$('#editImage').click(function() {
		$('#editFile').click();
	});

	$('#editDelete').click(function(event) {
		event.preventDefault();

		if(confirm(Translate.overview($('#language').val(), 'editConfirm'))) $.post('/BlogsBerry/', {
			'Request' : 'Articles',
			'Action' : 'Delete',
			'ArticleID' : $('#editArticleID').val(),
		}).done(function(response) {
			if(response.includes('true')) window.location.reload();
			else alert(Translate.overview($('#language').val(), 'editDelete'));
		}).fail(function() {
			alert(Translate.overview($('#language').val(), 'editDelete'));
		});
	});

	$('#settingsForm').submit(function(event) {
        event.preventDefault();

        $.post('/BlogsBerry/', {
            'Request' : 'Blogs',
            'Action' : 'Update',
            'BlogID' : $('#settingsBlogID').val(),
			'Language' : $('#settingsLanguage').val(),
			'Title' : $('#settingsTitle').val(),
            'Content' : $('#settingsContent').val(),
            'Link' : $('#settingsLink').val(),
            'Image' : $('#settingsImageID').val(),
        }).done(function(response) {
            if(response.includes('true')) window.location.reload();
			else alert(Translate.overview($('#language').val(), 'settingsSubmit'));
        }).fail(function() {
			alert(Translate.overview($('#language').val(), 'settingsSubmit'));
		});
    });

	$('#settingsFile').change(function() {
		uploadImage('settings', 'Blogs');
	});

	$('#settingsImage').click(function() {
		$('#settingsFile').click();
	});

	$('#settingsDelete').click(function(event) {
		event.preventDefault();

		if(confirm(Translate.overview($('#language').val(), 'settingsConfirm'))) $.post('/BlogsBerry/', {
			'Request' : 'Blogs',
			'Action' : 'Delete',
			'BlogID' : $('#settingsBlogID').val(),
		}).done(function(response) {
			if(response.includes('true')) window.location.replace('/BlogsBerry/User');
			else alert(Translate.overview($('#language').val(), 'settingsDelete'));
        }).fail(function() {
			alert(Translate.overview($('#language').val(), 'settingsDelete'));
		});
	});

	$('#addForm').submit(function(event) {
        event.preventDefault();

        $.post('/BlogsBerry/', {
            'Request' : 'Articles',
            'Action' : 'Create',
            'BlogID' : $('#addBlogID').val(),
            'Title' : $('#addTitle').val(),
            'Content' : $('#addContent').val(),
            'Link' : $('#addLink').val(),
            'Image' : $('#addImageID').val(),
        }).done(function(response) {
            if(response.includes('true')) window.location.reload();
			else alert(Translate.overview($('#language').val(), 'addError'));
		}).fail(function() {
			alert(Translate.overview($('#language').val(), 'addError'));
		});
    });

	$('#addFile').change(function() {
		uploadImage('add', 'Articles');
    });

	$('#addImage').click(function() {
		$('#addFile').click();
    });
});
