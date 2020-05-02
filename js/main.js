$(function (){
  $("#header").load("https://noneximi.github.io/sdsgc-heaven/header.html");
});

function generalguideshow(id) {
  var arrayOfElements = document.getElementsByClassName('gtipsbox');
  var lengthOfArray = arrayOfElements.length;

  for (var i=0; i<lengthOfArray;i++){
    arrayOfElements[i].style.display='none';
  }
  document.getElementById(id).style.display = 'block';
}
