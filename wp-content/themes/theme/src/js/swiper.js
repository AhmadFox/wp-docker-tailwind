/*
 ** Import Swiper js moduls
 ** Created by Ahmad Gharaibeh @ahmadFox
 ** Core version + navigation, pagination modules:
 */
// import Swiper, { Navigation, Pagination, Autoplay, FadeEffect } from "swiper";
import Swiper from "../../node_modules/swiper/core/core.js"; // 66KB
import Navigation from "../../node_modules/swiper/modules/navigation/navigation.js"; //12Kb
import Pagination from "../../node_modules/swiper/modules/pagination/pagination.js"; // 12KB
import Autoplay from "../../node_modules/swiper/modules/autoplay/autoplay.js"; //0KB
import FadeEffect from "../../node_modules/swiper/modules/effect-fade/effect-fade.js"; //0KB

/*
** Swiper js function for initialize [ Payment Method ] slider
** Position [ In The Footer ]
** Created by Ahmad Gharaibeh @ahmadFox
*/
var swiper = new Swiper(".payment-ethod-swiper", {
    modules: [Pagination],
    slidesPerView: 2,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        476: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        668: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        992: {
            slidesPerView: 5,
            spaceBetween: 40,
        }
    },
});


export const Slider = [];