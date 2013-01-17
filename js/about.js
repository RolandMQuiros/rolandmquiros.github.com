$(function() {
	var hello = $("#about-hello");
	$("#about-face").hover(function() {
		hello.html("are you lost");
	}, function() {
		hello.html("hello there");
	});
});
