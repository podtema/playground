// Playlist Object Prototype

function Playlist() {
	this.songs = [];
	this.nowPlayingIndex = 0;
}

Playlist.prototype.add = function(song) {
	this.songs.push(song);
};

Playlist.prototype.play = function() {
	var currentSong = this.songs[this.nowPlayingIndex];
	currentSong.play();
};

Playlist.prototype.stop = function(){
	var currentSong = this.songs[this.nowPlayingIndex];
	currentSong.stop();
};

Playlist.prototype.next = function() {
	this.stop();
	this.nowPlayingIndex++;
	if(this.nowPlayingIndex >= this.songs.lenght) {
		this.nowPlayingIndex = 0;
	}
	this.play();
};

Playlist.prototype.renderInElement = function(list) {
	list.innerHTML = "";
	for (var i = 0; i < this.songs.length; i++) {
	list.innerHTML += this.songs[i].toHTML();
	}

};

// Song Object Prototype

function Song(title, artist, duration) {
	this.title = title;
	this.artist = artist;
	this.duration = duration;
	this.isPlaying = false;
}

Song.prototype.play = function() {
	this.isPlaying = true;
};

Song.prototype.stop = function() {
	this.isPlaying = false;
};

Song.prototype.toHTML = function() {
	var htmlString = "<li";
	if(this.isPlaying){
		htmlString += " class='current'";
		}
	htmlString += ">";
	htmlString += this.title;
	htmlString += " - ";
	htmlString += this.artist;
	htmlString += "<span class='duration'>";
	htmlString += this.duration; 
	htmlString += "</span></li>";

	return htmlString;
};

// Main Functionality (buttons, visual render, access to files, other controls)

var playlist = new Playlist();

// Will use file/database later on
var spaceOddity = new Song("Space Oddity", "David Bowie", "4:18");
var imagine = new Song("Imagine", "John Lennon", "3:18");
var imReady = new Song("I'm Ready", "AJR", "3:47");
var radioactive = new Song("Radioactive", "Imagine Dragons", "3:06");

//will loop through the database later on
playlist.add(spaceOddity);
playlist.add(imagine);
playlist.add(imReady);
playlist.add(radioactive);

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