function updatePlaylist(){
	
	var concertid = $(this).data('id');
	var callingImage = $(this);
	
	getPlaylist = function( concertid ) {
		return $.ajax({
			url: '../php/getplaylist.php',
			data: { id: concertid },
			dataType: 'json'
		}).promise();
	};
	
	getConcertDetails = function( concertid ) {
		return $.ajax({
			url: '../php/getconcertdetails.php',
			data: { id: concertid },
			dataType: 'json'
		}).promise();
	};
	
	getRepetoire = function( concertid ) {
		return $.ajax({
			url: '../php/getrepetoire.php',
			data: { id: concertid },
			dataType: 'json'
		}).promise();
	};
	
	//Update playlist and concert details when all ajax calls have returned
	$.when( 
		getPlaylist(concertid), 
		getConcertDetails(concertid), 
		getRepetoire(concertid)
	).done(function ( playlistResults, detailsResults, repetoireResults ) {
		var playlist = playlistResults[0];
		var details = detailsResults[0];
		var repetoire = repetoireResults[0];
	
		//Update Playlist
		myPlaylist.remove();
		//Check whether the playlist is empty
		if(playlist.length > 0){
			console.log(playlist);
			myPlaylist.setPlaylist(playlist);
		}
		else{
			myPlaylist.add({title:'There are no recordings from this concert'});
		}
		
		//Update Concert Details
		var newHTML = '';
		$.each(repetoire,function(index,value){
			newHTML = newHTML + value.title + '<br />';
		})
		
		$(".concert-details-wrapper").fadeTo(700,0, function() {
			$('#venue').text(details.venue);
			$('#date').text(details.date);
			$('#repetoire').html(newHTML);
			$('#programme > a').attr("href", details.programme);
		}).fadeTo(700,1);
		
		//Update Poster
		var filePath = callingImage.attr('src');
		$(".poster-container > a >img").fadeTo(700,0, function() {
			$(".poster-container > a > img").attr("src", filePath);
		}).fadeTo(700,1);
		$(".poster-container > a").attr("href", filePath.replace("small", "large"));
		
	});
	
};

$('.jp-volume-bar').mousedown(function() {
	isDown = true;
	var parentOffset = $(this).offset(),
	  width = $(this).width();
  $(window).mousemove(function(e) {
	var x = e.pageX - parentOffset.left,
	volume = x/width
		if (volume > 1) {
			$("#jquery_jplayer_1").jPlayer("volume", 1);
		} else if (volume <= 0) {
			$("#jquery_jplayer_1").jPlayer("mute");
		} else {
			$("#jquery_jplayer_1").jPlayer("volume", volume);
			$("#jquery_jplayer_1").jPlayer("unmute");
		}
	});
	return false;
});


$('.jp-seek-bar').mousedown(function() {
	isDown = true
	var parentOffset = $(this).offset();
	var width = $(this).width();
	$(window).mousemove(function(e) {
		var x = e.pageX - parentOffset.left;
		var seek = ((x/width)*100);
		$("#jquery_jplayer_1").jPlayer("playHead", seek);
	});
	return false;
});

$(document).mouseup(function () {
	if(isDown){
		$(window).unbind("mousemove");
		isDown = false;
	}
});