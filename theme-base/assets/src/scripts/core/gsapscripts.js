


const wrapper = document.querySelector('.vid-wrapper');

wrapper.addEventListener('mousemove', e =>{
    let xval = -(e.clientX-742.316650390625);
    gsap.to('.tomove',{x:xval})
})
