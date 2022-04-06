import lottie from 'lottie-web';
import barba from "@barba/core";
import barbaCss from '@barba/css';

// tell Barba to use the css plugin
// barba.use(barbaCss);

barba.init({
    debug: true,
    timeout: 5000,
    transitions: [{
        once(data) {
            playWelcomeAnimation();
        },
        // name: "fade",
        leave() {
            removeWelcomeAnimationBackground();
        },
        enter(data) {
            addWelcomeAnimationBackground();
        },
        beforeEnter(data) {
            const myContainer = data.next.container;

            addHideClass();

            if ( myContainer ) {
                const myScripts = document.querySelectorAll('script');

                myScripts.forEach( nextScript => {
                    const src = nextScript.src;

                    if (document.head.querySelector('script[src="' + src + '"]') == undefined) {
                        //Have to create a new script element in order for the browser to execute the code
                        const newScript = document.createElement('script');
                        newScript.src = src;
                        newScript.async = true;
                        document.head.append(newScript);

                        nextScript.remove(); // Cleaning up the script in the container;
                    }
                });
            }
        },
    }]
});



// lottie
function playWelcomeAnimation() {
    const loadingAnimationLogo  = document.querySelector('.page-load-animation-element');
    const containerLoadAnimation = document.querySelector('.container-page-load-animation');
    const logoAnimation = lottie.loadAnimation({
        container: loadingAnimationLogo,
        renderer: 'svg',
        loop: false,
        path: '/wp-content/themes/_themename/dist/assets/images/intro-animation.json',
        autoplay: true,
        progressiveLoad: true,
    });

    logoAnimation.addEventListener( 'complete', (e) => {
        console.log( 'loading ?' );
        containerLoadAnimation.classList.add('hide');
    });

    logoAnimation.play();
}

function removeWelcomeAnimationBackground() {
    const containerLoadAnimation = document.querySelector('.container-page-load-animation');

    if ( containerLoadAnimation ) {
        containerLoadAnimation.classList.add('hide');
    }
}

function addWelcomeAnimationBackground() {
    const containerLoadAnimation = document.querySelector('.container-page-load-animation');

    if ( containerLoadAnimation ) {
        containerLoadAnimation.classList.remove('hide');
    }
}

function addHideClass() {
    const containerLoadAnimation = document.querySelector('.container-page-load-animation');
    containerLoadAnimation.classList.add('hide');
}
