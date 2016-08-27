$(function() {
    window.days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];

    $("#joursDeCours").html('');
    var joursHtml = '';
    for (i = 0; i < days.length; i++) {
        joursHtml += ' <div class="row"><div class="col-md-3"> <div class="checkbox-block"> <input id="j' + i + '" type="checkbox" class="checkbox"><label class="" for="j' + i + '"><b>' + days[i] + ' </b></label></div></div><div class="col-md-3 input-group"><input type="text" id="timepicker' + i + '" class="form-control" placeholder="Heure début"><span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span></div></div>';
    }

    $('#joursDeCours').html(joursHtml);

    //custumize hour format
    for (i = 0; i < days.length; i++) {
        $('#timepicker' + i).datetimepicker({
            format: 'HH:mm'
        });
    }

    

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

     for (i = 0; i < window.days.length; i++) {
       $("#j"+i).on('change', function(event) {
        event.preventDefault();
        updatePrixTotal();
    });
    }
});