console.log("js/force.js is loaded");

var leftEye_x = 78;
var rightEye_x = 135;

function setup(){
	var myCanvas = createCanvas(window.innerWidth, window.innerHeight);
	myCanvas.parent("myPSContainer");
}


function draw() {

	clear();

	if (mouseIsPressed) {
		noStroke();
		fill(244, 35, 0);
		leftEye_x = leftEye_x +1;
		rightEye_x = rightEye_x + 1;

		ellipse(leftEye_x, 70, 16, 32);
		ellipse(rightEye_x, 70, 16, 32);

	} else {
		stroke(0);
		fill("rgba(51,51,51,0.5)");
		// rect(100, 100, 20, 100);
		ellipse(110, 165, 50, 130);
		ellipse(110, 70, 60, 60);
		ellipse(81, 70, 16, 32);
		ellipse(140, 70, 16, 32);
		line(90,120, 50, 160);
		line(130, 120, 170, 160);
	}
}






	/*ellipse(mouseX, mouseY, 80, 80);

	if(mouseIsPressed) { //Do this
		//draw yellow circle
		c = color(255, 204, 0);
		fill(c);
		noStroke();
	} else { // Do this instead
		//draw gray circle
		c = color(65);
		fill(c);
		noStroke();
	};*/
