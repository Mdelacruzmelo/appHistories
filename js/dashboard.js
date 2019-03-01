$(document).ready(function () {


});

$('.titleChapterContainer').mouseover(function () {
	if ($(this).hasClass('activeChapter')) {

	} else {
		var thisId = $(this).data('id');
		$('#circleChapter' + thisId + " circle").css({
			'r': '7',
		});
	}
});

$('.titleChapterContainer').mouseout(function () {
	if ($(this).hasClass('activeChapter')) {

	} else {
		var thisId = $(this).data('id');
		$('#circleChapter' + thisId + " circle").css({
			'r': '4',
		});
	}
});

$('.titleChapterContainer').click(function () {

	var thisId = $(this).data('id');
	$('#circleChapter' + thisId + " circle").css({
		'r': '7',
	});
	var myTop = parseInt($('#circleChapter' + thisId).offset().top);
	if (myTop < 190) {
		$('#circleBorder3').css({
			'border-bottom-right-radius': '1rem',
		});
	} else if (myTop > 190) {
		$('#circleBorder3').css({
			'border-bottom-right-radius': '0rem',
		});
	}
	$('#optionBackground').css({
		'top': myTop - 149 + "px",
	});
	$('#border1').css({
		'top': myTop - 109 + "px",
	});
	$('#border2').css({
		'top': myTop - 181 + "px",
	});

});