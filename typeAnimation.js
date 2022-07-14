var i = 0;
var txt = 'Hello, I am a web developer. I love to create websites and web applications. I am a full stack web developer. I will';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("type").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}