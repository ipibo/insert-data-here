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

// print(video.currentTime)
let score = 0;

document.onmousemove = function(e){
  score += 0.01;
  video.currentTime = score;
  print(video.currentTime)
};




function print(p){
  console.log(p);
}

</script>
