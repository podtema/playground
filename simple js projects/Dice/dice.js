function Dice(sides) {
	this.sides = sides;
	}

Dice.prototype.roll = function() {
	let randomNumber = Math.floor(Math.random() * this.sides) + 1;
	return randomNumber;
};

button.onclick = function() {
	let placeholder = document.getElementById("placeholder");
	let dice = new Dice(6);
	placeholder.innerHTML = dice.roll();
	};