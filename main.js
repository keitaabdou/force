$(document).ready(function() {
    $("#nom").keyup(function(){
            //On vérifie si le nom et le prénom est ok ou n'a pas été déjà pris
            var nombreMots = jQuery.trim($(this).val()).split(' ').length;
            if($(this).val() === '') {
                 nombreMots = 0;
            }
            if(nombreMots <2){
                $("small#output_nom").show();
                $("#nom").removeClass("is-valid");
                $("#nom").addClass("is-invalid");
                $("#output_nom").css("color", "red").html("Trop court (Au moins deux mots )");
            }else{
                $("small#output_nom").hide();
                $("#nom").removeClass("is-invalid");
                $("#nom").addClass("is-valid");
            }
            verifier_classes();
    });
     
    $("#prenom").keyup(function(){
        if($(this).val().match(/^[a-zA-Z]/)){
            verifier_prenom();
        }else{
            $("#prenom").removeClass("is-valid");
            $("#prenom").addClass("is-invalid");
             $("small#output_prenom").show();
             $("#output_prenom").css("color", "red").html("Le pseudo doit commencer par une lettre");
     
        }
    });
    function verifier_prenom(){
            //On vérifie si le pseudo est ok ou n'a pas été déjà pris
            $.ajax({
                type: "post",
                url:  "validationPHP.php",
                data: {
                    'prenom_check' : $("#prenom").val()
                },
                success: function(data){
                        if(data == "success"){
                                $("#prenom").removeClass("is-invalid");
                                $("#prenom").addClass("is-valid");
                                 $("small#output_prenom").hide();
                                return true;
                            } else {
                                $("#prenom").removeClass("is-valid");
                                $("#prenom").addClass("is-invalid");
                                $("small#output_prenom").show();
                                $("#output_prenomo").css("color", "red").html(data);
                            }
                            }
            });
            verifier_classes();
    };
    //Email*************************
    $("#email").keyup(function(){
        //On vérifie si les mots de passe coïncident
        verifier_email();
        verifier_classes();
    });
    function verifier_email(){
        $.ajax({
            type: "post",
            url:  "validationPHP.php",
            data: {
                'email_check' : $("#email").val()
            },
            success: function(data){
                        if(data == "success"){
                            $("#email").removeClass("is-invalid");
                            $("#email").addClass("is-valid");
                            $("small#output_email").hide();
                        } else {
                            $("#email").removeClass("is-valid");
                            $("#email").addClass("is-invalid");
                            $("small#output_email").show();
                            $("#output_email").css("color", "red").html(data);
                        }
                     }
        });
    }

    //Traitement du formulaire d'inscription************************
    function verifier_classes(){
        if ( $("#nomPrenom").hasClass("is-valid")==true  &&
        $("#pseudo").hasClass("is-valid")==true  &&
        $("#email").hasClass("is-valid")==true  &&
        $("#user-passwd").hasClass("is-valid")==true  &&
        $("#user-repeatpass").hasClass("is-valid")==true){
                        $("#etatgeneral").removeClass("is-invalid");
                        $("#etatgeneral").addClass("is-valid");
                        $("#etatgeneral").css("color", "green").html("Vous pouvez envoyer votre formulaire");
                        $('#btnEnvoyer').attr("disabled", false);          
                    } else {
                        $("#etatgeneral").removeClass("is-valid");
                        $("#etatgeneral").addClass("is-invalid");
                        $("#etatgeneral").css("color", "red").html("Veuillez remplir tous les champs avant d’envoyer le formulaire");
                        $('#btnEnvoyer').attr("disabled", true);
                    }
    }
    //$('#btnEnvoyer').attr("disabled", false);	
    //ou
    //$('#btnEnvoyer').removeAttr("disabled");
    //Traitement du formulaire d'inscription************************
    $("#form_inscription").submit(function(){alert("rrrr");
        var nomPrenom = $("#nomPrenom").val();
        var pseudo = $("#pseudo").val();
        var email = $("#email").val();
        var pass1 = $("#user-passwd").val();
        var pass2 = $("#user-repeatpass").val();
            $.ajax({
                type: "post",          //La méthode utilisée (POST ou GET)
                url:  "validationPHP.php", //Script à appeler
                asynch : false,       //Ici on force l'appel de manière synchrone
                data: {
                    'nomPrenom' : nomPrenom,
                    'pseudo' : pseudo,
                    'email' : email,
                    'pass1' : pass1,
                    'pass2' : pass2,
                },
                success: function(data){
                            if(data != "register_success"){
                                $("#etatgeneral").css("color", "red").html(data);
                            } else {
                                $("#etatgeneral").css("color", "green").html("Données enregistrées avec succès");
      
                            }
                         }
            });
        });
    });