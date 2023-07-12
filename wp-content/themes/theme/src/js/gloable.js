/*
** Global Variables
** Created by Ahmad Gharaibeh @ahmadFox
*/
const html = document.querySelector("html"), // Select <html> tage element
      navMenu = document.querySelector("nav#nav-menu"), // Select <nav> tage element
      navMobi = document.querySelector("nav#nav-Mobile"); // Select <nav> tage element



/*
** Function for set home page [Scroll Snap]
** Created by Ahmad Gharaibeh @ahmadFox
*/
const homePage = document.getElementById('home-main');

// Check if home page is located
if ( homePage ) {

    // Select all sections only in [ home page ]
    const homeSections = homePage.querySelectorAll('section.snap-end');

    // Add [ Snap Scroll Behavior ] classes only in [ Home Page ]
    html.classList.add('snap-y', 'snap-mandatory');

    // Arrow function for set <section> height, to use in multible case [ first lunch page OR resize window ]
    const sectionHeight = () => {
      // Declare <section> height depend on (window height) subtracts of (navbar menu height)
      const sectionHeight = window.innerHeight - (navMenu.clientHeight + navMobi.clientHeight);
    
      // Set height for each <section> in home page
      homeSections.forEach((section) => {
        section.style.height = `${sectionHeight + 2}px`;
      });
    }

    // Remove [ Snap Scroll Behavior ] classes to appearr <footer> if scrolled to last <section>
    // 1- Get last <section> in [ Home Page ]:
    const lastSection = homeSections[homeSections.length - 1];
    
    // 2- Create { scroll event } to defined last section posetion:
    window.onscroll = function() {

      // Get top postion for last <section>
      let lastTopSecPos = lastSection.getBoundingClientRect().top.toFixed();

      // 3- Check if scrolled to last <section> 
      lastTopSecPos <= (navMenu.clientHeight + navMobi.clientHeight)
      ? html.classList.remove('snap-y', 'snap-mandatory') // if <Ture> remove [ Snap Scroll Behavior ]
      : html.classList.add('snap-y', 'snap-mandatory'); // else add [ Snap Scroll Behavior ]

    }

  // Trigger set <section> height function
  sectionHeight();

  // In case client [ Resize browser window ] for some reason
  onresize = (event) => {
    sectionHeight();
  };

}




/*
** Function for set product page [ Scroll Gallery ] -- only for Tablet and up --
** Created by Ahmad Gharaibeh @ahmadFox
*/
const productPage = document.getElementById('product-main');

// Check if product page is located
if ( productPage ) {

  // Add [ Scroll Padding ] to <html>
  html.style.scrollPadding = '8em';

  // Get gallery [ slide items ]
  const slideItems = document.querySelectorAll('.slide-item');

  // Get [ slide items ] count
  const slidesCount = slideItems.length;

  // Create [ Pagenation Bullets ]
  const bulletsContainer = document.querySelector('#slide-bullets');
  
  for ( let i = 0; i < slidesCount; i++ ) {
      let li = document.createElement('li');
      li.className = 'w-3 h-3 flex items-center justify-center';
      li.innerHTML = `<a href="#slide-${i + 1}" class="w-2 h-2 border border-primary-600 rounded-full bg-transparent block transition-all ease-in-out duration-300"></a>`;
      bulletsContainer.appendChild(li);
  }

  // Add [ Active Status ] classes to first Bullet
  const firstBullet = bulletsContainer.querySelector('#slide-bullets li > a');
  firstBullet.classList.add('!w-3', '!h-3', 'bg-primary-600');

  // Add/Remove [ Active Status ] for Bullets
  const bullets = bulletsContainer.querySelectorAll('#slide-bullets li a');

  bullets.forEach(element => element.addEventListener('click', event => {
    bullets.forEach((bullets) => {
      bullets.classList.remove('!w-3', '!h-3', 'bg-primary-600');
    });
    event.target.classList.add('!w-3', '!h-3', 'bg-primary-600');
  }));

  // Get Slide Image height
  const slideHeight = document.querySelector('.slide-item').clientHeight + 36;

  // Declear [ Last Scroll ] And [ Slider Count ]
  var lastScrollTop = slideHeight,
  counter = 0;

  // Scroll Event Slider Changes
  window.onscroll = function() {

    // Get Arrow bottom jumb slide
    const ArrowSlide = document.getElementById('next-slide');

    // Get top postion for last <section>
    const section = document.querySelector('section');
    let bottomSecPos = section.getBoundingClientRect().bottom.toFixed();

    // Check if scrolled to bootom Window
    bottomSecPos <= window.innerHeight
    ? bulletsContainer.classList.add('opacity-0') // if <Ture> remove [ Snap Scroll Behavior ]
    : bulletsContainer.classList.remove('opacity-0'); // else add [ Snap Scroll Behavior ]

    // Convert [ Active Bullets And Arrown Jumb ] on scroll [ Depend On Slide Appearanc ]
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // Check by [ Slide Window Up/Down ]
    if ( scrollTop > lastScrollTop ) {
  
      counter += 1;
      lastScrollTop += slideHeight;

    }

    counter > 0
    ? ArrowSlide.querySelector('a').setAttribute('href', `#slide-${counter + 2}`)
    : null;

    counter == (slidesCount -1)
    ? (ArrowSlide.classList.add('opacity-0'), setTimeout(() => {ArrowSlide.classList.add('hidden')}, 300))
    : (ArrowSlide.classList.remove('hidden'), setTimeout(() => {ArrowSlide.classList.remove('opacity-0')}, 300));

    // 
    bullets.forEach((b) => {
      b.classList.remove('!w-3', '!h-3', 'bg-primary-600');
    });

    // 
    bullets[counter].classList.add('!w-3', '!h-3', 'bg-primary-600');

  }


}


export const Gloable = [];