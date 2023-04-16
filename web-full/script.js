function generateEmailLink(data, id) {
	var el = document.getElementById(id);
	var addr = data.join('@');
	el.href = 'mailto:' + addr;
	el.textContent = addr;
	el.title = addr;
}

// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
	e.preventDefault();
}

function preventDefaultForScrollKeys(e) {
	if (keys[e.keyCode]) {
		preventDefault(e);
		return false;
	}
}

// modern Chrome requires { passive: false } when adding event
var supportsPassive = false;
try {
	window.addEventListener(
		'test',
		null,
		Object.defineProperty({}, 'passive', {
			get: function() {
				supportsPassive = true;
			},
		}),
	);
} catch (e) {}

var wheelOpt = supportsPassive ? {passive: false} : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

// call this to Disable
function disableScroll() {
	window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
	window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
	window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
	window.addEventListener('keydown', preventDefaultForScrollKeys, false);
}

// call this to Enable
function enableScroll() {
	window.removeEventListener('DOMMouseScroll', preventDefault, false);
	window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
	window.removeEventListener('touchmove', preventDefault, wheelOpt);
	window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
}

function createElement(parent, tag, cssClass) {
	var el = document.createElement(tag);
	el.className = cssClass;
	parent.appendChild(el);
	return el;
}

var imageView = null;

function closeImage() {
	imageView.parentNode.removeChild(imageView);
	imageView = null;
	enableScroll();
};

function showImage(preview) {
	imageView = createElement(document.body, 'div', 'image-view');
	const src = preview.dataset.src;
	imageView.style.backgroundImage = `url('${src}')`;
	imageView.addEventListener('click', closeImage);
	disableScroll();
}

window.addEventListener('keydown', () => {
	if (imageView) closeImage();
});

document.addEventListener('DOMContentLoaded', function(event) {
	var previews = document.getElementsByClassName('image-preview');
	for (var i = 0, max = previews.length; i < max; i++) {
		let preview = previews[i];
		preview.addEventListener('click', function() {
			showImage(preview);
		});
	}
});
