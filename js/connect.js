
const form1 = document.getElementById('form1');
const form2 = document.getElementById('form2');
const signupBtn = document.getElementById('signup-btn');
const signinBtn = document.getElementById('signin-btn');

// ================= SIGNUP ====================

function signUp() {
    form1.classList.replace('d-block', 'd-none');
    form2.classList.replace('d-none', 'd-block');
}

function signIn() {
    form2.classList.replace('d-block', 'd-none');
    form1.classList.replace('d-none', 'd-block');
}

// ================= BTN EVENTS =====================
const connectEvents = () => {
    signupBtn.addEventListener('click', signUp);
    signinBtn.addEventListener('click', signIn);
}

document.addEventListener('DOMContentLoaded', connectEvents);