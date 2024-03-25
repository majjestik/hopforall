
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



/* CODE FOR SLIDER CAROUSEL 

var multipleCardCarousel = document.querySelector("#carouselSliderControls");

if (window.matchMedia("(min-width: 768px)").matches) {
    var carousel = new bootstrap.Carousel(multipleCardCarousel, 
    {
        interval: false
    });
    
    var carouselWidth = $("#section-8 .carousel-inner")[0].scrollWidth;
    var cardWidth = $("#section-8 .carousel-item").width();
    var scrollPosition = 0;


    $(".carousel-control-next").on("click", function () {
        if(scrollPosition < (carouselWidth - (cardWidth * 4))) {
            console.log('next');
            scrollPosition += cardWidth;  //update scroll position
            $(".carousel-inner").animate({ scrollLeft: scrollPosition },600); //scroll left
        }
        
        
    });
    
    $(".carousel-control-prev").on("click", function () {
        if(scrollPosition > 0) {
            console.log('prev');
            scrollPosition -= cardWidth;  //update scroll position
            $(".carousel-inner").animate({ scrollLeft: scrollPosition },600); //scroll left
        }
        
        
    });
} else {
    $(multipleCardCarousel).addClass("slide");
} */