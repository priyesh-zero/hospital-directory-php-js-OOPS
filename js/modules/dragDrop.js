var isAdvancedUpload = (function() {
	var div = document.createElement('div');
	return (
		('draggable' in div || ('ondragstart' in div && 'ondrop' in div)) &&
		'FormData' in window &&
		'FileReader' in window
	);
})();

var $form = $('.drag-n-drop__form');
var $input = $form.find('input[type="file"]');

if (isAdvancedUpload) {
	$form.addClass('has-advanced-upload');

	var droppedFiles = false;

	$form
		.on('drag dragstart dragend dragover dragenter dragleave drop', function(
			e
		) {
			e.preventDefault();
			e.stopPropagation();
		})
		.on('dragover dragenter', function() {
			$form.addClass('is-dragover');
		})
		.on('dragleave dragend drop', function() {
			$form.removeClass('is-dragover');
		})
		.on('drop', function(e) {
			droppedFiles = e.originalEvent.dataTransfer.files;
		});
}

$form
	.on('submit', function(e) {
		if ($form.hasClass('is-uploading')) return false;

		$form.addClass('is-uploading').removeClass('is-error');

		var ajaxData = new FormData($form.get(0));

		if (droppedFiles) {
			$.each(droppedFiles, function(i, file) {
				ajaxData.append($input.attr('name'), file);
			});
		}

		$.ajax({
			url: $form.attr('action'),
			type: $form.attr('method'),
			data: ajaxData,
			dataType: 'json',
			cache: false,
			contentType: false,
			processData: false,
			complete: function() {
				$form.removeClass('is-uploading');
			},
			success: function(data) {
				$form.addClass(data.success == true ? 'is-success' : 'is-error');
				if (!data.success) $errorMsg.text(data.error);
			},
			error: function() {
				// Log the error, show an alert, whatever works for you
			}
		});
	})
	.on('drop', function(e) {
		// when drag & drop is supported
		droppedFiles = e.originalEvent.dataTransfer.files;
		$form.trigger('submit');
	});

$input.on('change', function(e) {
	// when drag & drop is NOT supported
	$form.trigger('submit');
});
