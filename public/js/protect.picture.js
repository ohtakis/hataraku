window.onload = init;

function init() {

  var elements = document.getElementsByClassName("protect"); 

  for (var i = elements.length; i--; ) {
    disableDraggingFor(elements[i]);
  }  

}

function disableDraggingFor(element) {
  // this works for FireFox and WebKit in future according to  http://help.dottoro.com/lhqsqbtn.php
  element.draggable = false;
  // this works for older web layout engines
  element.onmousedown = function(event) {
    event.preventDefault();
    return false;
  };
}