$(function () {

        window.learn = [];
        window.profsName = [];
        window.catNames = [];

        $('[data-onload]').each(function () {
            eval($(this).data('onload'));
        });

        function loadCourses() {
            learn.splice(0, learn.length);
            $.ajax({
                method: "GET",
                url: Routing.generate('lgp_course_all_intitule'),
                data: {},
                success: function (answer, status) {
                    for (i = 0; i < answer.length; i++) {
                        learn.push(answer[i].intitule);
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
            source: learn
        });

        $("#cours_search_course_city_intitule").autocomplete({
            autoFocus: false,
            maxResults: 10,
            source: learn
        });
        $("#cours_search_course_quarter_intitule").autocomplete({
            autoFocus: true,
            maxResults: 10,
            source: learn
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
        })
    }
)
;