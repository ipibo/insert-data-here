let score = 0;

let newDiv = document.createElement('div')
let paragraf = document.createElement('p')
let text = document.createTextNode("score")

newDiv.setAttribute("id", "counter")
paragraf.setAttribute("id","score")

paragraf.appendChild(text)
newDiv.appendChild(paragraf)

document.body.appendChild(newDiv)

document.onmousemove = function(e){
    var x = e.pageX;
    var y = e.pageY;
    score++
    counter = document.getElementById("score")
    counter.innerHTML = score
};

document.onscroll = function(e){
  score++;
  counter = document.getElementById("score")
  counter.innerHTML = score
};

document.body.onload = addElement;

function addElement () {
  // create a new div element
  var newDiv = document.createElement("div");
  // and give it some content
  var newContent = document.createTextNode("Hi there and greetings!");
  // add the text node to the newly created div
  newDiv.appendChild(newContent);

  // add the newly created element and its content into the DOM
  var currentDiv = document.getElementById("div1");
  document.body.insertBefore(newDiv, currentDiv);
}
