import lottie from 'lottie-web';
import Splitting from 'splitting';

const toggleItems = document.querySelectorAll('.explication-toggle-item');
const target = document.querySelectorAll('.apropos-section h2');
const results = Splitting({ target: target, by: 'chars' });
const cauchemar =  '#6755AA';
const concomitant =  '#2CAF38';
const creatif =  '#F79D65';
const actualite =  '#99BA22';
const recurrent =  '#DB5931';
const sexuel =  '#D67083';
const premonitoire =  '#4CA58E';
const lucide =  '#c12b2b';
const bonheur = '#1C0C5B';
const coloredHovers = document.querySelectorAll('.apropos-section h2');
const aproposContainer = document.querySelector('.apropos-container');
const aproposMainContainer = document.querySelector('#container-apropos');
const colors = [ cauchemar, concomitant, creatif, actualite, recurrent, sexuel, premonitoire, lucide, bonheur ];

window.addEventListener( 'load', (e) => {
    aproposLogoAnimation();
});


function aproposLogoAnimation() {
    const aproposTitle = lottie.loadAnimation({
        container: document.querySelector('.apropos-hero-title') ,
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '/wp-content/themes/_themename/dist/assets/images/apropos/logo-1line-white.json',
        progressiveLoad: true,
    })

    aproposTitle.addEventListener( 'complete', (e) => {
        aproposTitle.classList.add('desktop');
    });

    aproposTitle.play();
}


/*****************************************************************************
 * splitting
 *****************************************************************************/


// https://stackoverflow.com/questions/4550505/getting-a-random-value-from-a-javascript-array

coloredHovers.forEach( coloredHover => {
    const chars = coloredHover.querySelectorAll('.char');
    chars.forEach( char => {
        char.addEventListener( 'mouseenter', (e) => {
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            char.style.color = randomColor;
        });
        char.addEventListener( 'mouseleave', (e) => {
            setTimeout( function() {
                char.style.color = '#fff';
            }, 500 );
        });
    });
});

/*****************************************************************************
 * Fade background
*****************************************************************************/

aproposContainer.addEventListener('scroll', function(e) {
    const half = aproposContainer.scrollHeight / 2;
    const position = aproposContainer.scrollTop;
    if ( position < half  ) {
        aproposMainContainer.classList.remove('is-fading');
    } else {
        aproposMainContainer.classList.add('is-fading');
    }
});


/*****************************************************************************
 * Toggle
*****************************************************************************/

toggleItems.forEach( item => {
    const header = item.querySelector('.explication-toggle-item-header');
    const content = item.querySelector('.explication-toggle-item-content');

    header.addEventListener( 'click', (e) => {
        if ( content.classList.contains('toggle-open') ) {
            content.classList.remove('toggle-open');

            if (content.style.maxHeight){
                content.style.maxHeight = null;
            }

        }
        else if ( !content.classList.contains('toggle-open') ) {
            const activeElements = Array.from(document.querySelectorAll('.toggle-open'));
            activeElements.forEach(activeElement => {
                const activeText = activeElement.classList.contains('explication-toggle-item-content');
                if ( activeText ) {
                    const theActiveText = activeElement;
                    if ( theActiveText.style.maxHeight ) {
                        theActiveText.style.maxHeight  = null;
                    }
                }
                activeElement.classList.remove('toggle-open');
            });

            content.classList.add('toggle-open');
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
});
