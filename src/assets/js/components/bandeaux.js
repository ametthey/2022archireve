const bandeaux = document.querySelectorAll('.bandeau');

bandeaux.forEach( bandeau => {
    const bandeauFiltres = document.querySelector('#container-filtres');
    const bandeauReves = document.querySelector('#container-reves');
    const coverREves = bandeauReves.querySelector('.container-cover-reves');
    const bandeauApropos = document.querySelector('#container-apropos');
    const button = bandeau.querySelector('.container-cover-title');
    const closeBlack = document.querySelector('#close-black');
    const closeWhite = document.querySelector('#close-white');

    button.addEventListener( 'click', (e) => {
        if ( bandeau.id == 'container-filtres' ) {
            const bandeauOpen = bandeau;
            bandeauOpen.classList.add('open');
        }

        else if ( bandeau.id == 'container-reves' ) {
        }

        else if ( bandeau.id == 'container-apropos' ) {
            const bandeauOpen = bandeau;
            console.log( 'apropos' );
            bandeauOpen.classList.add('open');
            bandeauReves.classList.add('closed');
        }
    });

    closeBlack.addEventListener( 'click', (e) => {
        if ( bandeauFiltres.classList.contains('open') ) {
            bandeauFiltres.classList.remove('open');
        }
    });

    closeWhite.addEventListener( 'click', (e) => {
        if ( bandeauApropos.classList.contains('open') && bandeauReves.classList.contains('closed') ) {
            bandeauApropos.classList.remove('open');
            bandeauReves.classList.remove('closed');
        }
    });
});
