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
$(function() {
  $('.message_read').click(function (e) {
    $('.messages-details').html('<img src="{{ asset(\'images / ajax - loader.gif\') }}" width="2" height="2">');

    var url = $(this).attr('href');

    // Envoi de la requete ajax de recuperation des details sur l'avis
    $.ajax({
      type: 'GET',
      url: url,
      success: function (data) {
        $('.messages-details').html(data);
      },
      error: function () {
        console.log("La requête n'a pas abouti !");
      }
    });

    e.preventDefault();

    return false;
  });
  
  
  /**
   * Notification des MESSAGES
   */
  
//  setInterval(updateNbAvis, 180000);
//
//  function updateNbAvis() {
//    var url = Routing.generate('lgp_user_message_receive');
//    url = url + '?is_read=false';
//
//    $.ajax({
//      type: 'GET',
//      url: url,
//      success: function (data) {
//        $('.message-link span').html(data);
//      },
//      error: function () {
//        console.log("La requête n'a pas abouti !");
//      }
//    });
//  }
  
});