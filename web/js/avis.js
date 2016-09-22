$(function () {

  $('.avis-table tbody tr a').click(function (e) {
    $('.avis-details').html('<img src="{{ asset(\'images / ajax - loader.gif\') }}" width="2" height="2">');

    var url = $(this).attr('href');

    // Envoi de la requete ajax de recuperation des details sur l'avis
    $.ajax({
      type: 'GET',
      url: url,
      success: function (data) {
        $('.avis-details').html(data);
      },
      error: function () {
        console.log("La requête n'a pas abouti !");
      }
    });

    e.preventDefault();

    return false;
  });


  /**
   * Notification des AVIS
   */
  
  setInterval(updateNbAvis, 180000);

  function updateNbAvis() {
    var url = Routing.generate('lgp_user_prof_avis');
    url = url + '?is_read=false';

    $.ajax({
      type: 'GET',
      url: url,
      success: function (data) {
        $('#avis-link span').html(data);
      },
      error: function () {
        console.log("La requête n'a pas abouti !");
      }
    });
  }

});