$(document).ready(function () {


});

$('#loginButton').hide();
$('#spanRegister').hide();
$('#loginContainer').css('background', 'green');

$('#registerButton').click(function () {
	$('#circleRegister circle').css({
		'r': '400',
	});
	$('#circleLogin circle').css({
		'r': '10',
	});
	$('#registerButton').hide();
	$('#loginButton').show();
	$('#goButtonLogin').hide();
	$('#goButtonRegister').show();
	setTimeout(function () {
		$('#loginContainer').css('background', 'red');
		$('#circleRegister circle').css({
			'r': '10',
		});
	}, 400);
	$('#spanLogin').hide();
	$('#spanRegister').show();
});


$('#loginButton').click(function () {
	$('#circleLogin circle').css({
		'r': '400',
	});
	$('#circleRegister circle').css({
		'r': '10',
	});
	$('#loginButton').hide();
	$('#registerButton').show();
	$('#goButtonLogin').show();
	$('#goButtonRegister').hide();
	setTimeout(function () {
		$('#loginContainer').css('background', 'green');
		$('#circleLogin circle').css({
			'r': '10',
		});
	}, 400);
	$('#spanLogin').show();
	$('#spanRegister').hide();
});