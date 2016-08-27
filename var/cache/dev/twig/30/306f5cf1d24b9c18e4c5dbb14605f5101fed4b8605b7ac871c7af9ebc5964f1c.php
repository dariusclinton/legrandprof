<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_a30b404429c5a11dffb339220941c2822a0be1fd57df85834075cee589ec191e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0456f94c273f82ffa8492c98f0e6ac3c96321475c580b6896e7430b6a43ae1a0 = $this->env->getExtension("native_profiler");
        $__internal_0456f94c273f82ffa8492c98f0e6ac3c96321475c580b6896e7430b6a43ae1a0->enter($__internal_0456f94c273f82ffa8492c98f0e6ac3c96321475c580b6896e7430b6a43ae1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"form-group\">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'label', array("label_attr" => array(), "label" => "Photo de profil"));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget', array("attr" => array()));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array(), "label" => "Nom"));
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array()));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenoms", array()), 'label', array("label_attr" => array(), "label" => "Prénoms"));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenoms", array()), 'widget', array("attr" => array()));
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenoms", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'label', array("label_attr" => array(), "label" => "Date de naissance"));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'widget', array("attr" => array()));
        echo "
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'label', array("label_attr" => array(), "label" => "Sexe"));
        echo "
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget', array("attr" => array()));
        echo "
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTelephone", array()), 'label', array("label_attr" => array(), "label" => "Numéro de téléphone"));
        echo "
    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTelephone", array()), 'widget', array("attr" => array()));
        echo "
    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTelephone", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'label', array("label_attr" => array(), "label" => "Pays de résidence"));
        echo "
    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array()));
        echo "
    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array(), "label" => "Adresse email"));
        echo "
    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array()));
        echo "
    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
</div>

";
        // line 54
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presentation", array(), "any", true, true)) {
            echo "   
    <div class=\"form-group\">
        ";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'label', array("label_attr" => array(), "label" => "Ville"));
            echo "
        ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array()));
            echo "
        ";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
            echo "
    </div>
    
    <div class=\"form-group\">
        ";
            // line 62
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quartier", array()), 'label', array("label_attr" => array(), "label" => "Quartier"));
            echo "
        ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quartier", array()), 'widget', array("attr" => array()));
            echo "
        ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quartier", array()), 'errors');
            echo "
    </div>
    
    <div class=\"form-group\">
        ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "boitePostale", array()), 'label', array("label_attr" => array(), "label" => "Boite postale"));
            echo "
        ";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "boitePostale", array()), 'widget', array("attr" => array()));
            echo "
        ";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "boitePostale", array()), 'errors');
            echo "
    </div>
    
    <div class=\"form-group\">
        ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "situationMatrimoniale", array()), 'label', array("label_attr" => array(), "label" => "Situation matrimoniale"));
            echo "
        ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "situationMatrimoniale", array()), 'widget', array("attr" => array()));
            echo "
        ";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "situationMatrimoniale", array()), 'errors');
            echo "
    </div>
    
    <div class=\"form-group\">
        ";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveauScolaire", array()), 'label', array("label_attr" => array(), "label" => "Niveau scolaire"));
            echo "
        ";
            // line 81
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveauScolaire", array()), 'widget', array("attr" => array()));
            echo "
        ";
            // line 82
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveauScolaire", array()), 'errors');
            echo "
    </div>
    
    <div class=\"form-group\">
        ";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreEnfants", array()), 'label', array("label_attr" => array(), "label" => "Nombre d'enfants"));
            echo "
        ";
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreEnfants", array()), 'widget', array("attr" => array()));
            echo "
        ";
            // line 88
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreEnfants", array()), 'errors');
            echo "
    </div>
    
    <div class=\"form-group\">
        ";
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation", array()), 'label', array("label_attr" => array(), "label" => "Présentation"));
            echo "
        ";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation", array()), 'widget', array("attr" => array()));
            echo "
        ";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation", array()), 'errors');
            echo "
    </div>
    
    <div class=\"form-group\">
        ";
            // line 98
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'label', array("label_attr" => array(), "label" => "Profession"));
            echo "
        ";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'widget', array("attr" => array()));
            echo "
        ";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'errors');
            echo "
    </div>
        
    <div class=\"form-group\">
        ";
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplomes", array()), 'label', array("label_attr" => array(), "label" => "Diplômes"));
            echo "
        ";
            // line 105
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplomes", array()), 'widget', array("attr" => array()));
            echo "
        ";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplomes", array()), 'errors');
            echo "
    </div>
    
    ";
            // line 109
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "experiencePros", array()), 'row');
            echo "
    <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_experience\">Ajouter une expérience</a>
    
";
        }
        // line 113
        echo "
";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<div>
    <input type=\"submit\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\"/>
