<?php

/* LGPUserBundle:Prof:update.html.twig */
class __TwigTemplate_85a93de41bc782e5659a76296098f4911014ad848a668baac5211e34432e791b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Prof:update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ed4b43eccb54f08c3f0e6df3b4dffbf1d540e58790b8e8790c9ccc491b7eb9c = $this->env->getExtension("native_profiler");
        $__internal_1ed4b43eccb54f08c3f0e6df3b4dffbf1d540e58790b8e8790c9ccc491b7eb9c->enter($__internal_1ed4b43eccb54f08c3f0e6df3b4dffbf1d540e58790b8e8790c9ccc491b7eb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Prof:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ed4b43eccb54f08c3f0e6df3b4dffbf1d540e58790b8e8790c9ccc491b7eb9c->leave($__internal_1ed4b43eccb54f08c3f0e6df3b4dffbf1d540e58790b8e8790c9ccc491b7eb9c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_202be42c78b02de8ea37da6a1d77252c0d7258afb39b8a7e374d9764e1faab25 = $this->env->getExtension("native_profiler");
        $__internal_202be42c78b02de8ea37da6a1d77252c0d7258afb39b8a7e374d9764e1faab25->enter($__internal_202be42c78b02de8ea37da6a1d77252c0d7258afb39b8a7e374d9764e1faab25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "nom", array()), "html", null, true);
        echo "  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_202be42c78b02de8ea37da6a1d77252c0d7258afb39b8a7e374d9764e1faab25->leave($__internal_202be42c78b02de8ea37da6a1d77252c0d7258afb39b8a7e374d9764e1faab25_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3348328966d57c69cecd6e10ba586a5cabd915bb723cb1c4598f942cb1946657 = $this->env->getExtension("native_profiler");
        $__internal_3348328966d57c69cecd6e10ba586a5cabd915bb723cb1c4598f942cb1946657->enter($__internal_3348328966d57c69cecd6e10ba586a5cabd915bb723cb1c4598f942cb1946657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <div class=\"row\">
    <div class=\"col-md-6 col-md-offset-3\">

      ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

      ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

      <!-- Entite User -->
      <div class=\"form-group\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "nom", array()), 'label', array("label_attr" => array(), "label" => "Nom"));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "nom", array()), 'widget', array("attr" => array()));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "nom", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "prenoms", array()), 'label', array("label_attr" => array(), "label" => "Prénoms"));
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "prenoms", array()), 'widget', array("attr" => array()));
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "prenoms", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "dateNaissance", array()), 'label', array("label_attr" => array(), "label" => "Date de naissance"));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "dateNaissance", array()), 'widget', array("attr" => array()));
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "dateNaissance", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "sexe", array()), 'label', array("label_attr" => array(), "label" => "Sexe"));
        echo "
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "sexe", array()), 'widget', array("attr" => array()));
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "sexe", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "numTelephone", array()), 'label', array("label_attr" => array(), "label" => "Numéro de téléphone"));
        echo "
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "numTelephone", array()), 'widget', array("attr" => array()));
        echo "
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "numTelephone", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "pays", array()), 'label', array("label_attr" => array(), "label" => "Pays de résidence"));
        echo "
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "pays", array()), 'widget', array("attr" => array()));
        echo "
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "pays", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "username", array()), 'label', array("label_attr" => array(), "label" => "Pseudo"));
        echo "
        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "username", array()), 'widget', array("attr" => array()));
        echo "
        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "username", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "email", array()), 'label', array("label_attr" => array(), "label" => "Adresse email"));
        echo "
        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "email", array()), 'widget', array("attr" => array()));
        echo "
        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "email", array()), 'errors');
        echo "
      </div>

      ";
        // line 69
        echo "
      <div class=\"form-group\">
          ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "file", array()), 'label', array("label" => "Photo de profil"));
        echo "
          ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "file", array()), 'errors');
        echo "
      </div>
      <!-- end Entite User -->

      <div class=\"form-group\">
          ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'label', array("label" => "Ville de résidence"));
        echo "
          ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
          ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quartier", array()), 'label', array("label" => "Quartier"));
        echo "
          ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quartier", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quartier", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
          ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "boitePostale", array()), 'label', array("label" => "Boîte postale"));
        echo "
          ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "boitePostale", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "boitePostale", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
          ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "situationMatrimoniale", array()), 'label', array("label" => "Situation matrimoniale"));
        echo "
          ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "situationMatrimoniale", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "situationMatrimoniale", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
          ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveauScolaire", array()), 'label', array("label" => "Niveau scolaire"));
        echo "
          ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveauScolaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveauScolaire", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
          ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreEnfants", array()), 'label', array("label" => "Nombre d'enfants"));
        echo "
          ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreEnfants", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreEnfants", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
          ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation", array()), 'label', array("label" => "Présentez vous en quelques lignes"));
        echo "
          ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
          ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'label', array("label" => "Quelle est votre profession ?"));
        echo "
          ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
          ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "experiencePros", array()), 'label', array("label" => "Expérience professionnelle"));
        echo "
          ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "experiencePros", array()), 'widget');
        echo "
          <a href=\"#\" id=\"add_experience\" class=\"btn btn-primary\">Ajouter une expérience</a>
          ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "experiencePros", array()), 'errors');
        echo "
      </div>

      <div class=\"form-group\">
          ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplomes", array()), 'label', array("label" => "Diplômes obtenus"));
        echo "
          ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplomes", array()), 'widget');
        echo "
          <a href=\"#\" id=\"add_diplome\" class=\"btn btn-primary\">Ajouter un diplome</a>
          ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplomes", array()), 'errors');
        echo "
      </div>

      ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

      <div class=\"form-group\">
        <input type=\"submit\" name=\"name\" value=\"Enregistrer\" class=\"btn btn-primary\">
      </div>

      ";
        // line 145
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
  </div>



