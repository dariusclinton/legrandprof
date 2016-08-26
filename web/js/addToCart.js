$(function() {
    var days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];

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

    function updateClasse() {
        var profId = $("#profId").val();
        var cours = $("#course").val();

        $.ajax({
            method: "POST",
            url: " {{path('lgp_course_update_classe',{'id':profId, 'course':cours})}} ",
            data: {}
        })
        .success(function(answer) {
            var classes = [];
            for (i = 0; i < answer.length; i++)
            {
                    classes.push(answer[i].classe);
            }
            $('#classes option').each(function() {
                if ($(this).val() != '')
                {
                    $(this).remove();
                }
            });
            for (i = 0; i < classes.length; i++)
            {
                $('#classes').append('<option value="' + classes[i] + '">' + classes[i] + '</option>');
            }
        })
        .error(function(answer) {
            console.log(answer);
        });
    }
});