$(document).ready(function() {
	// executes when HTML-Document is loaded and DOM is ready

	// Init custom select for filters
	$('.filters__select').niceSelect();

	//Toggle favourite person menu
	$('.favourite__list').delegate('.person', 'click', function(e) {
		var target = $(e.target);
		var curPerson = target.closest('.person');

		curPerson.children('.person__list').slideDown();

		$(curPerson).mouseleave(function() {
			curPerson.children('.person__list').slideUp();
		});
	});

	//Delegate events from main content
	$('.main-content__tables')
		// Toggle table controls(checkboxes) menu
		.delegate('.table-section__btn', 'click', function(e) {
			var target = $(e.target);
			target.toggleClass('is-active');
			target
				.parent()
				.next('.table-controls')
				.slideToggle();
		})

		//Toggle table "Action menu"
		.delegate('.table__btn', 'click', function(e) {
			var target = $(e.target);
			var btn = target.closest('.table__btn');
			var btnMenu = btn.next('.table__btn-list');
			btnMenu.slideDown();

			$(btn.parent('.table__btn-wrap')).mouseleave(function() {
				btnMenu.slideUp();
			});
		})

		//Toggle table heading "Sorting menu"
		.delegate('.table__heading', 'click', function(e) {
			var target = $(e.target);
			var thMenu = target.children('.table__sort-list');
			thMenu.slideDown();

			$(target).mouseleave(function() {
				thMenu.slideUp();
			});
		});

	// Toggle events on calendar with checkboxes
	$('.checkbox__checkbox').change(function(e) {
		var type = $(this).attr('id');
		$('.month__event--' + type).slideToggle('fast');
		$('.event--' + type).slideToggle('fast');
		$('.visit--' + type).slideToggle('fast');
	});

	// Textarea auto-resize
	$('#popup-note, #appointment-motif')
		.each(function() {
			this.setAttribute('style', 'height:' + this.scrollHeight + 'px;overflow-y:hidden;');
		})
		.on('input', function() {
			console.log(this.scrollHeight);
			var height = this.scrollHeight > 40 ? this.scrollHeight : 40;
			console.log(height);
			this.style.height = 'auto';
			this.style.height = height + 'px';
		});
});

// Injecting svg sprite in the beginning of document
var ajax = new XMLHttpRequest();
ajax.open('GET', 'img/sprite.svg', true);
ajax.responseType = 'document';
ajax.onload = function(e) {
	document.body.insertBefore(ajax.responseXML.documentElement, document.body.childNodes[0]);
};
ajax.send();
