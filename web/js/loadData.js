$(function () {

    window.learn = [];
    window.profsName = [];
    window.catNames = [];

    $('[data-onload]').each(function () {
        eval($(this).data('onload'));
    });

    function loadCourses() {
        // window.learn.splice(0, window.learn.length);
        while(window.learn.length){
            alert('test');
            window.learn.pop();
        }
        $.ajax({
            method: "GET",
            url: Routing.generate('lgp_course_all_intitule'),
            data: {},
            success: function (answer, status) {
                for (i = 0; i < answer.length; i++) {
                    window.learn.push(answer[i].intitule);
                }
            },
            error: function (answer, status) {
                alert('error');
                console.log(answer + "   " + status);
            }
        });
    }

    function loadCategoriesNames() {
        catNames.splice(0, catNames.length);
        $.ajax({
            method: "GET",
            url: Routing.generate('lgp_course_all_categories'),
            data: {},
            success: function (answer, status) {
                for (i = 0; i < answer.length; i++) {
                    catNames.push(answer[i].intitule);
                }
            },
            error: function (answer, status) {
                alert('error');
                console.log(answer + "   " + status);
            }
        });
    }

    function loadProfsName() {
        profsName.splice(0, profsName.length);
        $.ajax({
            method: "GET",
            url: Routing.generate('lgp_prof_all_names'),
            data: {},
            success: function (answer, status) {
                for (i = 0; i < answer.length; i++) {
                    profsName.push(answer[i].prenoms + " " + answer[i].nom);
                }
            },
            error: function (answer, status) {
                alert('error');
                console.log(answer + "   " + status);
            }
        });
    }

    $("#cours_search_course_intitule").autocomplete({
        autoFocus: true,
        maxResults: 10,
        source: window.learn
    });

    $("#cours_search_course_city_intitule").autocomplete({
        autoFocus: false,
        maxResults: 10,
        source: window.learn
    });
    $("#cours_search_course_quarter_intitule").autocomplete({
        autoFocus: true,
        maxResults: 10,
        source: window.learn
    });
    $("#prof_name").autocomplete({
        autoFocus: true,
        maxResults: 10,
        source: profsName
    });

    $("#cours_search_categorie_category_name").autocomplete({
        autoFocus: true,
        maxResults: 10,
        source: catNames
    });

    function updateCity() {
        var prof_id = $("#prof_id").val();
        $.ajax({
            method: "POST",
            url: Routing.generate('lgp_prof_update_city', {'prof_id': prof_id}),
            data: {},
            success: function (answer, status) {
                window.cities = [];
                for (i = 0; i < answer.length; i++) {
                    cities.push(answer[i].ville);
                }
                $('#ville_detail option').each(function () {
                    if ($(this).val() != '' && !$(this).attr('disabled')) {
                        $(this).remove();
                    }
                });
                for (i = 0; i < cities.length; i++) {
                    $('#ville_detail').append('<option value="' + cities[i] + '">' + cities[i] + '</option>');
                }

                $("#loading-classe").css({'display': 'none'});
            },
            error: function (answer, status) {
                console.log(answer + "   " + status);
            }
        });
    };

    function updateQuarter() {
        var ville = $("#ville_detail option:selected").val();
        $("#loading-quarter").css({'display': 'block'});

        $.ajax({
            method: "POST",
            url: Routing.generate('lgp_prof_update_quarter', {'ville': ville}),
            data: {},
            success: function (answer, status) {
                window.quarters = [];
                for (i = 0; i < answer.length; i++) {
                    quarters.push(answer[i].intitule);
                }
                $('#quartier_detail option').each(function () {
                    if ($(this).val() != '' && !$(this).attr('disabled')) {
                        $(this).remove();
                    }
                });
                for (i = 0; i < quarters.length; i++) {
                    $('#quartier_detail').append('<option value="' + quarters[i] + '">' + quarters[i] + '</option>');
                }

                $("#loading-classe").css({'display': 'none'});
            },
            error: function (answer, status) {
                console.log(answer + "   " + status);
            }
        });
    };

    $("#ville_detail").on('change', function(event){
       event.preventDefault();
        updateQuarter();
    });

    $("#lieuDeCours").on('change', function(event){
       event.preventDefault();
        updateCity();
        var city = $("#ville_detail option:selected").val();
        if (city != ""){
            updateQuarter();
        }
    });
    
    

})
;