let generation = 0;
let startOn  = false;
let cycleBoolean = null;
let timerBoolean = false;
let score = 0;
function loadEvent(){
	 drag();
	 countPopulation();
}


function reset(){
	let text = "Do you want to clear the grid cells?\nEither OK or Cancel.";

	if (confirm(text)){
		const elements = document.querySelectorAll('.box');
				elements.forEach((element) => {
				element.classList.remove('alive');
			});
		;
	}
	generation = 0;
	cycleBoolean = false;
	startOn  = false;
	gametime = 0;
	score=0;
	clearInterval(downloadTimer);
	timerBoolean = false;
	document.getElementById("generation").innerHTML = "Generation: " + generation;
	document.getElementById("gametime").innerHTML = "Time: " + gametime +  " sec";
	document.getElementById("score").innerHTML = "Score : " + score;


}

function stop(){
	cycleBoolean = false;
	startOn  = false;
	clearInterval(downloadTimer);
	timerBoolean = false;
}

let down = false;
let boxStatus = "";
function drag(){
		 var roll = document.querySelectorAll(".box");
			roll.forEach(function (box, i) {
            box.addEventListener("mousedown", function () {
				down = true;
				 if (event.target.classList.contains("alive")) {
				  event.target.classList.remove("alive");
				} else {
				  event.target.classList.add("alive");
				  boxStatus = "alive";
				}
            });
			 box.addEventListener("mouseover", function () {
				 if (down) {
					   if (boxStatus == "alive") {
						event.target.classList.add("alive");
					  } else {
						event.target.classList.remove("alive");
					  }
					}
            });
			 box.addEventListener("click", function () {
					down = false;
					boxStatus = "";
            });
			box.addEventListener("mouseup", function () {
					down = false;
					boxStatus = "";
            });
			box.addEventListener("drag", function () {
					down = false;
					boxStatus = "";
            });


        });
      }

let populationUpdate = null;
function countPopulation(){
		let pop =0;
		populationUpdate = setInterval(function(){
		var cells = document.querySelectorAll(".box");
		pop = 0;
			cells.forEach(function (box, i) {
				 if (box.classList.contains("alive")) {
					 pop = pop + 1;
				}
            });

  		document.getElementById("population").innerHTML = "Population: " + pop;
		}, 100);
}

function incOne(){
		cycle(1);
}
function inc23(){
		cycle(23);
}

function countNeighbors(){
		const  cell = document.getElementById("grid").children;
		console.log(cell.length);

		let neighborCount  = 0;
			for (let row = 0; row < cell.length; row++) {
					console.log(row);
				for (let col = 0; col < cell[row].children.length; col++) {
					neighborCount  = 0;
					if (row != 0 ){
						if (cell[row-1].children[col].classList.contains("alive") ) {
						 neighborCount++;
						}
						if ( col+1 < cell[row].children.length ){
							if (cell[row-1].children[col+1].classList.contains("alive") ) {
								neighborCount++;
							}
						}
						if ( col-1 >= 0 ){
							if (cell[row-1].children[col-1].classList.contains("alive") ) {
								neighborCount++;
							}
						}
					 }
					if ( col+1 < cell[row].children.length ){
						if (cell[row].children[col+1].classList.contains("alive") ) {
						 neighborCount++;
						}
					 }
					if ( col-1 >= 0 ){
						if (cell[row].children[col-1].classList.contains("alive") ) {
						 neighborCount++;
						}
					 }
					 if (row != 14 ){
						if (cell[row+1].children[col].classList.contains("alive")) {
							neighborCount++;
						}
						if ( col+1 < cell[row].children.length ){
							if (cell[row+1].children[col+1].classList.contains("alive") ) {
								neighborCount++;
							}
						}
						if ( col-1 >= 0 ){
							if (cell[row+1].children[col-1].classList.contains("alive") ) {
								neighborCount++;
							}
						}
					}

					cell[row].children[col].neighbor = neighborCount;
					console.log(row + " , " + col + " :" + cell[row].children[col].neighbor);
				}
			}

}

async function cycle(num){
		countNeighbors();
		if (	timerBoolean == false){
			timer();
		}
		cycleBoolean = true;
		const  cell = document.getElementById("grid").children;
		console.log(cell.length);
		while(num!= 0 && cycleBoolean == true){
		update();
		await delay(1000);

		function update() {
		countNeighbors();
			for (let row = 0; row < cell.length; row++) {
				for (let col = 0; col < cell[row].children.length; col++) {



					if (cell[row].children[col].classList.contains("alive") ) {
						if(cell[row].children[col].neighbor < 2  || cell[row].children[col].neighbor > 3){
							cell[row].children[col].classList.remove("alive");
						}


						}else{
							if(cell[row].children[col].neighbor == 3){
							cell[row].children[col].classList.add("alive");
							score +=1;
							}
						}
					}
				}
			generation++;
			num--;
			document.getElementById("generation").innerHTML = "Generation: " + generation;
			document.getElementById("score").innerHTML = "Score : " + score;

			}

		}
		if (cycleBoolean == false){
			num = 0;
		}
}

