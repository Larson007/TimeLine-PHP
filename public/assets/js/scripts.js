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


// const scrollTimeline = document.getElementsByClassName(
//     'pg-wrapper'
// ).length > 0;

// if (scrollTimeline) {
//     /* Checking the screen width and if it is less than 780px it will run the scrollVertical function. */
//     if (screen.width < 780) {
//         console.log('✅ pageableVertical() chargé');
//         scrollVertical();
//     }
//     /* Checking the screen width and if it is more than 780px it will run the scrollHorizontal function. */
//     else {
//         console.log('✅ pageableHorizontal() chargé');
//         scrollHorizontal();
//     }
// }





/* Checking the screen width and if it is less than 780px it will run the scrollVertical function. */
if (screen.width <= 780) {
    console.log('✅ pageableVertical() chargé');
    const pageable = new Pageable("article", {
        freeScroll: true, // allow manual scrolling when dragging instead of automatically moving to next page
        swipeThreshold: 200, // swipe / mouse drag distance (px) before firing the page change event
        infinite: true, // enable infinite scrolling (from 0.4.0)
        throttle: 50, // the interval in ms that the resize callback is fired
        orientation: "vertical", // or horizontal
    });
}
/* Checking the screen width and if it is more than 780px it will run the scrollHorizontal function. */
else {
    console.log('✅ pageableHorizontal() chargé');

    const bar = document.querySelector(".bar");
    const svg = document.querySelector("svg");
    const circle = svg.querySelector("circle");
    const r = circle.getAttribute("r");
    const circ = 2 * Math.PI * r;

    const pages = new Pageable("article", {
        freeScroll: true, // allow manual scrolling when dragging instead of automatically moving to next page
        swipeThreshold: 200, // swipe / mouse drag distance (px) before firing the page change event
        infinite: true, // enable infinite scrolling (from 0.4.0)
        throttle: 50, // the interval in ms that the resize callback is fired
        pips: false, // display the pips
        orientation: "horizontal", // or horizontal
    });

    pages.on("scroll", update);

    function update(data) {
        const pos = round(1 - (data.max - data.scrolled) / data.max, 3);

        circle.style.strokeDashoffset = circ - circ * pos;
        bar.style.transform = `scale(${pos}, 1)`;
    }
    function round(value, decimals) {
        return Number(Math.round(value + "e" + decimals) + "e-" + decimals);
    }
    // });
}






