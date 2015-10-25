// JavaScript Document
var imagecount = 1;
var total = 6;
function photo(x){
	var image = document.getElementById('mian');
	imagecount = imagecount + x;
	if(imagecount > total){imagecount = 1;}
	if(imagecount < 1){imagecount = total;}
	image.src = "Images/img"+ imagecount + ".jpg";
	}
	
window.setInterval(function photoA(){
	var image = document.getElementById('mian');
	imagecount = imagecount + 1;
	if(imagecount > total){imagecount = 1;}
	if(imagecount < 1){imagecount = total;}
	image.src = "Images/img"+ imagecount + ".jpg";
	},5000);