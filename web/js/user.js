$(function () {

  /**
   gestion du choix des jours de cours
   */

  $("#j2").change(function (event) {
    start = $("#j2_start");
    end = $("#j2_end");

    /*alert(start.attr('disabled'));*/

    if (start.attr('disabled')) {
      start.removeAttr('disabled');
    } else {
      start.attr('disabled', 'disabled');
    }

    if (end.attr('disabled')) {
      end.removeAttr('disabled');
    } else {
      end.attr('disabled', 'disabled');
    }
  });

//    // Affichage du datepicker
//    $('.datepicker').datepicker({
//        changeMonth: true,
//        changeYear: true,
//        dateFormat: "yy-mm-dd",
//        yearRange: "1950:2010"
//    });

  /**
   *  Gestion de l'ajout des ExperiencePro
   *  
   * @type $
   */

  // On recupere la balise <div> qui contient l'attribut <<data-prototype>> qui nous interesse
  var $container = $('div#fos_user_profile_form_experiencePros');

  // ON definit un compteur unique pour nommer les champs qon va ajouter dynamiquement
  var index = 0;

  // On ajoute un nouveau champ a chaque clic sur le lien d'ajout
  $('#add_experience').click(function (e) {
    addExperience($container);
    e.preventDefault();
    return false;
  });


//  S'il existe deja des categories, on ajoute un lien de suppression pour chacune d'entre elles
    $container.children('div').each(function () {
      addDeleteLink($(this));
    });

  // Fonction qui ajoute un formulaire de ExperienceProType
  function addExperience($container) {
    // Dans le contenu de l'attribut « data-prototype », on remplace :
    // - le texte "__name__label__" qu'il contient par le label du champ
    // - le texte "__name__" qu'il contient par le numéro du champ
    var template = $container.attr('data-prototype')
            .replace(/__name__label__/g, 'Expérience ' + (index + 1))
            .replace(/__name__/g, index);

    // On cree un objet jquery qui contient ce template
    var $prototype = $(template);

    // On ajoute au prototype un lien pour pourvoir supprimer l'experience
    addDeleteLink($prototype);

    // On ajoute le prototype a la fin de la balise <div>
    $container.append($prototype);

    // On incremente le compteur
    index++;
  }

  // La fonction qui ajoute un lien de suppression d'une catégorie
  function addDeleteLink($prototype) {
    // Création du lien
    var $deleteLink = $('<a href="#" class="btn btn-danger btn-sm">Supprimer</a>');

    // Ajout du lien
    $prototype.append($deleteLink);

    // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
    $deleteLink.click(function (e) {
      $prototype.remove();
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });
  }


  /**
   *  Gestion de l'ajout des Diplomes
   *  
   * @type $
   */

  // On recupere la balise <div> qui contient l'attribut <<data-prototype>> qui nous interesse
  var $container2 = $('div#fos_user_profile_form_diplomes');

  // ON definit un compteur unique pour nommer les champs qon va ajouter dynamiquement
//  var index2 = $container2.find(':input').length;
  var index2 = 0;

  // On ajoute un nouveau champ a chaque clic sur le lien d'ajout
  $('#add_diplome').click(function (e) {
    addDiplome($container2);
    e.preventDefault();
    return false;
  });
 
  // S'il existe deja des categories, on ajoute un lien de suppression pour chacune d'entre elles
  $container2.children('div').each(function () {
    addDeleteLink($(this));
  });
 

  // Fonction qui ajoute un formulaire de ExperienceProType
  function addDiplome($container) {
    // Dans le contenu de l'attribut « data-prototype », on remplace :
    // - le texte "__name__label__" qu'il contient par le label du champ
    // - le texte "__name__" qu'il contient par le numéro du champ
    var template = $container.attr('data-prototype')
            .replace(/__name__label__/g, 'Diplome ' + (index2 + 1))
            .replace(/__name__/g, index2);

    // On cree un objet jquery qui contient ce template
    var $prototype = $(template);

    // On ajoute au prototype un lien pour pourvoir supprimer l'experience
    addDeleteLink($prototype);

    // On ajoute le prototype a la fin de la balise <div>
    $container.append($prototype);

    // On incremente le compteur
    index2++;
  }




///**
//   *  Gestion de l'ajout de QuartierCibles
//   *  
//   * @type $
//   */
//
//  // On recupere la balise <div> qui contient l'attribut <<data-prototype>> qui nous interesse
//  var $container3 = $('div#fos_user_profile_form_quartierCibles');
//
//  // ON definit un compteur unique pour nommer les champs qon va ajouter dynamiquement
//  var index3 = 0;
//
//  // On ajoute un nouveau champ a chaque clic sur le lien d'ajout
//  $('#add_quartier').click(function (e) {
//    addQuartier($container3);
//    e.preventDefault();
//    return false;
//  });
// 
//  // S'il existe deja des categories, on ajoute un lien de suppression pour chacune d'entre elles
//  $container3.children('div').each(function () {
//    addDeleteLink($(this));
//  });
// 
//
//  // Fonction qui ajoute un formulaire de ExperienceProType
//  function addQuartier($container) {
//    // Dans le contenu de l'attribut « data-prototype », on remplace :
//    // - le texte "__name__label__" qu'il contient par le label du champ
//    // - le texte "__name__" qu'il contient par le numéro du champ
//    var template = $container.attr('data-prototype')
//            .replace(/__name__label__/g, 'Quartier n ' + (index3 + 1))
//            .replace(/__name__/g, index3);
//
//    // On cree un objet jquery qui contient ce template
//    var $prototype = $(template);
//
//    // On ajoute au prototype un lien pour pourvoir supprimer l'experience
//    addDeleteLink($prototype);
//
//    // On ajoute le prototype a la fin de la balise <div>
//    $container.append($prototype);
//
//    // On incremente le compteur
//    index3++;
//  }



  /**
   * Confirmer la suppression d'un avis
   */
  $('.delete_confirm').click(function () {
    if (confirm('Etes vous certain de vouloir supprimer cette entrée ?')) {

    } else {
      return false;
    }
  });
});
