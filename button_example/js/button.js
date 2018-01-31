// Board setup
var b = p5.board('/dev/cu.wchusbserial1410', 'arduino');

// Test Pressed, Held, Released
var button;

function setup() {

  button = b.pin(12, 'BUTTON');

  function roodstipje() {
    console.log('pressed');
    scoreButton += 20
    console.log('scoreButton');

    clear();
  }

  button.read();
  button.pressed(roodstipje);
  button.released(clear);

}
