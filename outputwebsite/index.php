<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>clickittillyoumakeit</title>
    <script src="p5/p5.js" charset="utf-8"></script>
    <script src="p5/p5bots.min.js" charset="utf-8"></script>
    <script src="buttontest.js"></script>
    </script>
  </head>

  <body>
    <video src="../../video.mp4"  poster="posterimage.jpg" id="video">
    </video>

  </body>
</html>

<script type="text/javascript">
  let video = document.getElementById('video'),
    lastTime = -1;

  let score = 0;
  let scoreFrameRate = 0;
  video.play()
  video.height = 500

  // onmousemove
  document.onmousemove = function(e){
    // score += 0.6; // dit is variabel
    scoreFrameRate += 100
  };

  // this fires when the key is Pressed
  function keyPressed(){
    score += 20// dit is variabel
  }

  // //button test keypress char.
  // function keyPressed2(){
  //   if (keyCode === UP_ARROW) {
  //     score += 0.2 // variable
  //   }
  // }

  function draw(){
    // dit zorgt er voor dat de score weer naar beneden gaat
    // if(score > 0 ){
    //   score -=0.5; // waarde waarmee de score naar beneden gaat
    // }

    // decreaseHeight()
    // decreaseFrameRate()
    // showHeight()
    showFrameRate();
    // setCurrentTime()
  }


  function decreaseFrameRate(){
    if(scoreFrameRate > 0){
      scoreFrameRate -=0.5;
    }
  }

  function decreaseHeight(){
    if(score > 20){
      score -=0.5;
    }
  }

  //show height
  function showHeight() {
    video.height = score
    // scoreFrameRate = 0;
  }

  // // increase size
  function increaseHeight(sc) {
    // score += sc
    video.height = score
  }

  // show framerate
  function showFrameRate() {
    video.playbackRate = scoreFrameRate
  }

  // // set framerate
  function setFrameRate(fr) {
    video.playbackRate = score
  }

  // set currenttime
  function setCurrentTime(){
    video.currenttime = score
  }

  // set  volume
  function setVolume(){
    video.volume = score
  }

  function setup(){
    noCanvas()
  }




</script>
