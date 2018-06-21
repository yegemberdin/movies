'use strict';
window.onload = function(){
	
	var cart = document.getElementById('cart');
	var crt = document.getElementById('crt');
	var btncart = document.getElementById('btncart');
	var h = document.getElementById('ad');
	var ok = document.getElementById('ok');

	cart.onclick = function(){
		btncart.style.display = 'block';
		// btncart.style.top =  0;
	}
	crt.onclick = function(){
		crt.style.visibility = 'hidden';
		ok.style.visibility = 'visible';
		h.style.opacity = 1;
	}
	ok.onclick = function(){

		ok.style.visibility = 'hidden';
		h.style.opacity = 0;
		crt.style.visibility = 'visible';
		btncart.style.display = 'none';
	}

};
