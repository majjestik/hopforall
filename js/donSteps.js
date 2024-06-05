// $(document).ready(function(){
//     // console.log(form1.classList.value);
//     if($('#form1').hasClass('d-block') ) {
//         // First disable NEXT button for form validation
//         // $('#next1').prop('disabled', true);


//         // SUBMIT A DONATION

//         $(document).on('click', '#next1', function(e) {
//             // alert('Love is to give !');

//             // Validate form
            
//             $('#nomDom').on('input', function() {
//                 checkUser();
//             });

//         });


//     }
    
// });


function checkUser() {
    let nomDon = $('#nomDom').val();
    let pattern = /^[a-zA-Z-é'\s]+$/;
    let validateNom = pattern.test(nomDon);

    if($('#nomDon').val().length == "") {
        $('#nomErr').html('Veuillez entrer votre nom');
        return false;
    }
    else if(!validateNom) {
        $('#nomErr').html('Veuillez entrer un nom valide')
        return false;
    }
    else {
        $('#nomErr').html('');
        console.log(nomDon);
        return true;
    }
}


const next1 = document.getElementById('next1');
const next2 = document.getElementById('next2');
const next3 = document.getElementById('next3');
const prev1 = document.getElementById('prev1');
const prev2 = document.getElementById('prev2');
const prev3 = document.getElementById('prev3');


const form1 = document.getElementById('form1');
const form2 = document.getElementById('form2');
const form3 = document.getElementById('form3');
const form4 = document.getElementById('form4');


const progressEl = document.getElementById('progress');
const circles = document.querySelectorAll('.circle');

let currentActive = 1;










// =================  NEXT FORMS ====================

function nextOne() {
    form1.classList.replace('d-block', 'd-none');
    form2.classList.replace('d-none', 'd-block');
    
    // Next progress number

    incrementCircle();

    // Update progress bar
    
    updateBar();
}

function nextTwo() {
    form2.classList.replace('d-block', 'd-none');
    form3.classList.replace('d-none', 'd-block');

    // Next progress number

    incrementCircle();

    // Update progress bar
    
    updateBar();
}

function nextThree() {
    form3.classList.replace('d-block', 'd-none');
    form4.classList.replace('d-none', 'd-block');

    // Next progress number

    incrementCircle();

    // Update progress bar
    
    updateBar();
}

// ================= PREVIOUS FORMS ================

function prevOne() {
    form2.classList.replace('d-block', 'd-none');
    form1.classList.replace('d-none', 'd-block');

    // Prev progress number

    decrementCircle();

    // Update progress bar
    
    updateBar();
}

function prevTwo() {
    form3.classList.replace('d-block', 'd-none');
    form2.classList.replace('d-none', 'd-block');
    
    // Prev progress number

    decrementCircle();

    // Update progress bar
    
    updateBar();
}

function prevThree() {
    form4.classList.replace('d-block', 'd-none');
    form3.classList.replace('d-none', 'd-block');

    // Prev progress number

    decrementCircle();

    // Update progress bar
    
    updateBar();
}

// ================= INCREMENT CIRCLE ============
function incrementCircle() {
    currentActive++;
    if(currentActive > circles.length) {
        currentActive = circles.length;
    }
}

// ================= DECREMENT CIRCLE ============
function decrementCircle() {
    currentActive--;
    if(currentActive < 1) {
        currentActive = 1;
    }
}

// ================= UPDATE BAR ==================

function updateBar() {
    circles.forEach((circle, index) => {
        if(index < currentActive) {
            circle.classList.add('active-circle');
        } else {
            circle.classList.remove('active-circle');
        }

        const actives = document.querySelectorAll('.active-circle');

        progressEl .style.width = ((actives.length - 1) / (circles.length - 1)) * 100 + "%";  
    });
}



// ================== BUTTON EVENTS ===============

const btnsEvents = () => {

    next1.addEventListener('click', nextOne);
    next2.addEventListener('click', nextTwo);
    next3.addEventListener('click', nextThree);
    prev1.addEventListener('click', prevOne);
    prev2.addEventListener('click', prevTwo);
    prev3.addEventListener('click', prevThree);
}

document.addEventListener('DOMContentLoaded', btnsEvents);

