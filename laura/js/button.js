// Board setup
var b = p5.board('/dev/cu.wchusbserial1410', 'arduino');

// Test Pressed, Held, Released
var button;

function setup() {
  createCanvas(600, 200);

  button = b.pin(12, 'BUTTON');

  function redEllipse() {
    console.log('pressed');
    clear();
    noStroke();
    fill(255, 0, 0);
    ellipse(100, 100, 40, 40);
  }

  button.read();
  button.pressed(redEllipse);
  button.released(clear);

}
