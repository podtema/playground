var playlist = new Playlist();

var spaceOddity = new Song("Space Oddity", "David Bowie", "4:18");
var imagine = new Song("Imagine", "John Lennon", "3:18");

playlist.add(spaceOddity);
playlist.add(imagine);

var playlistElement = document.getElementById("playlist");

playlist.renderInElement(playlistElement);

var playButton = document.getElementById("play");
playButton.onclick = function () {
	playlist.play();
	playlist.renderInElement(playlistElement);
}

var nextButton = document.getElementById("next");
nextButton.onclick = function () {
	playlist.next();
	playlist.renderInElement(playlistElement);
}
var stopButton = document.getElementById("stop");
stopButton.onclick = function () {
	playlist.stop();
	playlist.renderInElement(playlistElement);
}