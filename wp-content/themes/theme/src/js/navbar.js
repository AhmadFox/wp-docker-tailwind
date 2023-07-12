/*
 ** Custom fumction for submissions form validation
 ** Created by Ahmad Gharaibeh @ahmadFox
 */
 var lastScrollTop, // This Varibale will store the top position
 navbar = document.querySelector("nav.navbar");

window.addEventListener("scroll", function () {
 var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

//  scrollTop

 lastScrollTop = scrollTop; //New Position Stored
});


const hideScroll = () => {
  let html = document.querySelector("html");
  let body = document.querySelector("body");
  body.classList.toggle('overflow-hidden')
  html.classList.toggle('overflow-hidden')
}


const overlay = document.getElementById("overlay");
const toggleOverlay = () => {
  overlay.classList.toggle('z-[-2]');
  overlay.classList.toggle('bg-opacity-40');
}


const btnOpenMenu = document.getElementById("open-menu"),
      btnClosemenu = document.getElementById("close-menu"),
      aside = document.querySelector("aside");

btnOpenMenu.addEventListener("click", (event) => {
  aside.style.right = '0px';
  toggleOverlay();
  hideScroll();
});


btnClosemenu.addEventListener("click", (event) => {
  aside.style.right = null;
  toggleOverlay();
  hideScroll();
});

overlay.addEventListener("click", (event) => {
  aside.style.right = null;
  toggleOverlay();
  hideScroll();
});


// Open Aside Cart
const openCart = document.getElementById("open-cart"),
      modalCart = document.getElementById("modal-cart"),
      closeCart = document.getElementById("close-cart"),
      cartContent = document.getElementById("cart-content");

openCart.addEventListener("click", (event) => {
  modalCart.classList.add('z-10', 'opacity-100');
  cartContent.classList.add('translate-x-0');
  hideScroll();
});

// Close Aside Cart
closeCart.addEventListener("click", (event) => {
  modalCart.classList.remove('z-10', 'opacity-100');
  cartContent.classList.remove('translate-x-0');
  hideScroll();
});

modalCart.addEventListener("click", (event) => {
  modalCart.classList.remove('z-10', 'opacity-100');
  cartContent.classList.remove('translate-x-0');
  hideScroll();
});

export const Navbar = [];