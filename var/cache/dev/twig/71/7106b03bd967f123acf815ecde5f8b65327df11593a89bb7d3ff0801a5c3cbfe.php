<?php

/* LGPUserBundle:Prof:register.html.twig */
class __TwigTemplate_091581b8e415a5c7d6d63c55e5f62c6b819a4c5ae2892e89ffcd4d5223e0ae23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Prof:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Création de compte prof - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"row\">
    <div class=\"col-md-6 col-md-offset-3\">
      <h3 class=\"text-center\">Création de compte prof</h3>

      ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

        <!-- Entite User -->
        <div class=\"form-group\">
          ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "nom", array()), 'label', array("label_attr" => array(), "label" => "Nom"));
        echo "
          ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "nom", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "nom", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "prenoms", array()), 'label', array("label_attr" => array(), "label" => "Prénoms"));
        echo "
          ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "prenoms", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "prenoms", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "dateNaissance", array()), 'label', array("label_attr" => array(), "label" => "Date de naissance"));
        echo "
          ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "dateNaissance", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "dateNaissance", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "sexe", array()), 'label', array("label_attr" => array(), "label" => "Sexe"));
        echo "
          ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "sexe", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "sexe", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "numTelephone", array()), 'label', array("label_attr" => array(), "label" => "Numéro de téléphone"));
        echo "
          ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "numTelephone", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "numTelephone", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "pays", array()), 'label', array("label_attr" => array(), "label" => "Pays de résidence"));
        echo "
          ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "pays", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "pays", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "username", array()), 'label', array("label_attr" => array(), "label" => "Pseudo"));
        echo "
          ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "username", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "username", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "email", array()), 'label', array("label_attr" => array(), "label" => "Adresse email"));
        echo "
          ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "email", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "email", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "plainPassword", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "plainPassword", array()), 'errors');
        echo "
        </div>

        ";
        // line 75
        echo "        <!-- end Entite User -->

        <div class=\"form-group\">
            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'label', array("label" => "Ville de résidence"));
        echo "
            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quartier", array()), 'label', array("label" => "Quartier"));
        echo "
            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quartier", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quartier", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "boitePostale", array()), 'label', array("label" => "Boîte postale"));
        echo "
            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "boitePostale", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "boitePostale", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "situationMatrimoniale", array()), 'label', array("label" => "Situation matrimoniale"));
        echo "
            ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "situationMatrimoniale", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "situationMatrimoniale", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "niveauScolaire", array()), 'label', array("label" => "Niveau scolaire"));
        echo "
            ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "niveauScolaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "niveauScolaire", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreEnfants", array()), 'label', array("label" => "Nombre d'enfants"));
        echo "
            ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreEnfants", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreEnfants", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presentation", array()), 'label', array("label" => "Présentez vous en quelques lignes"));
        echo "
            ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presentation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presentation", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profession", array()), 'label', array("label" => "Quelle est votre profession ?"));
        echo "
            ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profession", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profession", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            <input type=\"submit\" value=\"Créer le compte\" class=\"btn btn-default\"/>
        </div>

        ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

      ";
        // line 131
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Prof:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 131,  318 => 129,  308 => 122,  304 => 121,  300 => 120,  293 => 116,  289 => 115,  285 => 114,  278 => 110,  274 => 109,  270 => 108,  263 => 104,  259 => 103,  255 => 102,  248 => 98,  244 => 97,  240 => 96,  233 => 92,  229 => 91,  225 => 90,  218 => 86,  214 => 85,  210 => 84,  203 => 80,  199 => 79,  195 => 78,  190 => 75,  184 => 67,  180 => 66,  173 => 62,  169 => 61,  165 => 60,  158 => 56,  154 => 55,  150 => 54,  143 => 50,  139 => 49,  135 => 48,  128 => 44,  124 => 43,  120 => 42,  113 => 38,  109 => 37,  105 => 36,  98 => 32,  94 => 31,  90 => 30,  83 => 26,  79 => 25,  75 => 24,  68 => 20,  64 => 19,  60 => 18,  53 => 14,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*   Création de compte prof - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div class="row">*/
/*     <div class="col-md-6 col-md-offset-3">*/
/*       <h3 class="text-center">Création de compte prof</h3>*/
/* */
/*       {{ form_start(form) }}*/
/* */
/*         {{ form_errors(form) }}*/
/* */
/*         <!-- Entite User -->*/
/*         <div class="form-group">*/
/*           {{ form_label(form.user.nom, "Nom", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.user.nom, {'attr': {}}) }}*/
/*           {{ form_errors(form.user.nom) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.user.prenoms, "Prénoms", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.user.prenoms, {'attr': {}}) }}*/
/*           {{ form_errors(form.user.prenoms) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.user.dateNaissance, "Date de naissance", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.user.dateNaissance, {'attr': {}}) }}*/
/*           {{ form_errors(form.user.dateNaissance) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.user.sexe, "Sexe", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.user.sexe, {'attr': {}}) }}*/
/*           {{ form_errors(form.user.sexe) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.user.numTelephone, "Numéro de téléphone", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.user.numTelephone, {'attr': {}}) }}*/
/*           {{ form_errors(form.user.numTelephone) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.user.pays, "Pays de résidence", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.user.pays, {'attr': {}}) }}*/
/*           {{ form_errors(form.user.pays) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.user.username, "Pseudo", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.user.username, {'attr': {}}) }}*/
/*           {{ form_errors(form.user.username) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.user.email, "Adresse email", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.user.email, {'attr': {}}) }}*/
/*           {{ form_errors(form.user.email) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_widget(form.user.plainPassword, {'attr': {}}) }}*/
/*           {{ form_errors(form.user.plainPassword) }}*/
/*         </div>*/
/* */
/*         {# <div class="form-group">*/
/*             {{ form_label(form.user.photo, "Photo de profil") }}*/
/*             {{ form_widget(form.user.photo, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.user.photo) }}*/
/*         </div> #}*/
/*         <!-- end Entite User -->*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.ville, "Ville de résidence") }}*/
/*             {{ form_widget(form.ville, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.ville) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.quartier, "Quartier") }}*/
/*             {{ form_widget(form.quartier, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.quartier) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.boitePostale, "Boîte postale") }}*/
/*             {{ form_widget(form.boitePostale, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.boitePostale) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.situationMatrimoniale, "Situation matrimoniale") }}*/
/*             {{ form_widget(form.situationMatrimoniale, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.situationMatrimoniale) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.niveauScolaire, "Niveau scolaire") }}*/
/*             {{ form_widget(form.niveauScolaire, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.niveauScolaire) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.nombreEnfants, "Nombre d'enfants") }}*/
/*             {{ form_widget(form.nombreEnfants, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.nombreEnfants) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.presentation, "Présentez vous en quelques lignes") }}*/
/*             {{ form_widget(form.presentation, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.presentation) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.profession, "Quelle est votre profession ?") }}*/
/*             {{ form_widget(form.profession, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.profession) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <input type="submit" value="Créer le compte" class="btn btn-default"/>*/
/*         </div>*/
/* */
/*         {{ form_rest(form) }}*/
/* */
/*       {{ form_end(form) }}*/
/* */
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
