$(function() {
    let donForm = $('#donForm');
    
    // FORM VALIDATION WITH jQuery
    donForm.validate({
        rules: {
            civilite: "required",
            nomDon: {
                required: true,
                lettersonly: true
            },
            prenomDon: {
                required: true,
                lettersonly: true
            },
            telephone: {
                required: true,
                number: true,
                minlength: 9,
                maxlength: 9
            },
            emailDon: {
                required: true,
                email: true
            },
            ville: {
                required: true,
                lettersonly: true
            },
            pays: {
                required: true,
                lettersonly: true
            },
            raison: {
                required: true,
                minlength: 30
            },
            nature: "required",
            destination: {
                required: true
            },
            idTransaction: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            civilite: "Vous êtes ?",
            nomDon: {
                required: "Veuillez entrer votre nom",
                lettersonly: "Seules les lettres sont autorisées"
            },
            prenomDon: {
                required: "Veuillez entrer votre nom",
                lettersonly: "Seules les lettres sont autorisées"
            },
            telephone: {
                required: "Veuillez entrer votre numéro de téléphone",
                number: "Uniquement les chiffres svp",
                minlength: "Votre numéro doit avoir au moins 9 chiffres",
                maxlength: "Votre numéro doit être composé de 9 chiffres"
            },
            emailDon: {
                required: "Veuilez entrer votre adresse email",
                email: "Veuillez entrer une adresse email valide"
            },
            ville: {
                required: "Veuillez entrer votre ville",
                lettersonly: "Seules les lettres sont autorisées"
            },
            pays: {
                required: "Veuillez entrer votre pays",
                lettersonly: "Seules les lettres sont autorisées"
            },
            raison: {
                required: "Ce champ ne doit pas être vide",
                minlength: "Doit contenir au moins 30 caractères"
            },
            nature: "Veuillez préciser la nature de votre don",
            destination: "Merci de sélectionnez au moins une catégorie",
            idTransaction: {
                required: "Veuillez entrer l'ID de votre transaction",
                minlength: "L'ID doit avoir au moins 6 caractères"
            }
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "destination") {
                error.appendTo("#destinationErr");
            } else {
                error.insertAfter(element);
            }
        }
        // submitHandler: function() {
        //     $('#donForm').submit(function() {
        //         //e.preventDefault();

        //         let data = $(this).serialize();

        //         console.log(data);

        //         $.ajax({
        //             url: "classes/Donate.class.php",
        //             type: "post",
        //             data: data,
        
        //             success: function(data) {
        //                 $('#result').html(data);
        //             }
        
        //         });

        //         //$('#donForm')[0].reset();
                
        //     });
        // }
    });

    
    function submitDonForm() {

        let civilite = $('#civilite').val();
        let nomDon = $('#nomDon').val();
        let prenomDon = $('#prenomDon').val();
        let telephone = $('#telephone').val();
        let emailDon = $('#emailDon').val();
        let ville = $('#ville').val();
        let pays = $('#pays').val();
        let raison = $('#raison').val();
        let nature = $('#nature').val();
        let destination = $('#destination').val();
        let idTransaction = $('#idTransaction').val();
        let anonyme = $('#anonyme').val();
        let souscription = $('#souscription').val();
        let submit = $('#donner').val();

        $.ajax({
            url: "classes/Donate.class.php",
            type: "post",
            data: {
                civilite:civilite,
                nomDon:nomDon,
                prenomDon:prenomDon,
                telephone:telephone,
                emailDon:emailDon,
                ville:ville,
                pays:pays,
                raison:raison,
                nature:nature,
                destination:destination,
                idTransaction:idTransaction,
                anonyme:anonyme,
                souscription:souscription,
                submit:submit
            },
            dataType: 'text',

            success: function(data) {
                console.log(data);
            }

        });
    }

});