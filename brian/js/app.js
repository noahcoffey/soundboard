// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$(function() {

  var images = ['brian1.gif', 'brian2.gif', 'brian3.gif', 'brian4.gif', 'brian5.gif'];
  $('body').css({'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')'});

	$("audio").each(function(i, audioElement) {
		var audio = $(this);
		var that = this; //closure to keep reference to current audio tag
		$(".buttons").append($('<li><button class="button radius" type="button">'+audio.attr("title")+'</button></li>').click(function() {
			that.currentTime = 0;
			that.play();
		}));
	});
});

