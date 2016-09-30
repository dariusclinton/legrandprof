$(function () {

    function updateQuarters(ville) {
        $.ajax({
            method: "POST",
            url: Routing.generate('lgp_course_find_prof_update_quarter', {'ville': ville}),
            data: {},
            success: function (answer) {
                console.info(answer);
                $('#cours_search_refine_quartier1 option').each(function () {
                    if ($(this).val() != '' && !$(this).attr('disabled')) {
                        $(this).remove();
                    }
                });
                for (i = 0; i < answer.length; i++) {
                    $('#cours_search_refine_quartier1').append('<option value="' + answer[i].intitule + '">' + answer[i].intitule + '</option>');
                }
            },
            error: function (answer) {
                console.log("error "+answer);
            }
        })
    }

    $("#cours_search_refine_quartier").change(function () {
        var ville = $("#cours_search_refine_quartier option:selected").val();
        // alert(ville);
        updateQuarters(ville);
    });

});