</div>
";
        // line 119
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_0456f94c273f82ffa8492c98f0e6ac3c96321475c580b6896e7430b6a43ae1a0->leave($__internal_0456f94c273f82ffa8492c98f0e6ac3c96321475c580b6896e7430b6a43ae1a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 119,  309 => 117,  303 => 114,  300 => 113,  293 => 109,  287 => 106,  283 => 105,  279 => 104,  272 => 100,  268 => 99,  264 => 98,  257 => 94,  253 => 93,  249 => 92,  242 => 88,  238 => 87,  234 => 86,  227 => 82,  223 => 81,  219 => 80,  212 => 76,  208 => 75,  204 => 74,  197 => 70,  193 => 69,  189 => 68,  182 => 64,  178 => 63,  174 => 62,  167 => 58,  163 => 57,  159 => 56,  154 => 54,  148 => 51,  144 => 50,  140 => 49,  133 => 45,  129 => 44,  125 => 43,  118 => 39,  114 => 38,  110 => 37,  103 => 33,  99 => 32,  95 => 31,  88 => 27,  84 => 26,  80 => 25,  73 => 21,  69 => 20,  65 => 19,  58 => 15,  54 => 14,  50 => 13,  43 => 9,  39 => 8,  35 => 7,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/* {{ form_errors(form) }}*/
/* */
/* <div class="form-group">*/
/*     {{ form_label(form.image, "Photo de profil", {'label_attr': {}}) }}*/
/*     {{ form_widget(form.image, {'attr': {}}) }}*/
/*     {{ form_errors(form.image) }}*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*     {{ form_label(form.nom, "Nom", {'label_attr': {}}) }}*/
/*     {{ form_widget(form.nom, {'attr': {}}) }}*/
/*     {{ form_errors(form.nom) }}*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*     {{ form_label(form.prenoms, "Prénoms", {'label_attr': {}}) }}*/
/*     {{ form_widget(form.prenoms, {'attr': {}}) }}*/
/*     {{ form_errors(form.prenoms) }}*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*     {{ form_label(form.dateNaissance, "Date de naissance", {'label_attr': {}}) }}*/
/*     {{ form_widget(form.dateNaissance, {'attr': {}}) }}*/
/*     {{ form_errors(form.dateNaissance) }}*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*     {{ form_label(form.sexe, "Sexe", {'label_attr': {}}) }}*/
/*     {{ form_widget(form.sexe, {'attr': {}}) }}*/
/*     {{ form_errors(form.sexe) }}*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*     {{ form_label(form.numTelephone, "Numéro de téléphone", {'label_attr': {}}) }}*/
/*     {{ form_widget(form.numTelephone, {'attr': {}}) }}*/
/*     {{ form_errors(form.numTelephone) }}*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*     {{ form_label(form.pays, "Pays de résidence", {'label_attr': {}}) }}*/
/*     {{ form_widget(form.pays, {'attr': {}}) }}*/
/*     {{ form_errors(form.pays) }}*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*     {{ form_label(form.email, "Adresse email", {'label_attr': {}}) }}*/
/*     {{ form_widget(form.email, {'attr': {}}) }}*/
/*     {{ form_errors(form.email) }}*/
/* </div>*/
/* */
/* {% if form.presentation is defined %}   */
/*     <div class="form-group">*/
/*         {{ form_label(form.ville, "Ville", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.ville, {'attr': {}}) }}*/
/*         {{ form_errors(form.ville) }}*/
/*     </div>*/
/*     */
/*     <div class="form-group">*/
/*         {{ form_label(form.quartier, "Quartier", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.quartier, {'attr': {}}) }}*/
/*         {{ form_errors(form.quartier) }}*/
/*     </div>*/
/*     */
/*     <div class="form-group">*/
/*         {{ form_label(form.boitePostale, "Boite postale", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.boitePostale, {'attr': {}}) }}*/
/*         {{ form_errors(form.boitePostale) }}*/
/*     </div>*/
/*     */
/*     <div class="form-group">*/
/*         {{ form_label(form.situationMatrimoniale, "Situation matrimoniale", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.situationMatrimoniale, {'attr': {}}) }}*/
/*         {{ form_errors(form.situationMatrimoniale) }}*/
/*     </div>*/
/*     */
/*     <div class="form-group">*/
/*         {{ form_label(form.niveauScolaire, "Niveau scolaire", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.niveauScolaire, {'attr': {}}) }}*/
/*         {{ form_errors(form.niveauScolaire) }}*/
/*     </div>*/
/*     */
/*     <div class="form-group">*/
/*         {{ form_label(form.nombreEnfants, "Nombre d'enfants", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.nombreEnfants, {'attr': {}}) }}*/
/*         {{ form_errors(form.nombreEnfants) }}*/
/*     </div>*/
/*     */
/*     <div class="form-group">*/
/*         {{ form_label(form.presentation, "Présentation", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.presentation, {'attr': {}}) }}*/
/*         {{ form_errors(form.presentation) }}*/
/*     </div>*/
/*     */
/*     <div class="form-group">*/
/*         {{ form_label(form.profession, "Profession", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.profession, {'attr': {}}) }}*/
/*         {{ form_errors(form.profession) }}*/
/*     </div>*/
/*         */
/*     <div class="form-group">*/
/*         {{ form_label(form.diplomes, "Diplômes", {'label_attr': {}}) }}*/
/*         {{ form_widget(form.diplomes, {'attr': {}}) }}*/
/*         {{ form_errors(form.diplomes) }}*/
/*     </div>*/
/*     */
/*     {{ form_row(form.experiencePros) }}*/
/*     <a href="#" class="btn btn-primary btn-sm" id="add_experience">Ajouter une expérience</a>*/
/*     */
/* {% endif %}*/
/* */
/* {{ form_rest(form) }}*/
/* */
/* <div>*/
/*     <input type="submit" value="{{ 'profile.edit.submit'|trans }}" class="btn btn-primary"/>*/
/* </div>*/
/* {{ form_end(form) }}*/
/* */
/* */
/* */
