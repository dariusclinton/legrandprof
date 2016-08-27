$(function() {
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
        });
    }

    $("#reservation-startdate").datetimepicker({
        format: 'L',
        locale: 'fr',
        minDate: moment(),
    })
            .on('changeDate', function(e) {
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
            updatePrixTotal();
        });
    }

    /**
     * gestion de la soumission du formulaire
     */
    $("#reservationForm").submit(function(event) {
        event.preventDefault();
        alert('soumission');
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
        for (i = 0; i < window.days.length; i++) {
            if ($("#j" + i).prop('checked')) {
                joursDeCoursSelectionnes[window.days[i]] = $('#timepicker' + i).val();
            }
        }

        console.log("coursId = " + coursId + " classe = " + classe + " duree = " + duree + " heureparjours = " + heureParJours + " \n\
        dateDebut = " + dateDebut + " nbApp = " + nbApprenants + " lieu = " + lieuDeCours + " ville = " + ville + " quartier = " + quartier)
        $.each(joursDeCoursSelectionnes, function(key, value) {
            console.log(key + "   " + value);
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
        var dataString = 'coursId=' + coursId + '&classe=' + classe + '&duree=' + duree + '&heureParJours=' + heureParJours + '&dateDebut=' + dateDebut + '&nbApprenants='+nbApprenants +'&prixTotal='+prixTotal+ '&lieuDeCours=' + lieuDeCours + '&ville=' + ville + '&quartier=' + quartier + '&joursDeCoursSelectionnes=' + JSON.stringify(joursDeCoursSelectionnes);
        $.ajax({
            method: "GET",
            url: "/legrandprof/web/app_dev.php/reservation/cart/add/" + profId,
            data: dataString,
        }).success(function(answer) {
            alert('le prof a ete ajouté au panier');
            console.log(answer);
            setTimeout(function (){window.location.reload(true);},2000);
        }).error(function(answer) {
            alert('error '+answer);
            console.log(answer);
        });
    });
});