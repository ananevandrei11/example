const glr = document.querySelector('.gallery');
const imgs = document.querySelectorAll('.gallery .gallery-line img');
const glrLine = document.querySelector('.gallery-line');

let count = 0;
let width;
function init() {
	width = document.querySelector('.gallery').offsetWidth;
	glrLine.style.width = width * imgs.length + 'px';
	imgs.forEach(item => {
		item.style.width = width + 'px';
		item.style.height = 'auto';
	})
	rollGlr();
}
init();
window.addEventListener('resize', init);

document.querySelector('.gallery-next').addEventListener('click', () => {
	count++;
	if (count > (imgs.length - 1)) {
		count = 0;
	}
	rollGlr();
});

document.querySelector('.gallery-prev').addEventListener('click', () => {
	count--;
	if (count < 0) {
		count = imgs.length - 1;
	}
	rollGlr();
});

function rollGlr() {
	glrLine.style.transform = `translate(-${count * width}px)`;
}

// SWIPE
glr.addEventListener('touchstart', handleTouchStart, false);
glr.addEventListener('touchmove', handleTouchMove, false);

let y1 = null;
let x1 = null;

function handleTouchStart(event) {
	const firstTouch = event.touches[0];
	x1 = firstTouch.clientX;
	y1 = firstTouch.clientY;

}

function handleTouchMove(event) {
	if (!x1 || !y1) {
		return false;
	}
	let y2 = event.touches[0].clientY;
	let x2 = event.touches[0].clientX;
	let xDiff = x2 - x1;
	let yDiff = y2 - y1;
	if (Math.abs(xDiff) > Math.abs(yDiff)) {
		// right to left
		if (xDiff > 0) {
			console.log('right');
		} else {
			console.log('left');
		}
	} else {
		// top to bottom 
		if (yDiff > 0) {
			console.log('bottom');
		} else {
			console.log('top');
		}
	}
	y1 = null;
	x1 = null;
}



addDarkThemeHtml();
document.querySelector('.themetoggle').addEventListener('click', (e) => {
	e.preventDefault();
	if (localStorage.getItem('theme') === 'dark') {
		localStorage.removeItem('theme');
		addDarkThemeHtml();
	} else {
		localStorage.setItem('theme', 'dark');
		addDarkThemeHtml();
	}
});

function addDarkThemeHtml() {
	try {
		if (localStorage.getItem('theme') === 'dark') {
			document.querySelector('html').classList.add('dark');
			document.querySelector('.themetoggle span').textContent = 'dark_mode';
		} else {
			document.querySelector('html').classList.remove('dark');
			document.querySelector('.themetoggle span').textContent = 'wb_sunny';
		}
	} catch (err) {
		console.log(err);
	}
}

addDarkThemeHtml();