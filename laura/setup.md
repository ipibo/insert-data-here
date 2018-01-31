# Dummy Notes for setting up


## Arduino
Arduino IDE Upload > `File > Examples > Firmata > StandardFirmata`

## Get p5bots server
Terminal > Install p5bots-server by running: `npm install -g p5bots-server`


- Folder structure
    index.html
    sketch.js
    scripts/p5.js
            p5bots.js


- Link Libs!

```html
<body>
  <script src="https://cdn.socket.io/socket.io-1.3.5.js"></script>
  <script src="scripts/p5.min.js"></script>
  <script src="scripts/p5bots.js"></script>
  <script src="sketch.js"></script>
</body>
```

- Set-up in sketch.js

```js
var b = p5.board('/dev/cu.usbmodem1421', 'arduino');
var button;

function setup(){
  button = b.pin(9, 'BUTTON');
}
```  

- Set up board and connect
  diagram `img/buttonled.png`

- Start server: `bots-go -d + folder destination`

- go to `localhost:8000`

- enjoy
