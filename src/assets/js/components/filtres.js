// import Glide from '@glidejs/glide'
import Glide, { Breakpoints , Controls } from '@glidejs/glide/dist/glide.modular.esm'

const glideContainer = document.querySelector('.glide');

if ( glideContainer ) {
    slider();
}

function slider(){
    const glide = new Glide('.glide', {
        animationDuration: 750,
        animationTimingFunc: 'ease-in-out',
        type: 'slider',
        startAt: 0,
        perView: 2,
        breakpoints: {
            600: {
                perView: 1
            }
        }
    });

    glide.mount({ Breakpoints, Controls });
}
