window.addEventListener( 'load', () => {
    removeWelcomeAnimationBackground();
});

function removeWelcomeAnimationBackground() {
    const containerLoadAnimation = document.querySelector('.container-page-load-animation');

    if ( containerLoadAnimation ) {
        containerLoadAnimation.classList.add('hide');
    }

    console.log( 'log-in' );
}
