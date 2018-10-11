var close = $('#close'),
wrapper = $('#wrapper'),
video = $('#video'),
disclaimer = $('#disclaimer'),
play = $('#play');
var iframe = document.getElementById('video');
var player = $f(iframe);

$(close).on('click', function (){
	$(wrapper).slideUp();
});

$('#menu-trigger').on('click', function(){

	$('#menu').slideToggle();
});

// bind events
var playButton = document.getElementById("play");

playButton.addEventListener("click", function() {

    $(wrapper).addClass('play');
    $('#disclaimer').remove();
    $(disclaimer).attr('unselectable', 'on');
    player.api("play");

});
