const reves = document.querySelectorAll('.reve-item');
reves.forEach( reve => {
    const header = reve.querySelector('.reve-item-header');
    const content = reve.querySelector('.reve-item-content');
    const footer = reve.querySelector('.reve-item-footer');

    header.addEventListener( 'click', (e) => {

        if ( content.classList.contains('open') ) {
            content.classList.remove('open');
            footer.classList.remove('open');

            if (content.style.maxHeight){
                content.style.maxHeight = null;
            }

        }
        else if ( !content.classList.contains('open') ) {
            const activeElements = Array.from(document.querySelectorAll('.open'));
            activeElements.forEach(activeElement => {
                const activeText = activeElement.classList.contains('reve-item-content');
                if ( activeText ) {
                    const theActiveText = activeElement;
                    if ( theActiveText.style.maxHeight ) {
                        theActiveText.style.maxHeight  = null;
                    }
                }
                activeElement.classList.remove('open');
            });

            content.classList.add('open');
            footer.classList.add('open');
            content.style.maxHeight = content.scrollHeight + "px";
        }

    });
});
