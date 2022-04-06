/*****************************************************************************
 * Afficher l'age au dessus du curseur
 * https://css-tricks.com/value-bubbles-for-range-inputs/
 *****************************************************************************/
const ageContainer = document.querySelector('#item-age');
const range = document.querySelector('#acf-field_624833e24aed0');
const output = `<output id="age-output" for="acf[field_624833e24aed0]"></output>`;

document.addEventListener( 'DOMContentLoaded', () => {
    if ( range ){
        range.insertAdjacentHTML( "afterend", output );
    }
});


window.addEventListener( 'load', () => {
    const bubble = document.querySelector('#age-output');

    if ( range ) {
        createBubble(range, bubble);
    }
});

function createBubble() {
    range.addEventListener("input", () => {
        setBubble(range, bubble);
    });
    setBubble(range, bubble);
}

function setBubble(range, bubble) {
  const val = range.value;
  const min = range.min ? range.min : 0;
  const max = range.max ? range.max : 100;
  const newVal = Number(((val - min) * 100) / (max - min));
  bubble.innerHTML = val;

  // Sorta magic numbers based on size of the native UI thumb
  bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
}
