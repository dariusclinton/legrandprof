<?php

/* LGPUserBundle:Parent:register.html.twig */
class __TwigTemplate_cd02057f098df182480e314589f42a6f259e8e92aafb25ce22a84f3c8d56884c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Parent:register.html.twig", 1);
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
        $__internal_eea8ee7335ebc19af39947dd81c181c0953bf7e53f5633b0105bb9049418d9b7 = $this->env->getExtension("native_profiler");
        $__internal_eea8ee7335ebc19af39947dd81c181c0953bf7e53f5633b0105bb9049418d9b7->enter($__internal_eea8ee7335ebc19af39947dd81c181c0953bf7e53f5633b0105bb9049418d9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Parent:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eea8ee7335ebc19af39947dd81c181c0953bf7e53f5633b0105bb9049418d9b7->leave($__internal_eea8ee7335ebc19af39947dd81c181c0953bf7e53f5633b0105bb9049418d9b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_47cfca6b1afb4e6cc88895e7ea3e789456f843ea5c963ee503af7171f4025ef0 = $this->env->getExtension("native_profiler");
        $__internal_47cfca6b1afb4e6cc88895e7ea3e789456f843ea5c963ee503af7171f4025ef0->enter($__internal_47cfca6b1afb4e6cc88895e7ea3e789456f843ea5c963ee503af7171f4025ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Création de compte parent - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_47cfca6b1afb4e6cc88895e7ea3e789456f843ea5c963ee503af7171f4025ef0->leave($__internal_47cfca6b1afb4e6cc88895e7ea3e789456f843ea5c963ee503af7171f4025ef0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0582ffda14662d8d1166f783b60b8b2c2b7a58c62f42d403fb257b6a02cae6ef = $this->env->getExtension("native_profiler");
        $__internal_0582ffda14662d8d1166f783b60b8b2c2b7a58c62f42d403fb257b6a02cae6ef->enter($__internal_0582ffda14662d8d1166f783b60b8b2c2b7a58c62f42d403fb257b6a02cae6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <div class=\"row\">
    <div class=\"col-md-6 col-md-offset-3\">
      <h3 class=\"text-center\">Création de compte parent</h3>
      ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <!-- Entite User -->
        <div class=\"form-group\">
          ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "nom", array()), 'label', array("label_attr" => array(), "label" => "Nom"));
        echo "
          ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "nom", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "nom", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "prenoms", array()), 'label', array("label_attr" => array(), "label" => "Prénoms"));
        echo "
          ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "prenoms", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "prenoms", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "dateNaissance", array()), 'label', array("label_attr" => array(), "label" => "Date de naissance"));
        echo "
          ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "dateNaissance", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "dateNaissance", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "sexe", array()), 'label', array("label_attr" => array(), "label" => "Sexe"));
        echo "
          ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "sexe", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "sexe", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "numTelephone", array()), 'label', array("label_attr" => array(), "label" => "Numéro de téléphone"));
        echo "
          ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "numTelephone", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "numTelephone", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "pays", array()), 'label', array("label_attr" => array(), "label" => "Pays de résidence"));
        echo "
          ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "pays", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "pays", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "username", array()), 'label', array("label_attr" => array(), "label" => "Pseudo"));
        echo "
          ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "username", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "username", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "email", array()), 'label', array("label_attr" => array(), "label" => "Adresse email"));
        echo "
          ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "email", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "email", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "plainPassword", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "plainPassword", array()), 'errors');
        echo "
        </div>

        ";
        // line 74
        echo "        <!-- end Entite User -->

        <div class=\"form-group\">
            <input type=\"submit\" value=\"Créer le compte\" class=\"btn btn-default\"/>
        </div>

        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

      ";
        // line 82
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
  </div>

";
        
        $__internal_0582ffda14662d8d1166f783b60b8b2c2b7a58c62f42d403fb257b6a02cae6ef->leave($__internal_0582ffda14662d8d1166f783b60b8b2c2b7a58c62f42d403fb257b6a02cae6ef_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Parent:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 82,  212 => 80,  204 => 74,  198 => 66,  194 => 65,  187 => 61,  183 => 60,  179 => 59,  172 => 55,  168 => 54,  164 => 53,  157 => 49,  153 => 48,  149 => 47,  142 => 43,  138 => 42,  134 => 41,  127 => 37,  123 => 36,  119 => 35,  112 => 31,  108 => 30,  104 => 29,  97 => 25,  93 => 24,  89 => 23,  82 => 19,  78 => 18,  74 => 17,  67 => 13,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*   Création de compte parent - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div class="row">*/
/*     <div class="col-md-6 col-md-offset-3">*/
/*       <h3 class="text-center">Création de compte parent</h3>*/
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
/*             <input type="submit" value="Créer le compte" class="btn btn-default"/>*/
/*         </div>*/
/* */
/*         {{ form_rest(form) }}*/
/* */
/*       {{ form_end(form) }}*/
/*     </div>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
