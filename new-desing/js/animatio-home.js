// I've added annotations to make this easier to follow along at home. Good luck learning and check out my other pens if you found this useful

$(document ).ready(function() {
// First let's set the colors of our sliders
const settings = {
  fill: '#28a745',
  background: '#28a745' };







// First find all our sliders
const sliders = document.querySelectorAll('.range-slider');

// Iterate through that list of sliders
// ... this call goes through our array of sliders [slider1,slider2,slider3] and inserts them one-by-one into the code block below with the variable name (slider). We can then access each of wthem by calling slider
Array.prototype.forEach.call(sliders, slider => {
  // Look inside our slider for our input add an event listener
  //   ... the input inside addEventListener() is looking for the input action, we could change it to something like change
  slider.querySelector('input').addEventListener('input', event => {
    // 1. apply our value to the span
    slider.querySelector('span').innerHTML = event.target.value;
	
	var imgno=event.target.value;
	//alert(imgno);
	var imgnams='images/new_arival/EP8/slider'+imgno+'.jpg';
		
		document.getElementById('images-slides').src=imgnams;
		//$("#images-slides").attr("src",imgnams);
    // 2. apply our fill to the input
    applyFill(event.target);
  });
  // Don't wait for the listener, apply it now!
  applyFill(slider.querySelector('input'));
});





// First find all our sliders2
const sliders2 = document.querySelectorAll('.range-slider2');

// Iterate through that list of sliders
// ... this call goes through our array of sliders [slider1,slider2,slider3] and inserts them one-by-one into the code block below with the variable name (slider). We can then access each of wthem by calling slider
Array.prototype.forEach.call(sliders2, slider2 => {
  // Look inside our slider for our input add an event listener
  //   ... the input inside addEventListener() is looking for the input action, we could change it to something like change
  slider2.querySelector('input').addEventListener('input', event => {
    // 1. apply our value to the span
    slider2.querySelector('span').innerHTML = event.target.value;
	
	var imgno=event.target.value;
	//alert(imgno);
	var imgnams='images/new_arival/ORBIT720/slider'+imgno+'.jpg';
		
		document.getElementById('images-slides2').src=imgnams;
		//$("#images-slides").attr("src",imgnams);
    // 2. apply our fill to the input
    applyFill(event.target);
  });
  // Don't wait for the listener, apply it now!
  applyFill2(slider2.querySelector('input'));
});








// First find all our sliders3
const sliders3 = document.querySelectorAll('.range-slider3');

// Iterate through that list of sliders
// ... this call goes through our array of sliders [slider1,slider2,slider3] and inserts them one-by-one into the code block below with the variable name (slider). We can then access each of wthem by calling slider
Array.prototype.forEach.call(sliders3, slider3 => {
  // Look inside our slider for our input add an event listener
  //   ... the input inside addEventListener() is looking for the input action, we could change it to something like change
  slider3.querySelector('input').addEventListener('input', event => {
    // 1. apply our value to the span
    slider3.querySelector('span').innerHTML = event.target.value;
	
	var imgno=event.target.value;
	//alert(imgno);
	var imgnams='images/new_arival/EP6/slider'+imgno+'.jpg';
		
		document.getElementById('images-slides3').src=imgnams;
		//$("#images-slides").attr("src",imgnams);
    // 2. apply our fill to the input
    applyFill(event.target);
  });
  // Don't wait for the listener, apply it now!
  applyFill3(slider3.querySelector('input'));
});








// First find all our sliders4
const sliders4 = document.querySelectorAll('.range-slider4');

// Iterate through that list of sliders
// ... this call goes through our array of sliders [slider1,slider2,slider4] and inserts them one-by-one into the code block below with the variable name (slider). We can then access each of wthem by calling slider
Array.prototype.forEach.call(sliders4, slider4 => {
  // Look inside our slider for our input add an event listener
  //   ... the input inside addEventListener() is looking for the input action, we could change it to something like change
  slider4.querySelector('input').addEventListener('input', event => {
    // 1. apply our value to the span
    slider4.querySelector('span').innerHTML = event.target.value;
	
	var imgno=event.target.value;
	//alert(imgno);
	var imgnams='images/new_arival/EP5/slider'+imgno+'.jpg';
		
		document.getElementById('images-slides4').src=imgnams;
		//$("#images-slides").attr("src",imgnams);
    // 2. apply our fill to the input
    applyFill(event.target);
  });
  // Don't wait for the listener, apply it now!
  applyFill4(slider4.querySelector('input'));
});



});


// This function applies the fill to our sliders by using a linear gradient background
function applyFill(slider) {
  // Let's turn our value into a percentage to figure out how far it is in between the min and max of our input
  const percentage = 100 * (slider.value - slider.min) / (slider.max - slider.min);
  // now we'll create a linear gradient that separates at the above point
  // Our background color will change here
  const bg = `linear-gradient(90deg, ${settings.fill} ${percentage}%, ${settings.background} ${percentage + 0.1}%)`;
  slider.style.background = bg;
}
//# sourceURL=pen.js





// This function applies the fill to our sliders by using a linear gradient background
function applyFill2(slider2) {
  // Let's turn our value into a percentage to figure out how far it is in between the min and max of our input
  const percentage = 100 * (slider2.value - slider2.min) / (slider2.max - slider2.min);
  // now we'll create a linear gradient that separates at the above point
  // Our background color will change here
  const bg = `linear-gradient(90deg, ${settings.fill} ${percentage}%, ${settings.background} ${percentage + 0.1}%)`;
  slider2.style.background = bg;
}
//# sourceURL=pen.js





// This function applies the fill to our sliders by using a linear gradient background
function applyFill3(slider3) {
  // Let's turn our value into a percentage to figure out how far it is in between the min and max of our input
  const percentage = 100 * (slider3.value - slider3.min) / (slider3.max - slider3.min);
  // now we'll create a linear gradient that separates at the above point
  // Our background color will change here
  const bg = `linear-gradient(90deg, ${settings.fill} ${percentage}%, ${settings.background} ${percentage + 0.1}%)`;
  slider3.style.background = bg;
}
//# sourceURL=pen.js




// This function applies the fill to our sliders by using a linear gradient background
function applyFill4(slider4) {
  // Let's turn our value into a percentage to figure out how far it is in between the min and max of our input
  const percentage = 100 * (slider4.value - slider4.min) / (slider4.max - slider4.min);
  // now we'll create a linear gradient that separates at the above point
  // Our background color will change here
  const bg = `linear-gradient(90deg, ${settings.fill} ${percentage}%, ${settings.background} ${percentage + 0.1}%)`;
  slider4.style.background = bg;
}
//# sourceURL=pen.js

