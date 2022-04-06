const bandeaux = document.querySelectorAll('.bandeau');

bandeaux.forEach( bandeau => {
    const home = document.querySelector('#container-home');
    const bandeauFiltres = document.querySelector('#container-filtres');
    const bandeauFiltresInfo = document.querySelector('#container-filtres-info');
    const bandeauReves = document.querySelector('#container-reves');
    const bandeauApropos = document.querySelector('#container-apropos');
    const button = bandeau.querySelector('.container-cover-title');
    const closeBlack = document.querySelector('.filtres-close #close-black');
    const closeWhite = document.querySelector('#close-white');
    const buttonCloseInfo = document.querySelector('#wrapper-filtres-info #close-black');
    const infoTaxs = document.querySelectorAll('.info-content-taxonomy');
    const lucidite = document.querySelector('.info-content-lucidite');
    const typologie = document.querySelector('.info-content-typologie');

    button.addEventListener( 'click', (e) => {

        // FILTRES
        if ( bandeau.id == 'container-filtres' ) {
            const bandeauOpen = bandeau;
            bandeauOpen.classList.add('open');
            bandeauReves.classList.add('pause');

            if ( bandeauApropos.classList.contains('open') && bandeauReves.classList.contains('closed') ) {
                bandeauApropos.classList.remove('open');
                bandeauReves.classList.remove('closed');
                bandeauOpen.classList.add('open');
            }

        }

        // A PROPOS
        else if ( bandeau.id == 'container-apropos' ) {
            const bandeauOpen = bandeau;
            bandeauOpen.classList.add('open');
            bandeauReves.classList.add('closed');

            if ( bandeauFiltres.classList.contains('open') ) {
                bandeauOpen.classList.add('open');
                bandeauReves.classList.add('closed');
                bandeauFiltres.classList.remove('open');
                bandeauReves.classList.remove('pause');

                // INFO CLOSE
                bandeauFiltresInfo.classList.remove('open');
                if( lucidite.classList.contains('active') && typologie.classList.contains('active') ) {
                    infoTax.classList.remove('active');
                }
            }
        }

        // REVES
        else if ( bandeau.id == 'container-reves' ) {
            const bandeauOpen = bandeau;

            if ( bandeauApropos.classList.contains('open') && bandeauReves.classList.contains('closed') ) {
                bandeauApropos.classList.remove('open');
                setTimeout( ()=> {
                    bandeauReves.classList.remove('closed');
                }, 700 );
            }

        }
    });

    // CLOSE FILTRE
    closeBlack.addEventListener( 'click', () => {
        if ( bandeauFiltres.classList.contains('open') ) {
            bandeauFiltres.classList.remove('open');
            bandeauReves.classList.remove('pause');

            // INFO CLOSE
            bandeauFiltresInfo.classList.remove('open');
            if( lucidite.classList.contains('active') && typologie.classList.contains('active') ) {
                infoTax.classList.remove('active');
            }
        }
    });

    // CLOSE A PROPOS
    closeWhite.addEventListener( 'click', () => {
        if ( bandeauApropos.classList.contains('open') ) {
            bandeauApropos.classList.remove('open');
            setTimeout( ()=> {
                bandeauReves.classList.remove('closed');
            }, 700 );
        }
    });

    // CLICK SUR LE BOUTON D'INFO DANS LA BARRE DE FILTRES
    bandeauFiltres.addEventListener( 'click', (e) => {
        if ( e.target.classList.contains('section-filtres-info') ) {
            const info = e.target;
            const infoData = info.dataset;
            bandeauFiltresInfo.classList.add('open')

            if ( info.dataset.info === 'lucidite' ) {
                lucidite.classList.add('active');
                typologie.classList.remove('active');
            } else if ( info.dataset.info === 'typologie' ) {
                typologie.classList.add('active');
                lucidite.classList.remove('active');
            }

        }
    });

    // FERMER LA MODAL D'INFO
    buttonCloseInfo.addEventListener( 'click', () => {
        bandeauFiltresInfo.classList.remove('open');
    });

    home.addEventListener( 'click', (e) => {
        const isOutside = e.target;
        if ( isOutside.classList.contains('pause') ) {
            bandeauFiltres.classList.remove('open');
            bandeauReves.classList.remove('pause');
        }
    });
});
