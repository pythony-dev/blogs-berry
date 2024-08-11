
$(document).ready(function() {
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
            else alert(Translate.blogger($('#language').val(), 'settingsError'));
        }).fail(function() {
            alert(Translate.blogger($('#language').val(), 'settingsError'));
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

    $('#addForm').submit(function(event) {
        event.preventDefault();

        $.post('/BlogsBerry/', {
            'Request' : 'Blogs',
            'Action' : 'Create',
            'Language' : $('#addLanguage').val(),
            'Title' : $('#addTitle').val(),
            'Content' : $('#addContent').val(),
            'Link' : $('#addLink').val(),
            'Image' : $('#addImageID').val(),
        }).done(function(response) {
            if(response.includes('true')) window.location.reload();
            else alert(Translate.blogger($('#language').val(), 'addError'));
        }).fail(function() {
            alert(Translate.blogger($('#language').val(), 'addError'));
        });
    });

    $('#addFile').change(function() {
        if($(this)[0].files.length == 1 && $(this)[0].files[0].size < 4194304) {
            $('#addImage').attr('src', '/BlogsBerry/Public/Images/Animations/Loading.gif').attr('alt', Translate.blogger($('#language').val(), 'loading')).addClass('w-100').removeClass('d-none');
            $('#addDiv').addClass('d-none');

            let formData = new FormData();
            formData.append('Request', 'Blogs');
            formData.append('Action', 'Image');
            formData.append('Image', $(this)[0].files[0]);

            $.ajax({
                url : '/',
                type : 'POST',
                data : formData,
                processData : false,
                contentType : false,
            }).done(function(response) {
                if(parseInt($('#addImageID').val()) > 0) $('#addImage').attr('src', '/BlogsBerry/Public/Images/Blogs/' + parseInt($('#addImageID').val()) + '.jpeg').attr('alt', $('#addTitle').val()).removeClass('w-100');
                else {
                    $('#addImage').removeAttr('src alt').addClass('d-none').removeClass('w-100');
                    $('#addDiv').removeClass('d-none');
                }

                const id = parseInt(response);

                if(response.includes('size')) alert(Translate.blogger($('#language').val(), 'fileSize'));
                else if(response.includes('extension')) alert(Translate.blogger($('#language').val(), 'fileExtension'));
                else if(response.includes('type')) alert(Translate.blogger($('#language').val(), 'fileType'));
                else if(id > 0) {
                    $('#addImageID').val(id);
                    $('#addImage').attr('src', '/BlogsBerry/Public/Images/Blogs/' + id + '.jpeg').attr('alt', $('#addTitle').val()).removeClass('d-none');
                    $('#addDiv').addClass('d-none');
                } else alert(Translate.blogger($('#language').val(), 'fileError'));
            }).fail(function() {
                $('#addImage').removeAttr('src alt').addClass('d-none').removeClass('w-100');
                $('#addDiv').removeClass('d-none');

                alert(Translate.blogger($('#language').val(), 'fileError'));
            });
        } else alert(Translate.blogger($('#language').val(), 'fileSize'));
    });

	$('#addImage').click(function() {
		$('#addFile').click();
    });
});
