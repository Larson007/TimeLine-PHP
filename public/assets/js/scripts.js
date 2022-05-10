import burgerMenu from './libs/burgerMenu.js';
import cardToogle from './libs/cardToogle.js';
import globeAnimation from './libs/globeAnimation.js';
import uploadPreview from './libs/uploadPreview.js';
import scroll from './libs/scroll.js';

console.log('✅ script chargé');


burgerMenu();
cardToogle();

scroll();




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

// const scrollTimeline = document.getElementById(
//     'container'
// ).length > 0;

// if (scrollTimeline) {
//     console.log('✅ pageable() chargé');
//     scroll();
// }

