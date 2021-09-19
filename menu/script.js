let rootNav = document.querySelector('.root-nav');

rootNav.onclick = function(event) {
	if (event.target.nodeName !== 'SPAN') return;
	console.log(event);
	event.target.nextElementSibling.classList.toggle('sub-menu-active');
};
