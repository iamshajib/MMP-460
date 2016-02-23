var x, y;

function setup() {
  var myCanvas = createCanvas(window.innerWidth, window.innerHeight);
	myCanvas.parent("myPSContainer");
  // Starts in the middle
  x = width / 2;
  y = height;
}

function draw() {
  background(200);

  // Draw a circle
  stroke(50);
  fill(100);
  ellipse(x, y, 110, 165, 50, 130);
	ellipse(x, y, 165, 110, 50, 130);
	// ellipse(x, y, 81, 70, 16, 32);
	// ellipse(x, y, 140, 70, 16, 32);
	line(x, y, 90,120, 50, 160);
	line(x, y, 1230, 120, 170, 160);

	line(x, y, 50,120, 50, 160);
	line(x, y, 1270, 120, 170, 160);




  // Jiggling randomly on the horizontal axis
  x = x + random(-1, 1);
  // Moving up at a constant speed
  y = y - 1;

  // Reset to the bottom
  if (y < 0) {
    y = height;
  }
}
