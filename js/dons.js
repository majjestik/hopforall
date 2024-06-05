$(function() {
    let donForm = $('#donForm');
    
    // FORM VALIDATION WITH jQuery
    donForm.validate({
        rules: {
            civilite: "required",
            nomDon: "required",
            prenomDon: "required",
            telephone: {
                required: true,
                minlength: 9
            },
            emailDon: {
                required: true,
                email: true
            },
            ville: "required",
            pays: "required",
            raison: "required",
            nature: "required",
            destination: "required",
            idTransaction: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            civilite: "Vous êtes ?",
            nomDon: "Veuillez entrer votre nom",
            prenomDon: "Veuillez entrer votre prénom",
            telephone: {
                required: "Veuillez entrer votre numéro de téléphone",
                minlength: "Votre numéro doit avoir au moins 9 chiffres"
            },
            emailDon: {
                required: "Veuilez entrer votre adresse email",
                email: "Veuillez entrer une adresse email valide"
            },
            ville: "Veuillez entrer votre ville",
            pays: "Veuillez entrer votre pays",
            raison: "Ce champ ne doit pas être vide",
            nature: "Veuillez préciser la nature de votre don",
            destination: "Vous faites ce don pour ?",
            idTransaction: {
                required: "Veuillez entrer l'ID de votre transaction",
                minlength: "L'ID doit avoir au moins 6 caractères"
            }
        }
    });
});