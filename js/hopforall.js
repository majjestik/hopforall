
// CODE FOR ALTERNATING TEXT VISIBILTY ON CLICK IN HOPFORALL PAGE

const textBlock = document.querySelectorAll('#text-tab div');
const menuBlock = document.querySelectorAll('#menu-tab li');
const linksBlock = document.querySelectorAll('#menu-tab a');
// 
const aboutText = document.getElementById('about-text');
const causesText = document.getElementById('causes-text');
const whatText = document.getElementById('what-text');
const docsText = document.getElementById('docs-text');
const partnerText = document.getElementById('partner-text');
// 
const aboutItem = document.getElementById('about-item');
const causesItem = document.getElementById('causes-item');
const whatItem = document.getElementById('what-item');
const docsItem = document.getElementById('docs-item');
const partnerItem = document.getElementById('partner-item');
// 
const aboutLink = document.getElementById('about-link');
const causesLink = document.getElementById('causes-link');
const whatLink = document.getElementById('what-link');
const docsLink = document.getElementById('docs-link');
const partnerLink = document.getElementById('partner-link');

menuBlock.forEach( (e) => {
    e.addEventListener("click", (i) => {
        if((i.target) !== i.currentTarget) {
            let clickedItem = i.target.id;
            console.log(clickedItem);
            
            if(clickedItem === "about-link") {
                for(i = 0; i < 5; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                aboutItem.classList.add('active-tab');
                aboutText.classList.replace('d-none', 'd-block');

            } else if(clickedItem === "causes-link") {
                for(i = 0; i < 4; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                causesItem.classList.add('active-tab');
                causesText.classList.replace('d-none', 'd-block');
            } else if(clickedItem === "what-link") {
                for(i = 0; i < 4; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                whatItem.classList.add('active-tab');
                whatText.classList.replace('d-none', 'd-block');
            } else if(clickedItem === "docs-link"){
                for(i = 0; i < 4; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                docsItem.classList.add('active-tab');
                docsText.classList.replace('d-none', 'd-block');
            } else if(clickedItem === "partner-link") {
                for(i = 0; i < 4; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                partnerItem.classList.add('active-tab');
                partnerText.classList.replace('d-none', 'd-block');
            } else {
                for(i = 0; i < 4; i++) {
                    menuBlock[i].classList.remove('active-tab');
                    textBlock[i].classList.replace('d-block', 'd-none');
                }
                aboutItem.classList.add('active-tab');
                aboutText.classList.replace('d-none', 'd-block');
            }
        }
    });
});



