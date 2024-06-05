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

    // MULTI-STEP FORM HANDLER
    donForm.steps({
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        labels: {
            finish: "Donner",
            next: "Suivant",
            previous: "Précédent"
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            donForm.validate().settings.ignore = ":disabled, :hidden";

            if(donForm.valid()) {
                $('.wizard > steps li a#donForm-t-' +newIndex).parent().addClass('checked');
                $('.wizard > steps li a#donForm-t-' +newIndex).parent().prevAll().addClass('checked');
                $('.wizard > steps li a#donForm-t-' +newIndex).parent().nextAll().addClass('checked');
            }
            return donForm.valid();
        },
        onFinishing: function(event, currentIndex) {
            donForm.validate().settings.ignore = ":disabled";
            return donForm.valid();
        },
        onFinished: function(event, currentIndex) {
            alert('Envoyé!');
        }
    }); 

    // CUSTOM jQuery STEPS BUTTON
    $('.forward').click(function() {
        $('#donForm').steps('next');
    });

    $('.backward').click(function() {
        $('#donForm').steps('previous');
    });


});