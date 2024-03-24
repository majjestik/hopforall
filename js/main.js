
const navE1 = document.getElementById('meine-navbar');
const navlink = document.querySelectorAll('.nav-link');
const lg = window.matchMedia("(min-width: 769px)");

// CHANGING NAVBAR COLOR ON SCROLL, DEPENDING ON VIEWPORT SIZE
if(lg.matches) {
    // alert("I'm on Lg viewport !");
    window.addEventListener('scroll', () => {
        if(window.scrollY >= 80) {
            navE1.style.backgroundColor = "white";
            // navE1.style.height = "78px";
            navE1.style.boxShadow = "0 3px 10px rgba(0, 0, 0, 0.15)";
            
            for(i = 0; i < navlink.length; i++) {
                navlink[i].style.color = "#00668b";
            }
        } else if(window.scrollY < 80) {
            navE1.style.backgroundColor = "transparent";
            // navE1.style.height = "78px";
            navE1.style.boxShadow = "none";
            for(i = 0; i < navlink.length; i++) {
                navlink[i].style.color = "#ffffff";
            }
        }
    });   
} else {
// alert("Lesser than Lg viewport !");
    window.addEventListener('scroll', () => {
        if(window.scrollY >= 80) {
            navE1.style.backgroundColor = "white";
            navE1.style.height = "auto";
            navE1.style.boxShadow = "0 3px 10px rgba(0, 0, 0, 0.15)";
            for(i = 0; i < navlink.length; i++) {
                navlink[i].style.color = "#00668b";
            }
        } else if(window.scrollY < 80) {
            navE1.style.backgroundColor = "transparent";
            navE1.style.height = "auto";
            navE1.style.boxShadow = "none";
            for(i = 0; i < navlink.length; i++) {
                navlink[i].style.color = "#ffffff";
            }
        }
    }); 
}

