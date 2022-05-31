import burgerMenu from './libs/burgerMenu.js';
import cardToogle from './libs/cardToogle.js';
import globeAnimation from './libs/globeAnimation.js';
import uploadPreview from './libs/uploadPreview.js';
import scrollVertical from './libs/scrollVertical.js';
import scrollHorizontal from './libs/scrollHorizontal.js';

console.log('✅ script chargé');


burgerMenu();
cardToogle();

//scrollVertical();




const homepageAnimation = document.getElementsByClassName(
    'globe-animation'
).length > 0;

if (homepageAnimation) {
    console.log('✅ globeAnimation() chargé');
    globeAnimation();
}

const imgPreview = document.getElementsByClassName(
    'thumbnail__preview'
).length > 0;

if (imgPreview) {
    console.log('✅ uploadPreview() chargé');
    uploadPreview();
}


const scrollTimeline = document.getElementsByClassName(
    'pg-wrapper'
).length > 0;

if (scrollTimeline) {
    /* Checking the screen width and if it is less than 780px it will run the scrollVertical function. */
    if (screen.width < 780) {
        console.log('✅ pageableVertical() chargé');
        scrollVertical();
    }
    /* Checking the screen width and if it is more than 780px it will run the scrollHorizontal function. */
    else {
        console.log('✅ pageableHorizontal() chargé');
        scrollHorizontal();
    }
}

