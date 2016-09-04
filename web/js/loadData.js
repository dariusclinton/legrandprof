$(function() {

    window.learn = [];
    
    $('[data-onload]').each(function() {
        eval($(this).data('onload'));
    });

    function loadCourses() {
        learn.splice(0, learn.length);
        $.ajax({
            method: "GET",
            url: Routing.generate('lgp_course_all_intitule'),
            data: {}
        }).success(function(answer, status) {
            for (i = 0; i < answer.length; i++)
            {
                learn.push(answer[i].intitule);
            }
        }).error(function(answer, status) {
            alert('error');
            console.log(answer + "   " + status);
        });
    }
    /*$("#cours_search_intitule").click(function() {
     learn.splice(0, learn.length);
     $.ajax({
     method: "GET",
     url: Routing.generate('lgp_course_all_intitule'),
     data: {}
     }).success(function(answer, status) {
     for (i = 0; i < answer.length; i++)
     {
     learn.push(answer[i].intitule);
     }
     }).error(function(answer, status) {
     alert('error');
     console.log(answer + "   " + status);
     });
     });*/
    $("#cours_search_intitule").autocomplete({
        autoFocus: true,
        maxResults: 10,
        source: learn
    });
    $("#cours_search_refine_intitule").autocomplete({
        autoFocus: true,
        maxResults: 10,
        source: learn
    });
});