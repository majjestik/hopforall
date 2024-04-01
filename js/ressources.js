
// CODE FOR ALTERNATING TEXT VISIBILTY ON CLICK IN HOPFORALL PAGE

const textBlock = document.querySelectorAll('#text-tab div');
const menuBlock = document.querySelectorAll('#menu-tab li');
const linksBlock = document.querySelectorAll('#menu-tab a');
// 
const docText = document.getElementById('doc-text');
const rapportText = document.getElementById('rapport-text');
const gallerieText = document.getElementById('gallerie-text');
const faqText = document.getElementById('faq-text');
// 
const docItem = document.getElementById('doc-item');
const rapportItem = document.getElementById('rapport-item');
const gallerieItem = document.getElementById('gallerie-item');
const faqItem = document.getElementById('faq-item');
// 
const docLink = document.getElementById('doc-link');
const rapportLink = document.getElementById('rapport-link');
const gallerieLink = document.getElementById('gallerie-link');
const faqLink = document.getElementById('faq-link');

menuBlock.forEach( (e) => {
    e.addEventListener("click", (i) => {
        if((i.target) !== i.currentTarget) {
            let clickedItem = i.target.id;
            console.log(clickedItem);
            
            if(clickedItem === "doc-link") {
                for(i = 0; i < menuBlock.length; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                docItem.classList.add('active-tab');
                docText.classList.replace('d-none', 'd-block');

            } else if(clickedItem === "rapport-link") {
                for(i = 0; i < menuBlock.length; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                rapportItem.classList.add('active-tab');
                rapportText.classList.replace('d-none', 'd-block');
            } else if(clickedItem === "gallerie-link") {
                for(i = 0; i < menuBlock.length; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                gallerieItem.classList.add('active-tab');
                gallerieText.classList.replace('d-none', 'd-block');
            } else if(clickedItem === "faq-link"){
                for(i = 0; i < menuBlock.length; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                faqItem.classList.add('active-tab');
                faqText.classList.replace('d-none', 'd-block');
            } else {
                for(i = 0; i < menuBlock.length; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                docItem.classList.add('active-tab');
                docText.classList.replace('d-none', 'd-block');
            }
        }
    });
});