async function start(){
	if (startOn == false){
		timer();
		startOn = true;
		countNeighbors();
		cycleBoolean = true;
		const  cell = document.getElementById("grid").children;
		console.log(cell.length);
		while( cycleBoolean == true){
		update();
		await delay(1000);

		function update() {
		countNeighbors();
			for (let row = 0; row < cell.length; row++) {
				for (let col = 0; col < cell[row].children.length; col++) {



					if (cell[row].children[col].classList.contains("alive") ) {
						if(cell[row].children[col].neighbor < 2  || cell[row].children[col].neighbor > 3){
							cell[row].children[col].classList.remove("alive");
						}


						}else{
							if(cell[row].children[col].neighbor == 3){
							cell[row].children[col].classList.add("alive");
							score +=1;
							}
						}
					}
				}
			generation++;
			document.getElementById("generation").innerHTML = "Generation: " + generation;
			document.getElementById("score").innerHTML = "Score : " + score;

			document.getElementById("endScore").value  = score;
			document.getElementById("endTime").value  = gametime ;


			}

		}
	}
}

function delay(time) {
  return new Promise(resolve => setTimeout(resolve, time));
}

function block(){
		const  cell = document.getElementById("grid").children;

			for (let row = 0; row < cell.length; row = row + 3) {
				for (let col = 0; col < cell[row].children.length; col = col+3) {
					cell[row].children[col].classList.add("alive");
					cell[row].children[col+1].classList.add("alive");
					cell[row+1].children[col].classList.add("alive");
					cell[row+1].children[col+1].classList.add("alive");

				}

			}

		start();

}

function boat(){
		const  cell = document.getElementById("grid").children;

			for (let row = 0; row < cell.length-3; row = row + 5) {
				for (let col = 0; col < cell[row].children.length; col = col+5) {
					cell[row].children[col].classList.add("alive");
					cell[row].children[col+1].classList.add("alive");
					cell[row+1].children[col].classList.add("alive");
					cell[row+1].children[col+2].classList.add("alive");
					cell[row+2].children[col+1].classList.add("alive");

				}

			}

		start();

}


function loaf(){
		const  cell = document.getElementById("grid").children;

			for (let row = 0; row < cell.length-3; row = row + 6) {
				for (let col = 0; col < cell[row].children.length; col = col+6) {
					cell[row].children[col+1].classList.add("alive");
					cell[row].children[col+2].classList.add("alive");
					cell[row+1].children[col].classList.add("alive");
					cell[row+1].children[col+3].classList.add("alive");
					cell[row+2].children[col+1].classList.add("alive");
					cell[row+2].children[col+3].classList.add("alive");
					cell[row+3].children[col+2].classList.add("alive");
				}
			}
		start();

}

function beehive(){
		const  cell = document.getElementById("grid").children;

			for (let row = 0; row < cell.length-4; row = row + 4) {
				for (let col = 0; col < cell[row].children.length-5; col = col+5) {
					cell[row].children[col+1].classList.add("alive");
					cell[row].children[col+2].classList.add("alive");
					cell[row+1].children[col].classList.add("alive");
					cell[row+1].children[col+3].classList.add("alive");
					cell[row+2].children[col+1].classList.add("alive");
					cell[row+2].children[col+2].classList.add("alive");
				}
			}
		start();

}


function blinker(){
		const  cell = document.getElementById("grid").children;

			for (let row = 0; row < cell.length-1; row = row + 5) {
				for (let col = 0; col < cell[row].children.length-2; col = col+5) {
					cell[row+1].children[col+0].classList.add("alive");
					cell[row+1].children[col+1].classList.add("alive");
					cell[row+1].children[col+2].classList.add("alive");

				}
			}
		start();

}

function beacon(){
		const  cell = document.getElementById("grid").children;

			for (let row = 0; row < cell.length-4; row = row + 6) {
				for (let col = 0; col < cell[row].children.length-4; col = col+6) {
					cell[row+1].children[col+1].classList.add("alive");
					cell[row+1].children[col+2].classList.add("alive");
					cell[row+2].children[col+1].classList.add("alive");
					cell[row+2].children[col+2].classList.add("alive");
					cell[row+3].children[col+3].classList.add("alive");
					cell[row+3].children[col+4].classList.add("alive");
					cell[row+4].children[col+3].classList.add("alive");
					cell[row+4].children[col+4].classList.add("alive");

				}
			}
		start();

}


function toad (){
		const  cell = document.getElementById("grid").children;

			for (let row = 0; row < cell.length-2; row = row + 6) {
				for (let col = 0; col < cell[row].children.length-2; col = col+6) {
					cell[row+1].children[col+1].classList.add("alive");
					cell[row+1].children[col+2].classList.add("alive");
					cell[row+1].children[col+3].classList.add("alive");
					cell[row+2].children[col].classList.add("alive");
					cell[row+2].children[col+1].classList.add("alive");
					cell[row+2].children[col+2].classList.add("alive");

				}
			}
		start();

}

