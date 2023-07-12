/*
** Import Lazysizes plugin
** Created by Ahmad Gharaibeh @ahmadFox
*/
import Lazysizes from "lazysizes";




/*
** Import AOS animation library
** Created by Ahmad Gharaibeh @ahmadFox
*/
// import AOS from "aos";
// AOS.init();




/*
** Import Glide Slider library
** Created by Ahmad Gharaibeh @ahmadFox
*/
import Glide from '@glidejs/glide';

// Check if Clollections page located
document.querySelector('#glide-collections') ?
new Glide('#glide-collections', {
    // type: "carousel",
    startAt: 0,
    hoverpause: true,
    rewind: false,
    bound: true,
	breakpoints: {
        513: {
            perView:1,
            gap: 15,
        },
        763: {
            perView:2,
            gap: 20,
        },
        1023: {
            perView:3,
            gap: 25,
        }
	}
}).mount() : null;

// Check if Product page located
document.querySelector('#glide-product') ?
new Glide('#glide-product', {
    perView:1,
    gap: 15,
    startAt: 0,
    hoverpause: true,
    rewind: false,
    bound: true,
}).mount() : null;

export const Init = [];