//create an array for storing all bird objects
var birds = [];
var birdNumber = 300;


//var bird;


function setup() {
    //create full width and full height p5 canvas
    var myCanvas = createCanvas(window.innerWidth, window.innerHeight);
    myCanvas.parent('background-1');


    for (var i = 0; i < birdNumber; i++) {
        birds.push(new Bird(random(0, windowWidth), random(0, windowHeight)));
    }

}


function draw() {
    clear();
    //instead of using clear(), we draw a semi-transparent rectangle as big as the screen.
    //because it has color filled (white), so every frame it overlaps some of the piexels.
    //so we will have trace effect caused by not clearing the canvas
    fill(0, 0, 0, 0);
    rect(0, 0, windowWidth, windowHeight);

    var mousePos = createVector(mouseX, mouseY); //create a vector to store mouse's position


    for (var i = birds.length - 1; i >= 0; i--) {
        birds[i].seek(mousePos);
        birds[i].update();
        birds[i].display();
    };
}

function mouseDragged() {
  birds.push(new Bird(mouseX,mouseY));
}

//the Bird Class, uppercase B of class name for best practice
function Bird(x, y) {

    this.location = createVector(x, y); //create at (x,y)
    //x & y would be passed in when an object is creted

    this.velocity = createVector(-2, -2); //just a random value...
    this.acceleration = createVector(0, 0); //make it 0 for now
    this.r = 5; //radius of the "bird"
    this.maxforce = random(0.001, 0.01);
    this.maxspeed = random(1, 3);



    //finally, move the bird by adding velocity to location
    this.update = function () {

        //update velocity
        this.velocity.add(this.acceleration);
        //limit speed
        this.velocity.limit(this.maxspeed);
        this.location.add(this.velocity);

        //reset acceleration to 0 each cycle.
        this.acceleration.mult(0);
    }

    this.seek = function (target) {

        var desired = p5.Vector.sub(target, this.location);

        //normalize desired and scale to maximum speed
        desired.normalize();
        desired.mult(this.maxspeed);
        // Steering = Desired minus velocity (just remember this magic formule..)
        var steer = p5.Vector.sub(desired, this.velocity);
        steer.limit(this.maxforce); //don't turn too fast, otherwise we lost the steering animation

        //apply the force, we got the acceleration!
        this.acceleration.add(steer);
    }

    this.display = function () {
        var theta = this.velocity.heading() + radians(90);
        fill(50);
        stroke(58);

        push();
        translate(this.location.x, this.location.y);
        rotate(theta);
        beginShape();
        vertex(0, -this.r * 2);
        vertex(-this.r, this.r * 2);
        vertex(this.r, this.r * 2);
        endShape(CLOSE);
        pop();



        //        ellipse(this.location.x, this.location.y, this.r, this.r);
    }
}

function windowResized() {
    resizeCanvas(windowWidth, windowHeight);
}
