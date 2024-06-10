
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

let currentForm = 0;




let idTransaction = $('#idTransaction').val();
let anonyme = $('#anonyme').val();
let souscription = $('#souscription').val();


    // MULTI-STEP FORM HANDLER
$().ready(function() {
    $('#next1').click(function (){

        
        let civilite = $('#civilite').val();
        let nomDon = $('#nomDon').val();
        let prenomDon = $('#prenomDon').val();
        let telephone = $('#telephone').val();
        let emailDon = $('#emailDon').val();
        let ville = $('#ville').val();
        let pays = $('#pays').val();
    
        $('#nomErr').html('');
        $('#prenomErr').html('');
        $('#telErr').html('');
        $('#emailErr').html('');
        $('#villeErr').html('');
        $('#paysErr').html('');
    
        let pattern = /^[A-Za-z]+$/;
        let emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        let telRegex = /^[0-9]{9}$/;
        let errors = true;
    
        if(nomDon == "") {
            errors = true;
            $('#nomErr').html('Veuillez entrer votre nom');
        }
        else if(prenomDon == "") {
            errors = true;
            $('#prenomErr').html('Veuillez entrer votre prenom');
        } 
        else if(telephone == "") {
            errors = true;
            $('#telErr').html('Veuillez entrer votre numéro');
        }
        else if(emailDon == "") {
            errors = true;
            $('#emailErr').html('Veuillez entrer votre email');
        }
        else if(ville == "") {
            errors = true;
            $('#villeErr').html('Veuillez entrer votre ville');
        }
        else if(pays == "") {
            errors = true;
            $('#paysErr').html('Veuillez entrer votre pays');
        }
        else if(!pattern.test(nomDon)) {
            errors = true;
            $('#nomErr').html('Veuillez entrer un nom valide');
        }
        else if(!pattern.test(prenomDon)) {
            errors = true;
            $('#prenomErr').html('Veuillez entrer un prenom valide');
        }
        else if(!telRegex.test(telephone)) {
            errors = true;
            $('#telErr').html('Le numéro doit avoir 9 chiffres');
        }
        else if(!emailRegex.test(emailDon)) {
            errors = true;
            $('#emailErr').html('Veuillez entrer une email valide');
        }
        else if(!pattern.test(ville)) {
            errors = true;
            $('#villeErr').html('Veuillez entrer un ville valide');
        }
        else if(!pattern.test(pays)) {
            errors = true;
            $('#paysErr').html('Veuillez entrer un pays valide');
        }
        else {
            errors = false;

            civilite = $('#civilite').val();
            nomDon = $('#nomDon').val();
            prenomDon = $('#prenomDon').val();
            telephone = $('#telephone').val();
            emailDon = $('#emailDon').val();
            ville = $('#ville').val();
            pays = $('#pays').val();
    
            if(errors == false) {
                next1.addEventListener('click', nextOne);
                prev1.addEventListener('click', prevOne);
            }
    
    
        }
    });
    
    
    
    $('next2').click(function() {
        let raison = $('#raison').val();
        let nature = $('#nature').val();
        let destination = $('#destination').val();
    
        if(raison == "") {
            errors = true;
            $('#raisonErr').html('Veuillez écrire quelques mots');
        }
        else if(idTransaction == "") {
            errors = true;
            $('#transErr').html('Veuillez entrer l\'ID de votre transaction');
        }
        else {
            raison = trim($('#raison').val());
            idTransaction = trim($('#idTransaction').val());
            nature = $('#nature').val();
    
            next2.addEventListener('click', nextTwo);
            next3.addEventListener('click', nextThree);
            prev2.addEventListener('click', prevTwo);
            prev3.addEventListener('click', prevThree);
    
        }
    });
    
});




    // showForm(currentForm);

    // function showForm(n) {
    //     let forms = document.getElementsByClassName('step');
    //     forms[n].style.display = 'block';
    // }

    // function formBtn(n) {
    //   $('#donForm').validate();
    //     let forms = document.getElementsByClassName('step');
    //     if(n == 1 && !$('#donForm').valid())
    //         return false;

    //     forms[currentForm].style.display = 'none';
    //     currentForm = currentForm + n;

    //     if(forms.length == currentForm) {
    //         alert('Form Submitted');
    //         $('#donForm').hide();
    //         return false;
    //     }

    //     showForm(currentForm);
    // }



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

        $('#donForm').validate();

        form2.classList.replace('d-block', 'd-none');
        form1.classList.replace('d-none', 'd-block');

        // Prev progress number

        decrementCircle();

        // Update progress bar

        updateBar();
    }

    function prevTwo() {

        $('#donForm').validate();

        form3.classList.replace('d-block', 'd-none');
        form2.classList.replace('d-none', 'd-block');

        // Prev progress number

        decrementCircle();

        // Update progress bar

        updateBar();
    }

    function prevThree() {

        $('#donForm').validate();

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

// const btnsEvents = () => {

// //     next1.addEventListener('click', nextOne);
// //     next2.addEventListener('click', nextTwo);
//     next3.addEventListener('click', nextThree);
// //     prev1.addEventListener('click', prevOne);
//     prev2.addEventListener('click', prevTwo);
//     prev3.addEventListener('click', prevThree);
// }
    
    // document.addEventListener('DOMContentLoaded', btnsEvents);



// $(function() {
//     let donForm = $('#donForm');
    
//     // FORM VALIDATION WITH jQuery
//     donForm.validate({
//         rules: {
//             civilite: "required",
//             nomDon: "required",
//             prenomDon: "required",
//             telephone: {
//                 required: true,
//                 minlength: 9
//             },
//             emailDon: {
//                 required: true,
//                 email: true
//             },
//             ville: "required",
//             pays: "required",
//             raison: "required",
//             nature: "required",
//             destination: "required",
//             idTransaction: {
//                 required: true,
//                 minlength: 6
//             }
//         },
//         messages: {
//             civilite: "Vous êtes ?",
//             nomDon: "Veuillez entrer votre nom",
//             prenomDon: "Veuillez entrer votre prénom",
//             telephone: {
//                 required: "Veuillez entrer votre numéro de téléphone",
//                 minlength: "Votre numéro doit avoir au moins 9 chiffres"
//             },
//             emailDon: {
//                 required: "Veuilez entrer votre adresse email",
//                 email: "Veuillez entrer une adresse email valide"
//             },
//             ville: "Veuillez entrer votre ville",
//             pays: "Veuillez entrer votre pays",
//             raison: "Ce champ ne doit pas être vide",
//             nature: "Veuillez préciser la nature de votre don",
//             destination: "Merci de sélectionnez au moins une catégorie",
//             idTransaction: {
//                 required: "Veuillez entrer l'ID de votre transaction",
//                 minlength: "L'ID doit avoir au moins 6 caractères"
//             }
//         }
//     });


// });


