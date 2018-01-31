<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>




  <body>

    <video src="../../video.mp4"  poster="posterimage.jpg" id="video">

    </video>

  </body>
</html>


<script type="text/javascript">

  var video = document.getElementById('video'),
    lastTime = -1;

  let score = 0;

  document.onmousemove = function(e){
    // score += 0.01;
    // video.currentTime = score;

    // print(video.currentTime)

    // let random = Math.random() * 0.8 +0.2
    // print(random)
    // video.volume = random

  };


  function print(p){
    console.log(p);
  }

</script>
