
// Board setup
var b = p5.board('/dev/cu.wchusbserial1410', 'arduino');

//physical button
var button;

function setup(){
  //noCanvas()
  createCanvas(600, 200);
  console.log('hello world');

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

// // Load in video
// let video = document.getElementById('video'),
//   lastTime = -1;
//
// // Score
// let score = 0;
// let scoreFrameRate = 0;
//
// video.play()
// video.height = 500
//
// // onmousemove
// document.onmousemove = function(e){
//   // score += 0.6; // dit is variabel
//   scoreFrameRate += 1
// };
//
// // this fires when the key is Pressed
// function keyPressed(){
//   score += 20 // dit is variabel
// }
//
//
// function draw(){
//   // Decrease score
//   if(score > 0 ){
//     score -=0.5; // waarde waarmee de score naar beneden gaat
//   }
//
//
//   showHeight()
//   decreaseHeight()
//   decreaseFrameRate()
//   //showFrameRate();
//   //setCurrentTime()
// }
//
// function decreaseFrameRate(){
//   if(scoreFrameRate > 0){
//     scoreFrameRate -=0.5;
//   }
// }
//
// function decreaseHeight(){
//   if(score > 20){
//     score -=0.5;
//   }
// }
//
// //show height
// function showHeight() {
//   video.height = score
//   // scoreFrameRate = 0;
// }
//
// // // increase size
// function increaseHeight(sc) {
//   // score += sc
//   video.height = score
// }
//
// // // show framerate
// // function showFrameRate() {
// //   video.playbackRate = scoreFrameRate
// // }
// //
// // //  set framerate
// // function setFrameRate(fr) {
// //   video.playbackRate = score
// //}
//
// // set currenttime
// function setCurrentTime(){
//   video.currenttime = score
// }
//
// // set  volume
// function setVolume(){
//   video.volume = score
// }
