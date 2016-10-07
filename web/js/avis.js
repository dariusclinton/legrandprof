$(function () {

  $('.avis-table tbody tr a.show-avis-link').click(function (e) {
    $('.avis-details').html('<span><i class="fa fa-spinner fa-4x fa-spin"></i></span>');

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
  
//  setInterval(updateNbAvis, 10000);
//
//  function updateNbAvis() {
//    var url = Routing.generate('lgp_user_avis');
//    url = url + '?is_read=false';
//
//    $.ajax({
//      type: 'GET',
//      url: url,
//      success: function (data) {
//        $('.avis-link span').html(data);
//      },
//      error: function () {
//        console.log("La requête n'a pas abouti !");
//      }
//    });
//  }

});