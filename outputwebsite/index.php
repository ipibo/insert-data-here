<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="p5/p5.js" charset="utf-8"></script>
    <script src="p5/p5bots.min.js" charset="utf-8"></script>
    <!-- temporary -->
    <script src="js/buttontest.js"></script>

    </script>
  </head>

  <body>
    <video src="../../video.mp4"  poster="posterimage.jpg" id="video">
    </video>

  </body>
</html>


<script type="text/javascript">
  // document.addEventListener("keypress", keyPressed);

  var video = document.getElementById('video'),
    lastTime = -1;

  let score = 0;
  video.play()
  video.height = 500

  // onmousemove
  document.onmousemove = function(e){
    score += 0.6; // dit is variabel
  };

  // this fires when the key is Pressed
  function keyPressed(){
    score += 2// dit is variabel
  }

  function draw(){
    // dit zorgt er voor dat de score weer naar beneden gaat
    if(score > 0 ){
      score -=0.5; // waarde waarmee de score naar beneden gaat
    }
    showHeight();
    showFrameRate();
    setCurrentTime();
  }

  //show height
  function showHeight() {
    video.height = score
  }

  // // increase size
  function increaseHeight(sc) {
    // score += sc
    video.height = score
  }

  // show framerate
  function showFrameRate() {
    video.playbackRate = score
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
