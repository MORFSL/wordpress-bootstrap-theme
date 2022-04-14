const wrapper = document.querySelector('.vid-wrapper');

const english = document.querySelector('.english-banner');
const music = document.querySelector('.music-banner');

/*eslint no-unused-vars: "off"*/
function changeVid(x) {
	if (x == 'english') {
		if (english.classList.contains('active') == false) {
			english.classList.add('active');
			document.querySelector('.vid-english').style.opacity = 1;
			music.classList.remove('active');
		}
	}
	if (x == 'music') {
		if (music.classList.contains('active') == false) {
			music.classList.add('active');
			document.querySelector('.vid-english').style.opacity = 0;
			english.classList.remove('active');
		}
	}
}

wrapper.addEventListener('mousemove', e => {
	let xval = -(e.clientX - 742.316650390625) / 10;
	// eslint-disable-next-line no-undef
	gsap.to('.tomove', { x: xval });
});
