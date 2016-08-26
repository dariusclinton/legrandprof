<?php

/* LGPUserBundle:Registration:parent.form.html.twig */
class __TwigTemplate_26e59af82a10ea6e6612246129bbb00fddea40bcdd70f7da077fb0b257e42274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "LGPUserBundle:Registration:parent.form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dec775769fd7ded15116cf2dc5d956c5a4ce2f2d7d427e98cca862e6123fd607 = $this->env->getExtension("native_profiler");
        $__internal_dec775769fd7ded15116cf2dc5d956c5a4ce2f2d7d427e98cca862e6123fd607->enter($__internal_dec775769fd7ded15116cf2dc5d956c5a4ce2f2d7d427e98cca862e6123fd607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Registration:parent.form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dec775769fd7ded15116cf2dc5d956c5a4ce2f2d7d427e98cca862e6123fd607->leave($__internal_dec775769fd7ded15116cf2dc5d956c5a4ce2f2d7d427e98cca862e6123fd607_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd9f8f4280801a7784227822b5fee0acc55be5acf53396da9dbf5673d30ade04 = $this->env->getExtension("native_profiler");
        $__internal_dd9f8f4280801a7784227822b5fee0acc55be5acf53396da9dbf5673d30ade04->enter($__internal_dd9f8f4280801a7784227822b5fee0acc55be5acf53396da9dbf5673d30ade04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Création de compte parent - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dd9f8f4280801a7784227822b5fee0acc55be5acf53396da9dbf5673d30ade04->leave($__internal_dd9f8f4280801a7784227822b5fee0acc55be5acf53396da9dbf5673d30ade04_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8dc17603ecf70f6178831b8258a6464cf9ebb7cf864a21911f939d3c91ebd883 = $this->env->getExtension("native_profiler");
        $__internal_8dc17603ecf70f6178831b8258a6464cf9ebb7cf864a21911f939d3c91ebd883->enter($__internal_8dc17603ecf70f6178831b8258a6464cf9ebb7cf864a21911f939d3c91ebd883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "    ";
        // line 9
        echo "    
    <h1>Creation de compte parent</h1>

    <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("lgp_parent_registration");
        echo "\" method=\"POST\">
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
          ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array(), "label" => "Nom"));
        echo "
          ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenoms", array()), 'label', array("label_attr" => array(), "label" => "Prénoms"));
        echo "
          ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenoms", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenoms", array()), 'errors');
        echo "
        </div>

        ";
        // line 32
        echo "
        <div class=\"form-group\">
          ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'label', array("label_attr" => array(), "label" => "Sexe"));
        echo "
          ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTelephone", array()), 'label', array("label_attr" => array(), "label" => "Numéro de téléphone"));
        echo "
          ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTelephone", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTelephone", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'label', array("label_attr" => array(), "label" => "Pays de résidence"));
        echo "
          ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array(), "label" => "Adresse email"));
        echo "
          ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'errors');
        echo "
        </div>

        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <div>
            <input type=\"submit\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\"/>
        </div>
    </form>
";
        
        $__internal_8dc17603ecf70f6178831b8258a6464cf9ebb7cf864a21911f939d3c91ebd883->leave($__internal_8dc17603ecf70f6178831b8258a6464cf9ebb7cf864a21911f939d3c91ebd883_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Registration:parent.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 64,  177 => 62,  171 => 59,  167 => 58,  160 => 54,  156 => 53,  152 => 52,  145 => 48,  141 => 47,  137 => 46,  130 => 42,  126 => 41,  122 => 40,  115 => 36,  111 => 35,  107 => 34,  103 => 32,  97 => 24,  93 => 23,  89 => 22,  82 => 18,  78 => 17,  74 => 16,  68 => 13,  64 => 12,  59 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Création de compte parent - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% trans_default_domain 'FOSUserBundle' %}*/
/*     */
/*     <h1>Creation de compte parent</h1>*/
/* */
/*     <form action="{{ path('lgp_parent_registration') }}" method="POST">*/
/*         {{ form_errors(form) }}*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.nom, "Nom", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.nom, {'attr': {}}) }}*/
/*           {{ form_errors(form.nom) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.prenoms, "Prénoms", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.prenoms, {'attr': {}}) }}*/
/*           {{ form_errors(form.prenoms) }}*/
/*         </div>*/
/* */
/*         {#<div class="form-group">*/
/*           {{ form_label(form.dateNaissance, "Date de naissance", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.dateNaissance, {'attr': {}}) }}*/
/*           {{ form_errors(form.dateNaissance) }}*/
/*         </div>#}*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.sexe, "Sexe", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.sexe, {'attr': {}}) }}*/
/*           {{ form_errors(form.sexe) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.numTelephone, "Numéro de téléphone", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.numTelephone, {'attr': {}}) }}*/
/*           {{ form_errors(form.numTelephone) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.pays, "Pays de résidence", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.pays, {'attr': {}}) }}*/
/*           {{ form_errors(form.pays) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.email, "Adresse email", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.email, {'attr': {}}) }}*/
/*           {{ form_errors(form.email) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_widget(form.plainPassword, {'attr': {}}) }}*/
/*           {{ form_errors(form.plainPassword) }}*/
/*         </div>*/
/* */
/*         {{ form_rest(form) }}*/
/*         <div>*/
/*             <input type="submit" value="{{ 'registration.submit'|trans }}" class="btn btn-primary"/>*/
/*         </div>*/
/*     </form>*/
/* {% endblock fos_user_content %}*/
