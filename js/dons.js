
const next1 = document.getElementById('next1');
const next2 = document.getElementById('next2');
const next3 = document.getElementById('next3');
const prev1 = document.getElementById('prev1');
const prev2 = document.getElementById('prev2');
const prev3 = document.getElementById('prev3');
const donner = document.getElementById('donner');


const form1 = document.getElementById('form1');
const form2 = document.getElementById('form2');
const form3 = document.getElementById('form3');
const form4 = document.getElementById('form4');


const progressEl = document.getElementById('progress');
const circles = document.querySelectorAll('.circle');

let currentActive = 1;


// Check if input fields are filled before displaying "Next" button
function enableSubmit() {
    let inputs = document.getElementsByClassName('req1');

    let isValid = true;

    for(i = 0; i < inputs.length; i++) {
        if(inputs[i].value.length == 0) {
            isValid = false;
        }
    }

    if(isValid) {
        next1.disabled = false;
        next1.addEventListener('click', nextOne);
        prev1.addEventListener('click', prevOne);
    }
    else {
        next1.disabled = true;
    }

}


function enableSubmit2() {
    let inputs = document.getElementsByClassName('req2');
    let checkboxes = document.querySelectorAll('#destination input[type="checkbox"]:checked');

    let isValid = true;

    if(inputs[0].value.length == 0 || checkboxes.length == 0) {
        isValid = false;
    }

    if(isValid) {
        next2.disabled = false;
        next2.addEventListener('click', nextTwo);
        next3.addEventListener('click', nextThree);
        prev1.addEventListener('click', prevOne);
        prev2.addEventListener('click', prevTwo);
        prev3.addEventListener('click', prevThree);
    }
    else {
        next2.disabled = true;
    }

}

function enableSubmit3() {
    let input = document.getElementById('idTransaction');

    let isValid = true;

    if(input.value.length == 0) {
        isValid = false;
    }

    if(isValid) {
        donner.disabled = false;
    }
    else {
        donner.disabled = true;
    }

}



// $(document).ready(function () {
//     // console.log(form1.classList.value);
//     if ($('#form1').hasClass('d-block')) {

        





//     }

// });

function checkUser() {
    let nomDon = $('#nomDom').val();
    let pattern = /^[a-zA-Z-é'\s]+$/;
    let validateNom = pattern.test(nomDon);

    if ($('#nomDon').val().length == "") {
        $('#nomErr').html('Veuillez entrer votre nom');
        return false;
    }
    else if (!validateNom) {
        $('#nomErr').html('Veuillez entrer un nom valide')
        return false;
    }
    else {
        $('#nomErr').html('');
        console.log(nomDon);
        return true;
    }
}











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
    if (currentActive > circles.length) {
        currentActive = circles.length;
    }
}

// ================= DECREMENT CIRCLE ============
function decrementCircle() {
    currentActive--;
    if (currentActive < 1) {
        currentActive = 1;
    }
}

// ================= UPDATE BAR ==================

function updateBar() {
    circles.forEach((circle, index) => {
        if (index < currentActive) {
            circle.classList.add('active-circle');
        } else {
            circle.classList.remove('active-circle');
        }

        const actives = document.querySelectorAll('.active-circle');

        progressEl.style.width = ((actives.length - 1) / (circles.length - 1)) * 100 + "%";
    });
}



// ================== BUTTON EVENTS ===============

const btnsEvents = () => {

//     next1.addEventListener('click', nextOne);
//     next2.addEventListener('click', nextTwo);
//     next3.addEventListener('click', nextThree);
//     prev1.addEventListener('click', prevOne);
//     prev2.addEventListener('click', prevTwo);
//     prev3.addEventListener('click', prevThree);
}

// document.addEventListener('DOMContentLoaded', btnsEvents);

