// 'use strict';


// $(function)() {


// var width = 720;
// var animationspeed = 1000;
// var pause = 3000;
// var currentSlide = 1; 


// var $(slider = $)('#slider');
// var $(slidecontainer = $ slider).find('.slides');
// var $(slides = $ slidecontainer).find('slide');

// var interval;

function loadimage(file){
	const root = document.getElementById('slider');
	var img = document.createElement('img');
	img.setAttribute("src", file);
	img.style.display = "block";
	root.appendChild(img);
}

// function startSlider(){
// 	interval = setInterval(function(){
// 		$ slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function()
// 			currentSlide++;
// 			if (currentSlide == $slides.length) {
// 				currentSlide = 1;
// 				$slideContainer.css('margin-left',0);
// 			}
// 		});
// 	}, pause);
// }
window.onload = function() {
	loadimage("Images/luce-Image-slider-1.png");
	loadimage("Images/luce-Image-slider-2.png");
	loadimage("Images/luce-Image-slider-3.png");
	loadimage("Images/luce-Image-slider-4.png");
	loadimage("Images/luce-Image-slider-5.png");
	loadimage("Images/luce-Image-slider-6.png");
}


// function stopSlider() {
// 	clearInterval(interval);
// }

// $slider.on ('mouseenter', stopSlider).on('mouseleave', startSlider);