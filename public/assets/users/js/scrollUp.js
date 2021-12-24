let toUp = document.querySelector('.top');
let docElem = document.documentElement;
let body = document.body;



window.addEventListener('scroll', (e) => {
    if (window.pageYOffset > 100) {
        toUp.style.display = 'flex';
    } else {
        toUp.style.display = 'none';
    }

});


toUp.addEventListener('click', (e) => {
    window.scroll(0, 0);
});