
var x = document.getElementById("myRange");
var y = document.getElementById("demo");
y.innerHTML = x.value;
x.oninput = function() {
  y.innerHTML = this.value;
}

var slider = document.getElementById("my2Range");
var output = document.getElementById("demo2");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}

