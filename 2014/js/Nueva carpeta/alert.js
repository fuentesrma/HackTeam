var imagecoount;
var total;

imagecount = 1;
total = 5;

/* Automated slider function */

window.setInterval( function photoAuto( x ){
    var image = document.getElementById('slide_img');
 	imagecount = imagecount + 1; 
	
	if(imagecount > 5){ imagecount = 1;}
	
	if(imagecount < 1){ imagecount = 5;}
	
	image.src="Images/img"+ imagecount +".jpg"
	
 },4000);

/* end of slider automated function  */

/* click slider function */
function photo( x ){
    var image = document.getElementById('slide_img');
 	imagecount = imagecount + x; 
	
	if(imagecount > 5){ imagecount = 1;}
	
	if(imagecount < 1){ imagecount = 5;}
	

	image.src="Images/img"+ imagecount +".jpg"
	
 }

/* End click slider function */
