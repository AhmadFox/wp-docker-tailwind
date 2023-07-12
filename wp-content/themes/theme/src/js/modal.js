/*
** Global Variables
** Created by Ahmad Gharaibeh @ahmadFox
*/
const html = document.querySelector("html"); // Select <html> tage element



/*
** Function for add/remove class 'overflow-hidden' on [ Modal opend/closed ]
** Created by Ahmad Gharaibeh @ahmadFox
*/
const hideScroll = () => {
    html.classList.add('overflow-y-hidden'),
    html.style.marginRight="14px",
    html.style.borderRight="1px solid #e8e8e8",
    html.style.backgroundColor="#fafafb"
}


const viewScroll = () => {
    html.classList.remove('overflow-y-hidden'),
    html.style.marginRight="0px",
    html.style.borderRight="0px"
}



/*
** Function for [ Modal opend/closed ]
** Created by Ahmad Gharaibeh @ahmadFox
*/
const   modalTrigger = document.querySelectorAll('[data-tw-toggle="modal"]');


// Open/Close Modal
modalTrigger.forEach((el) => {

    const relatedModal = document.getElementById(el.getAttribute('data-tw-target').slice(1));
    const dialogeModal = relatedModal.querySelector('[data-modal="dialog"]');
    const modalCloseBtn = relatedModal.querySelector('[data-tw-dismiss="modal"]');
    const modalCloseOverlay = relatedModal.querySelector('[data-tw-dismiss="overlay"]');

    // Function for close Modal
    const closeModal = () => {
        modalCloseOverlay.classList.remove('!opacity-100')
        dialogeModal.classList.remove('!opacity-100', '!translate-x-0', '!translate-y-0', 'sm:!scale-100');
        setTimeout(() => {
            relatedModal.classList.add('hidden');
        }, 300);
        viewScroll();
    }

    // Open Modal by [ Trigger ]
    el.addEventListener('click', () => {
        relatedModal.classList.remove('hidden');
        setTimeout(() => {
            modalCloseOverlay.classList.add('!opacity-100')
            dialogeModal.classList.add('!opacity-100', '!translate-x-0', '!translate-y-0', 'sm:!scale-100');
        }, 10);
        hideScroll();
    });

    // Close Modal on click [ Close Button ]
    modalCloseBtn.addEventListener('click', (e) => {
        closeModal();
    });

    // Close Modal on click [ Overlay ]
    modalCloseOverlay.addEventListener('click', (e) => {
        closeModal();
    });

});