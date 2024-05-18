
// CODE FOR ALTERNATING TEXT VISIBILTY ON CLICK IN HOPFORALL PAGE

const textBlock = document.querySelectorAll('#text-tab section');
const menuBlock = document.querySelectorAll('#menu-tab li');
const linksBlock = document.querySelectorAll('#menu-tab a');
// 
const docText = document.getElementById('doc-text');
const eventText = document.getElementById('event-text');
const projetText = document.getElementById('projet-text');
const galerieText = document.getElementById('galerie-text');
const faqText = document.getElementById('faq-text');
const witnessText = document.getElementById('witness-text');
// 
const docItem = document.getElementById('doc-item');
const eventItem = document.getElementById('event-item');
const projetItem = document.getElementById('projet-item');
const galerieItem = document.getElementById('galerie-item');
const faqItem = document.getElementById('faq-item');
const witnessItem = document.getElementById('witness-item');
// 
const docLink = document.getElementById('doc-link');
const eventLink = document.getElementById('event-link');
const projetLink = document.getElementById('projet-link');
const galerieLink = document.getElementById('galerie-link');
const faqLink = document.getElementById('faq-link');
const witnessLink = document.getElementById('witness-link');

menuBlock.forEach( (e) => {
    e.addEventListener("click", (i) => {
        if((i.target) !== i.currentTarget) {
            let clickedItem = i.target.id;
            console.log(clickedItem);
            
            if(clickedItem === "event-link") {
                for(i = 0; i < menuBlock.length; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                eventItem.classList.add('active-tab');
                eventText.classList.replace('d-none', 'd-block');
            } else if(clickedItem === "doc-link") {
                for(i = 0; i < menuBlock.length; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                docItem.classList.add('active-tab');
                docText.classList.replace('d-none', 'd-block');

            } else if(clickedItem === "projet-link") {
                for(i = 0; i < menuBlock.length; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                projetItem.classList.add('active-tab');
                projetText.classList.replace('d-none', 'd-block');
            } else if(clickedItem === "galerie-link") {
                for(i = 0; i < menuBlock.length; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                galerieItem.classList.add('active-tab');
                galerieText.classList.replace('d-none', 'd-block');
            } else if(clickedItem === "faq-link"){
                for(i = 0; i < menuBlock.length; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                faqItem.classList.add('active-tab');
                faqText.classList.replace('d-none', 'd-block');
            } else if(clickedItem === "witness-link"){
                for(i = 0; i < menuBlock.length; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                witnessItem.classList.add('active-tab');
                witnessText.classList.replace('d-none', 'd-block');
            } else {
                for(i = 0; i < menuBlock.length; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                eventItem.classList.add('active-tab');
                eventText.classList.replace('d-none', 'd-block');
            }
        }
    });
});


// LIGHTBOX IMAGE GALLERY TOGGLER
lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'disableScrolling': true
})

// TESTIMONIES TOGGLER
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    grabCursor: true,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});