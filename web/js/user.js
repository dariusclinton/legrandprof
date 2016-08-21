$(function () {

    // Affichage du datepicker
    $('.datepicker').datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        yearRange: "1950:2010"
    });





    /**
     *  Gestion de l'ajout des ExperiencePro
     *  
     * @type $
     */

    // On recupere la balise <div> qui contient l'attribut <<data-prototype>> qui nous interesse
    var $container = $('div#fos_user_profile_form_experiencePros');

    // ON definit un compteur unique pour nommer les champs qon va ajouter dynamiquement
    var index = $container.find(':input').length;

    // On ajoute un nouveau champ a chaque clic sur le lien d'ajout
    $('#add_experience').click(function (e) {
        addExperience($container);
        e.preventDefault();
        return false;
    });

    // On ajoute un premier champ automatiquement s'il en existe pas deja un
    if (index === 0) {
        // addExperience($container);
    } else {
        // S'il existe deja des categories, on ajoute un lien de suppression pour chacune d'entre elles
        $container.children('div').each(function () {
            addDeleteLink($(this));
        });
    }

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
});
