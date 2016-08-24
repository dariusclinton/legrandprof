<?php

/* @LGPUser/Prof/register.html.twig */
class __TwigTemplate_896c4d585fd45336050e4514adb65f91a3342bf329fb8dd1be65224f985c37ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Prof/register.html.twig", 1);
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
        $__internal_5c4556254b41536a0a0305568185eea879e05377b1c32d0477332ed280870c6b = $this->env->getExtension("native_profiler");
        $__internal_5c4556254b41536a0a0305568185eea879e05377b1c32d0477332ed280870c6b->enter($__internal_5c4556254b41536a0a0305568185eea879e05377b1c32d0477332ed280870c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Prof/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c4556254b41536a0a0305568185eea879e05377b1c32d0477332ed280870c6b->leave($__internal_5c4556254b41536a0a0305568185eea879e05377b1c32d0477332ed280870c6b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49e4786ed1cdc93ab48dfeb49d48d8bc8b5362d5e2d7887a4ff2b1b69a67df1f = $this->env->getExtension("native_profiler");
        $__internal_49e4786ed1cdc93ab48dfeb49d48d8bc8b5362d5e2d7887a4ff2b1b69a67df1f->enter($__internal_49e4786ed1cdc93ab48dfeb49d48d8bc8b5362d5e2d7887a4ff2b1b69a67df1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Création de compte prof - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_49e4786ed1cdc93ab48dfeb49d48d8bc8b5362d5e2d7887a4ff2b1b69a67df1f->leave($__internal_49e4786ed1cdc93ab48dfeb49d48d8bc8b5362d5e2d7887a4ff2b1b69a67df1f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_932979af501aa477c4652514717d184a943d041ce1e0a9e8151cf15c471552cc = $this->env->getExtension("native_profiler");
        $__internal_932979af501aa477c4652514717d184a943d041ce1e0a9e8151cf15c471552cc->enter($__internal_932979af501aa477c4652514717d184a943d041ce1e0a9e8151cf15c471552cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <div class=\"row\">
    <div class=\"col-md-6 col-md-offset-3\">
      <h3 class=\"text-center\">Création de compte prof</h3>

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

        <div class=\"form-group\">
          ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "plainPassword", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "plainPassword", array()), 'errors');
        echo "
        </div>

        ";
        // line 75
        echo "        <!-- end Entite User -->

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
            <input type=\"submit\" value=\"Créer le compte\" class=\"btn btn-default\"/>
        </div>

        ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

      ";
        // line 131
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
  </div>
";
        
        $__internal_932979af501aa477c4652514717d184a943d041ce1e0a9e8151cf15c471552cc->leave($__internal_932979af501aa477c4652514717d184a943d041ce1e0a9e8151cf15c471552cc_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Prof/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 131,  333 => 129,  323 => 122,  319 => 121,  315 => 120,  308 => 116,  304 => 115,  300 => 114,  293 => 110,  289 => 109,  285 => 108,  278 => 104,  274 => 103,  270 => 102,  263 => 98,  259 => 97,  255 => 96,  248 => 92,  244 => 91,  240 => 90,  233 => 86,  229 => 85,  225 => 84,  218 => 80,  214 => 79,  210 => 78,  205 => 75,  199 => 67,  195 => 66,  188 => 62,  184 => 61,  180 => 60,  173 => 56,  169 => 55,  165 => 54,  158 => 50,  154 => 49,  150 => 48,  143 => 44,  139 => 43,  135 => 42,  128 => 38,  124 => 37,  120 => 36,  113 => 32,  109 => 31,  105 => 30,  98 => 26,  94 => 25,  90 => 24,  83 => 20,  79 => 19,  75 => 18,  68 => 14,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