";
        
        $__internal_3348328966d57c69cecd6e10ba586a5cabd915bb723cb1c4598f942cb1946657->leave($__internal_3348328966d57c69cecd6e10ba586a5cabd915bb723cb1c4598f942cb1946657_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed4ec53ba5c1430f40b70837722f6dadf5eddca65506dbad6a0b0a8ab9bcf8e4 = $this->env->getExtension("native_profiler");
        $__internal_ed4ec53ba5c1430f40b70837722f6dadf5eddca65506dbad6a0b0a8ab9bcf8e4->enter($__internal_ed4ec53ba5c1430f40b70837722f6dadf5eddca65506dbad6a0b0a8ab9bcf8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 154
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script type=\"text/javascript\">

    \$(function() {

      /**
        Gestion de l'ajout des ExperiencePro
      */


      // On recupere la balise <div> qui contient l'attribut <<data-prototype>> qui nous interesse
      var \$container = \$('div#prof_update_experiencePros');

      // ON definit un compteur unique pour nommer les champs qon va ajouter dynamiquement
      var index = \$container.find(':input').length;

      // On ajoute un nouveau champ a chaque clic sur le lien d'ajout
      \$('#add_experience').click(function(e) {
        addExperience(\$container);

        e.preventDefault();
        return false;
      });

      // On ajoute un premier champ automatiquement s'il en existe pas deja un
      if (index === 0) {
        // addExperience(\$container);
      } else {
        // S'il existe deja des categories, on ajoute un lien de suppression pour chacune d'entre elles
        \$container.children('div').each(function() {
          addDeleteLink(\$(this));
        });
      }

      // Fonction qui ajoute un formulaire de ExperienceProType
      function addExperience(\$container) {
        // Dans le contenu de l'attribut « data-prototype », on remplace :
        // - le texte \"__name__label__\" qu'il contient par le label du champ
        // - le texte \"__name__\" qu'il contient par le numéro du champ
        var template = \$container.attr('data-prototype')
          .replace(/__name__label__/g, 'Expérience ' + (index+1))
          .replace(/__name__/g, index) ;

         // On cree un objet jquery qui contient ce template
         var \$prototype = \$(template);

         // On ajoute au prototype un lien pour pourvoir supprimer l'experience
         addDeleteLink(\$prototype);

         // On ajoute le prototype a la fin de la balise <div>
         \$container.append(\$prototype);

         // On incremente le compteur
         index++;
      }

      // La fonction qui ajoute un lien de suppression d'une catégorie
     function addDeleteLink(\$prototype) {
       // Création du lien
       var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

       // Ajout du lien
       \$prototype.append(\$deleteLink);

       // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
       \$deleteLink.click(function(e) {
         \$prototype.remove();

         e.preventDefault(); // évite qu'un # apparaisse dans l'URL
         return false;
       });
     }


     /**
       Gestion de l'ajout des Diplomes
     */
     var \$container2 = \$('div#prof_update_diplomes');
     var index2 = \$container2.find(':input').length;

     \$('#add_diplome').click(function(e) {
       addDiplome(\$container2);

       e.preventDefault();
       return false;
     });

     if (index2 === 0) {
       // addDiplome(\$container2);
     } else {
       \$container2.children('div').each(function() {
         addDeleteLink(\$(this));
       });
     }

     function addDiplome(\$container2) {
       // Dans le contenu de l'attribut « data-prototype », on remplace :
       // - le texte \"__name__label__\" qu'il contient par le label du champ
       // - le texte \"__name__\" qu'il contient par le numéro du champ
       var template = \$container2.attr('data-prototype')
         .replace(/__name__label__/g, 'Diplôme ' + (index+1))
         .replace(/__name__/g, index2) ;

        // On cree un objet jquery qui contient ce template
        var \$prototype = \$(template);

        // On ajoute au prototype un lien pour pourvoir supprimer l'experience
        addDeleteLink(\$prototype);

        // On ajoute le prototype a la fin de la balise <div>
        \$container2.append(\$prototype);

        // On incremente le compteur
        index2++;
     }
    });
  </script>
";
        
        $__internal_ed4ec53ba5c1430f40b70837722f6dadf5eddca65506dbad6a0b0a8ab9bcf8e4->leave($__internal_ed4ec53ba5c1430f40b70837722f6dadf5eddca65506dbad6a0b0a8ab9bcf8e4_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Prof:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 154,  393 => 153,  379 => 145,  370 => 139,  364 => 136,  359 => 134,  355 => 133,  348 => 129,  343 => 127,  339 => 126,  332 => 122,  328 => 121,  324 => 120,  317 => 116,  313 => 115,  309 => 114,  302 => 110,  298 => 109,  294 => 108,  287 => 104,  283 => 103,  279 => 102,  272 => 98,  268 => 97,  264 => 96,  257 => 92,  253 => 91,  249 => 90,  242 => 86,  238 => 85,  234 => 84,  227 => 80,  223 => 79,  219 => 78,  211 => 73,  207 => 72,  203 => 71,  199 => 69,  193 => 62,  189 => 61,  185 => 60,  178 => 56,  174 => 55,  170 => 54,  163 => 50,  159 => 49,  155 => 48,  148 => 44,  144 => 43,  140 => 42,  133 => 38,  129 => 37,  125 => 36,  118 => 32,  114 => 31,  110 => 30,  103 => 26,  99 => 25,  95 => 24,  88 => 20,  84 => 19,  80 => 18,  73 => 14,  68 => 12,  62 => 8,  56 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*   {{ prof.user.prenoms }} {{ prof.user.nom }}  - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <div class="row">*/
/*     <div class="col-md-6 col-md-offset-3">*/
/* */
/*       {{ form_start(form) }}*/
/* */
/*       {{ form_errors(form) }}*/
/* */
/*       <!-- Entite User -->*/
/*       <div class="form-group">*/
/*         {{ form_label(form.user.nom, "Nom", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.user.nom, {'attr': {}}) }}*/
/*         {{ form_errors(form.user.nom) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         {{ form_label(form.user.prenoms, "Prénoms", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.user.prenoms, {'attr': {}}) }}*/
/*         {{ form_errors(form.user.prenoms) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         {{ form_label(form.user.dateNaissance, "Date de naissance", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.user.dateNaissance, {'attr': {}}) }}*/
/*         {{ form_errors(form.user.dateNaissance) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         {{ form_label(form.user.sexe, "Sexe", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.user.sexe, {'attr': {}}) }}*/
/*         {{ form_errors(form.user.sexe) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         {{ form_label(form.user.numTelephone, "Numéro de téléphone", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.user.numTelephone, {'attr': {}}) }}*/
/*         {{ form_errors(form.user.numTelephone) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         {{ form_label(form.user.pays, "Pays de résidence", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.user.pays, {'attr': {}}) }}*/
/*         {{ form_errors(form.user.pays) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         {{ form_label(form.user.username, "Pseudo", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.user.username, {'attr': {}}) }}*/
/*         {{ form_errors(form.user.username) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         {{ form_label(form.user.email, "Adresse email", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.user.email, {'attr': {}}) }}*/
/*         {{ form_errors(form.user.email) }}*/
/*       </div>*/
/* */
/*       {#<div class="form-group">*/
/*         {{ form_widget(form.user.plainPassword, {'attr': {}}) }}*/
/*         {{ form_errors(form.user.plainPassword) }}*/
/*       </div>#}*/
/* */
/*       <div class="form-group">*/
/*           {{ form_label(form.user.file, "Photo de profil") }}*/
/*           {{ form_widget(form.user.file, {'attr': {'class': 'form-control'}}) }}*/
/*           {{ form_errors(form.user.file) }}*/
/*       </div>*/
/*       <!-- end Entite User -->*/
/* */
/*       <div class="form-group">*/
/*           {{ form_label(form.ville, "Ville de résidence") }}*/
/*           {{ form_widget(form.ville, {'attr': {'class': 'form-control'}}) }}*/
/*           {{ form_errors(form.ville) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*           {{ form_label(form.quartier, "Quartier") }}*/
/*           {{ form_widget(form.quartier, {'attr': {'class': 'form-control'}}) }}*/
/*           {{ form_errors(form.quartier) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*           {{ form_label(form.boitePostale, "Boîte postale") }}*/
/*           {{ form_widget(form.boitePostale, {'attr': {'class': 'form-control'}}) }}*/
/*           {{ form_errors(form.boitePostale) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*           {{ form_label(form.situationMatrimoniale, "Situation matrimoniale") }}*/
/*           {{ form_widget(form.situationMatrimoniale, {'attr': {'class': 'form-control'}}) }}*/
/*           {{ form_errors(form.situationMatrimoniale) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*           {{ form_label(form.niveauScolaire, "Niveau scolaire") }}*/
/*           {{ form_widget(form.niveauScolaire, {'attr': {'class': 'form-control'}}) }}*/
/*           {{ form_errors(form.niveauScolaire) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*           {{ form_label(form.nombreEnfants, "Nombre d'enfants") }}*/
/*           {{ form_widget(form.nombreEnfants, {'attr': {'class': 'form-control'}}) }}*/
/*           {{ form_errors(form.nombreEnfants) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*           {{ form_label(form.presentation, "Présentez vous en quelques lignes") }}*/
/*           {{ form_widget(form.presentation, {'attr': {'class': 'form-control'}}) }}*/
/*           {{ form_errors(form.presentation) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*           {{ form_label(form.profession, "Quelle est votre profession ?") }}*/
/*           {{ form_widget(form.profession, {'attr': {'class': 'form-control'}}) }}*/
/*           {{ form_errors(form.profession) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*           {{ form_label(form.experiencePros, "Expérience professionnelle") }}*/
/*           {{ form_widget(form.experiencePros) }}*/
/*           <a href="#" id="add_experience" class="btn btn-primary">Ajouter une expérience</a>*/
/*           {{ form_errors(form.experiencePros) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*           {{ form_label(form.diplomes, "Diplômes obtenus") }}*/
/*           {{ form_widget(form.diplomes) }}*/
/*           <a href="#" id="add_diplome" class="btn btn-primary">Ajouter un diplome</a>*/
/*           {{ form_errors(form.diplomes) }}*/
/*       </div>*/
/* */
/*       {{ form_rest(form) }}*/
/* */
/*       <div class="form-group">*/
/*         <input type="submit" name="name" value="Enregistrer" class="btn btn-primary">*/
/*       </div>*/
/* */
/*       {{ form_end(form) }}*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   {{ parent() }}*/
/* */
/*   <script type="text/javascript">*/
/* */
/*     $(function() {*/
/* */
/*       /***/
/*         Gestion de l'ajout des ExperiencePro*/
/*       *//* */
/* */
/* */
/*       // On recupere la balise <div> qui contient l'attribut <<data-prototype>> qui nous interesse*/
/*       var $container = $('div#prof_update_experiencePros');*/
/* */
/*       // ON definit un compteur unique pour nommer les champs qon va ajouter dynamiquement*/
/*       var index = $container.find(':input').length;*/
/* */
/*       // On ajoute un nouveau champ a chaque clic sur le lien d'ajout*/
/*       $('#add_experience').click(function(e) {*/
/*         addExperience($container);*/
/* */
/*         e.preventDefault();*/
/*         return false;*/
/*       });*/
/* */
/*       // On ajoute un premier champ automatiquement s'il en existe pas deja un*/
/*       if (index === 0) {*/
/*         // addExperience($container);*/
/*       } else {*/
/*         // S'il existe deja des categories, on ajoute un lien de suppression pour chacune d'entre elles*/
/*         $container.children('div').each(function() {*/
/*           addDeleteLink($(this));*/
/*         });*/
/*       }*/
/* */
/*       // Fonction qui ajoute un formulaire de ExperienceProType*/
/*       function addExperience($container) {*/
/*         // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/*         // - le texte "__name__label__" qu'il contient par le label du champ*/
/*         // - le texte "__name__" qu'il contient par le numéro du champ*/
/*         var template = $container.attr('data-prototype')*/
/*           .replace(/__name__label__/g, 'Expérience ' + (index+1))*/
/*           .replace(/__name__/g, index) ;*/
/* */
/*          // On cree un objet jquery qui contient ce template*/
/*          var $prototype = $(template);*/
/* */
/*          // On ajoute au prototype un lien pour pourvoir supprimer l'experience*/
/*          addDeleteLink($prototype);*/
/* */
/*          // On ajoute le prototype a la fin de la balise <div>*/
/*          $container.append($prototype);*/
/* */
/*          // On incremente le compteur*/
/*          index++;*/
/*       }*/
/* */
/*       // La fonction qui ajoute un lien de suppression d'une catégorie*/
/*      function addDeleteLink($prototype) {*/
/*        // Création du lien*/
/*        var $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');*/
/* */
/*        // Ajout du lien*/
/*        $prototype.append($deleteLink);*/
/* */
/*        // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie*/
/*        $deleteLink.click(function(e) {*/
/*          $prototype.remove();*/
/* */
/*          e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*          return false;*/
/*        });*/
/*      }*/
/* */
/* */
/*      /***/
/*        Gestion de l'ajout des Diplomes*/
/*      *//* */
/*      var $container2 = $('div#prof_update_diplomes');*/
/*      var index2 = $container2.find(':input').length;*/
/* */
/*      $('#add_diplome').click(function(e) {*/
/*        addDiplome($container2);*/
/* */
/*        e.preventDefault();*/
/*        return false;*/
/*      });*/
/* */
/*      if (index2 === 0) {*/
/*        // addDiplome($container2);*/
/*      } else {*/
/*        $container2.children('div').each(function() {*/
/*          addDeleteLink($(this));*/
/*        });*/
/*      }*/
/* */
/*      function addDiplome($container2) {*/
/*        // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/*        // - le texte "__name__label__" qu'il contient par le label du champ*/
/*        // - le texte "__name__" qu'il contient par le numéro du champ*/
/*        var template = $container2.attr('data-prototype')*/
/*          .replace(/__name__label__/g, 'Diplôme ' + (index+1))*/
/*          .replace(/__name__/g, index2) ;*/
/* */
/*         // On cree un objet jquery qui contient ce template*/
/*         var $prototype = $(template);*/
/* */
/*         // On ajoute au prototype un lien pour pourvoir supprimer l'experience*/
/*         addDeleteLink($prototype);*/
/* */
/*         // On ajoute le prototype a la fin de la balise <div>*/
/*         $container2.append($prototype);*/
/* */
/*         // On incremente le compteur*/
/*         index2++;*/
/*      }*/
/*     });*/
/*   </script>*/
/* {% endblock %}*/
/* */
