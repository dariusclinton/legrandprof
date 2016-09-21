$(function() {
    function updateClasse() {
        var profId = $("#profId").val();
        var coursId = $("#course").val();
        $("#loading-classe").css({'display':'block'});
        
        $.ajax({
            method: "POST",
            url: Routing.generate('lgp_course_update_classe', {'profId': profId, 'coursId': coursId}),
            data: {}
        }).success(function(answer, status) {
            window.classes = [];
            window.prix = [];
            for (i = 0; i < answer.length; i++)
            {
                classes.push(answer[i].classe);
                prix.push(answer[i].prix);
            }
            $('#classes option').each(function() {
                if ($(this).val() != '' && !$(this).attr('disabled'))
                {
                    $(this).remove();
                }
            });
            for (i = 0; i < classes.length; i++)
            {
                $('#classes').append('<option value="' + i + '">' + classes[i] + '</option>');
            }

            updatePrix();
            updatePrixTotal();
            $("#loading-classe").css({'display':'none'});
        }).error(function(answer, status) {
            console.log(answer + "   " + status);
        });
    }

    function calculTotal() {
        var course = $("#course option:selected").val();
        var classe = $("#classes option:selected").val();
        var duree = $("#reservationDuree option:selected").val();
        var nbHeureparjour = $("#heuresParjours option:selected").val();
        var nbApprenants = $("#nbApprenants option:selected").val();

        var nbJours = 0;
        if (classe === "") {
            return 0;
        } else if (classe == '') {
            return 0;
        }
        var prixHoraire = window.prix[classe];
        for (i = 0; i < window.days.length; i++) {
            if ($("#j" + i).prop('checked')) {
                nbJours += 1;
            }
        }

        var prixTotal = prixHoraire * nbHeureparjour * nbJours * duree * nbApprenants;
        return prixTotal;
    }

    function updatePrix() {
        var selected = $("#classes option:selected");
        if (selected.attr('disabled')) {

        }
        else {
            var selectedVal = $("#classes option:selected").val();
            $("#prixH").text(window.prix[selectedVal]);
        }
    }

    function updatePrixTotal() {
        $("#prixTotal").text('');
        prixT = calculTotal();
        $("#prixTotal").text(prixT);
    }


    window.days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    $("#joursDeCours").html('');
    var joursHtml = '';
    for (i = 0; i < days.length; i++) {
        joursHtml += ' <div class="row"><div class="col-md-3"> <div class="checkbox-block"> <input id="j' + i + '" type="checkbox" class="checkbox"><label class="jour" for="j' + i + '"><b>' + days[i] + ' </b></label></div></div><div class="col-md-3 input-group"><input type="text" id="timepicker' + i + '" class="form-control" placeholder="Heure début"><span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span></div></div>';
    }

    $('#joursDeCours').html(joursHtml);

    //custumize hour format
    for (i = 0; i < days.length; i++) {
        $('#timepicker' + i).datetimepicker({
            format: 'HH:mm'
        }).on('changeDate', function() {
            $('#timepicker' + i).hide();
        });
    }

    $("#reservation-startdate").datetimepicker({
        format: 'L',
        locale: 'fr',
        minDate: moment(),
    }).on('changeDate', function() {
        $('#reservation-startdate').hide(100);
    });

    $("#course").on('change', function(event) {
        event.preventDefault();
        updateClasse();
    });

    $("#classes").on('change', function(event) {
        event.preventDefault();
        updatePrix();
        updatePrixTotal();
    });

    $("#heuresParjours").on('change', function(event) {
        event.preventDefault();
        updatePrixTotal();
    });

    $("#reservationDuree").on('change', function(event) {
        event.preventDefault();
        updatePrixTotal();
    });
    $("#nbApprenants").on('change', function(event) {
        event.preventDefault();
        updatePrixTotal();
    });


    for (i = 0; i < window.days.length; i++) {
        $("#j" + i).on('change', function(event) {
            event.preventDefault();
//            if ($("#j" + i).prop('checked')) {
//                alert('checked');
//                $("#timepicker" + i).removeAttr('disabled');
//            }
//            else {
//                alert('unchecked');
//                $("#timepicker" + i).attr('disabled', 'disabled');
//            }
            updatePrixTotal();
        });
    }

    /**
     * gestion de la soumission du formulaire
     */
    $("#reservationForm").submit(function(event) {
        event.preventDefault();
        /**
         * recuperation de toutes valeurs de variables nescessaires
         */
        var profId = $("#profId").val();
        var coursId = $("#course option:selected").val()
        var classe = $("#classes option:selected").text();
        var duree = $("#reservationDuree option:selected").val();
        var heureParJours = $("#heuresParjours option:selected").val();
        var dateDebut = $("#reservation-startdate").val();
        var nbApprenants = $("#nbApprenants option:selected").val();
        var lieuDeCours = $("#lieuDeCours option:selected").val();
        var ville = $("#ville").val();
        var quartier = $("#quartier").val();
        var prixTotal = $("#prixTotal").text();
        var joursDeCoursSelectionnes = {};
        nbJours = 0;
        for (i = 0; i < window.days.length; i++) {
            if ($("#j" + i).prop('checked')) {
                joursDeCoursSelectionnes[window.days[i]] = $('#timepicker' + i).val();
                nbJours++;
            }
        }

        console.log("coursId = " + coursId + " classe = " + classe + " duree = " + duree + " heureparjours = " + heureParJours + " \n\
        dateDebut = " + dateDebut + " nbApp = " + nbApprenants + " lieu = " + lieuDeCours + " ville = " + ville + " quartier = " + quartier)
        $.each(joursDeCoursSelectionnes, function(key, value) {
            console.log(key + "   " + value);
        });

        if (nbJours === 0) {
            alert('vous devez selectionnez au moins un jour de cours !');
            return;
        }

        $(document).ajaxStart(function() {
            $('#myModal').modal({
                keyboard: false,
                backdrop: false,
            });
        });
//        var data = {
//            coursId: coursId,
//            classe: classe,
//            duree: duree,
//            heureParJours: heureParJours,
//            dateDebut: dateDebut,
//            nbApprenants: nbApprenants,
//            lieuDeCours: lieuDeCours,
//            ville: ville,
//            quartier: quartier,
//            joursDeCoursSelectionnes: joursDeCoursSelectionnes
//        };
        var dataString = 'coursId=' + coursId + '&classe=' + classe + '&duree=' + duree + '&heureParJours=' + heureParJours + '&dateDebut=' + dateDebut + '&nbApprenants=' + nbApprenants + '&prixTotal=' + prixTotal + '&lieuDeCours=' + lieuDeCours + '&ville=' + ville + '&quartier=' + quartier + '&joursDeCoursSelectionnes=' + JSON.stringify(joursDeCoursSelectionnes);
        $.ajax({
            method: "GET",
            url: Routing.generate('lgp_reservation_cart_add', {'profId': profId}),
            data: dataString,
        }).success(function(answer) {
            if (answer === "success") {
                console.log(answer);
                $("#loading").css("display", "none");
                $("#success").css("display", "block");
                $("#modal-footer").css("display", "block");
            }

//            setTimeout(function() {
//                window.location.reload(true);
//            }, 2000);
        }).error(function(answer) {
//            alert('error ' + answer);
            if (answer == "error") {
                console.log(answer);
                $("#loading").css("display", "none");
                $("#success").css("display", "block");
                $("#modal-footer").css("display", "block");
                alert('une erreur est survenu sur le serveur! veillez nous contacter svp !!!')
            }
        });
    });
});