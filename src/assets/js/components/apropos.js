import lottie from 'lottie-web';
import Splitting from 'splitting';

const home = document.querySelector('.home');
const toggleItems = document.querySelectorAll('.explication-toggle-item');
const target = document.querySelectorAll('.apropos-section h2');
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
const mediaQuery = '(max-width: 768px)';
const mediaQueryList = window.matchMedia(mediaQuery);
const containerReves = document.querySelector('#container-reves');
const containerApropos = document.querySelector('#container-apropos');

const sections = document.querySelectorAll('#container-apropos .apropos-section > *');

window.addEventListener( 'load', () => {

    if ( home ) {
        aproposLogoAnimation();
        fadeBackground();
        toggleTheItems();
        textSplitting();
        fadeInSections();
    }
});


function aproposLogoAnimation() {
    const aproposTitle = lottie.loadAnimation({
        container: document.querySelector('.apropos-hero-title') ,
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '/wp-content/themes/_themename/dist/assets/images/apropos/logo-1line-white.json',
        // progressiveLoad: true,
    });

    aproposTitle.addEventListener( 'complete', () => {
        aproposTitle.classList.add('desktop');
    });

    aproposTitle.play();
}


/*****************************************************************************
 * splitting
 *****************************************************************************/


// https://stackoverflow.com/questions/4550505/getting-a-random-value-from-a-javascript-array

function textSplitting() {

    const results = Splitting({ target: target, by: 'chars' });
    coloredHovers.forEach( coloredHover => {
        const chars = coloredHover.querySelectorAll('.apropos-container .char');
        const charsMobile = coloredHover.querySelectorAll('.apropos-container-header-mobile .char');
        chars.forEach( char => {
            char.addEventListener( 'mouseenter', () => {
                const randomColor = colors[Math.floor(Math.random() * colors.length)];
                char.style.color = randomColor;
            });
            char.addEventListener( 'mouseleave', () => {
                setTimeout( function() {
                    char.style.color = '#fcfcfc';
                }, 500 );
            });
        });
        charsMobile.forEach( char => {
            char.addEventListener( 'mouseenter', () => {
                const randomColor = colors[Math.floor(Math.random() * colors.length)];
                char.style.color = randomColor;
            });
            char.addEventListener( 'mouseleave', () => {
                setTimeout( function() {
                    char.style.color = '#303030';
                }, 500 );
            });
        });
    });
}
/*****************************************************************************
 * Fade background
 *****************************************************************************/


function fadeBackground() {
    aproposContainer.addEventListener('scroll', function() {
        const half = aproposContainer.scrollHeight / 2;
        const position = aproposContainer.scrollTop;
        if ( position < half  ) {
            aproposMainContainer.classList.remove('is-fading');
        } else {
            aproposMainContainer.classList.add('is-fading');
        }
    });
}


/*****************************************************************************
 * Toggle
 *****************************************************************************/

function toggleTheItems() {
    toggleItems.forEach( item => {
        const header = item.querySelector('.explication-toggle-item-header');
        const content = item.querySelector('.explication-toggle-item-content');

        header.addEventListener( 'click', () => {
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
}

/*****************************************************************************
 * Remove if resize
 *****************************************************************************/
mediaQueryList.addEventListener('change', event => {
    // UNDER 768px
    if (event.matches && containerAPropos ) {
        checkClasses();
        // OVER 768PX
    }
});


function checkClasses() {
    if ( containerApropos.classList.contains('open') ) {
        containerApropos.classList.remove('open');
        containerReves.classList.remove('closed');
    }
}


/*****************************************************************************
 * Fade In section children
 *****************************************************************************/
function fadeInSections(){

    var mutationObserver = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if ( mutation.type === 'attributes' ) {

                let options = {
                    rootMargin: "0px",
                    threshold: 0.25
                };

                const callback = (entries, observer) => {
                    entries.forEach(entry => {
                        const { target } = entry;

                        if (entry.intersectionRatio >= 0.25) {
                            target.classList.add("fade-in");
                        } else {
                        }
                    });
                };

                const observer = new IntersectionObserver(callback, options);

                sections.forEach((section, index) => {
                    observer.observe(section);
                });


            }
        });
    });

    mutationObserver.observe(document.querySelector('#container-apropos'), {
        attributes: true,
        characterData: true,
        attributeOldValue: true,
        characterDataOldValue: true
    });
}

