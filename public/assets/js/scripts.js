import burgerMenu from './libs/burgerMenu.js';
import cardToogle from './libs/cardToogle.js';
import globeAnimation from './libs/globeAnimation.js';
import uploadPreview from './libs/uploadPreview.js';

console.log('✅ script chargé');


burgerMenu();
cardToogle();




const homepageAnimation = document.getElementsByClassName(
    'globe-animation'
).length > 0;

if (homepageAnimation) {
    console.log('✅ globeAnimation() chargé');
    globeAnimation();
}

const imgPreview = document.getElementsByClassName(
    'form__group__image--preview'
).length > 0;

if (imgPreview) {
    console.log('✅ uploadPreview() chargé');
    uploadPreview();
}