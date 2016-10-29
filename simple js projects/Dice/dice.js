function Dice(sides, title) {
	this.sides = sides;
	this.title = title;
}

let diceSides = new Dice(6, "die");

let dice = {
	sides: diceSides.sides, 
	roll: function () {
		let randomNumber = Math.floor(Math.random() * this.sides) + 1;
		return randomNumber;
		}
	}

function printNumber(number) {
	let placeholder = document.getElementById("placeholder");
	placeholder.innerHTML = number;
	}

var button = document.getElementById("button");

button.onclick = function() {
	let result = dice.roll();
	printNumber(result);
	};