function pulsar (){
		const  cell = document.getElementById("grid").children;
		row = 0;
		col = 1;

					cell[row+1].children[col+3].classList.add("alive");
					cell[row+1].children[col+4].classList.add("alive");
					cell[row+1].children[col+5].classList.add("alive");

					cell[row+3].children[col+1].classList.add("alive");
					cell[row+4].children[col+1].classList.add("alive");
					cell[row+5].children[col+1].classList.add("alive");

					cell[row+6].children[col+3].classList.add("alive");
					cell[row+6].children[col+4].classList.add("alive");
					cell[row+6].children[col+5].classList.add("alive");

					cell[row+3].children[col+6].classList.add("alive");
					cell[row+4].children[col+6].classList.add("alive");
					cell[row+5].children[col+6].classList.add("alive");
					//
					//
					cell[row+1].children[col+9].classList.add("alive");
					cell[row+1].children[col+10].classList.add("alive");
					cell[row+1].children[col+11].classList.add("alive");

					cell[row+3].children[col+13].classList.add("alive");
					cell[row+4].children[col+13].classList.add("alive");
					cell[row+5].children[col+13].classList.add("alive");

					cell[row+6].children[col+9].classList.add("alive");
					cell[row+6].children[col+10].classList.add("alive");
					cell[row+6].children[col+11].classList.add("alive");

					cell[row+3].children[col+8].classList.add("alive");
					cell[row+4].children[col+8].classList.add("alive");
					cell[row+5].children[col+8].classList.add("alive");

					//

					cell[row+8].children[col+9].classList.add("alive");
					cell[row+8].children[col+10].classList.add("alive");
					cell[row+8].children[col+11].classList.add("alive");

					cell[row+9].children[col+8].classList.add("alive");
					cell[row+10].children[col+8].classList.add("alive");
					cell[row+11].children[col+8].classList.add("alive");

					cell[row+13].children[col+9].classList.add("alive");
					cell[row+13].children[col+10].classList.add("alive");
					cell[row+13].children[col+11].classList.add("alive");

					cell[row+9].children[col+13].classList.add("alive");
					cell[row+10].children[col+13].classList.add("alive");
					cell[row+11	].children[col+13].classList.add("alive");


					//

					cell[row+8].children[col+3].classList.add("alive");
					cell[row+8].children[col+4].classList.add("alive");
					cell[row+8].children[col+5].classList.add("alive");

					cell[row+9].children[col+6].classList.add("alive");
					cell[row+10].children[col+6].classList.add("alive");
					cell[row+11].children[col+6].classList.add("alive");

					cell[row+13].children[col+3].classList.add("alive");
					cell[row+13].children[col+4].classList.add("alive");
					cell[row+13].children[col+5].classList.add("alive");

					cell[row+9].children[col+1].classList.add("alive");
					cell[row+10].children[col+1].classList.add("alive");
					cell[row+11	].children[col+1].classList.add("alive");





		start();

}
let gametime = 0;
//clearInterval(downloadTimer);
let downloadTimer;
function timer(){
		timerBoolean = true;
		document.getElementById("gametime").innerHTML = "Time: " + gametime +  " sec";
		downloadTimer = setInterval(function(){
		gametime  += 1;
		 document.getElementById("gametime").innerHTML = "Time: " + gametime +  " sec";
		}, 1000);
}


function checkCompleteness()
{
    var form = document.getElementById("endGame");
	var id_error  = 0;
	var first_error  = 0;
	var last_error  = 0;

    if( form.endName.value.length == 0 ) { // name entered
	id_error =	1;
    }

    if( form.endScore.value.length == 0 ) { // password entered
	first_error = 1;
    }

    if( form.endTime.value.length == 0 ) { // passwords agree
	last_error = 1;
    }
	if (id_error == 1 &&  first_error == 1  && last_error == 1 ){
		alert("You must Start the game before End t!");
		return false;
	}else if (id_error == 0 &&  first_error == 1  && last_error == 1 ){
		alert("You must Start the game before End t!");
		return false;
	}else if (id_error == 1 &&  first_error == 0 && last_error == 1 ){
		alert("You must Start the game before End t!");
		return false;
	}else if (id_error == 1 &&  first_error == 1 && last_error == 0 ){
		alert("You must Start the game before End t!");
		return false;
	}else if (id_error == 0 &&  first_error == 0 && last_error == 1 ){
		alert("You must Start the game before End t!");
		return false;
	}else if (id_error == 0 &&  first_error == 1 && last_error == 0 ){
		alert("You must Start the game before End t!");
		return false;
	}else if (id_error == 1 &&  first_error ==  0 && last_error == 0 ){
		alert("You must Start the game before End t!");
		return false;
	}


    // passed all the checks: OK to submit

    return true;
}