<?php

/* @LGPUser/Registration/parent.form.html.twig */
class __TwigTemplate_5da5c6810cd1f36cb5df546f79d12722bd9594a37c80761d221a12562144bdf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Registration/parent.form.html.twig", 1);
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
        $__internal_04546f9ce66150e097b2df9e93a6906745a081a58e74a249704b407dc9ba8723 = $this->env->getExtension("native_profiler");
        $__internal_04546f9ce66150e097b2df9e93a6906745a081a58e74a249704b407dc9ba8723->enter($__internal_04546f9ce66150e097b2df9e93a6906745a081a58e74a249704b407dc9ba8723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/parent.form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04546f9ce66150e097b2df9e93a6906745a081a58e74a249704b407dc9ba8723->leave($__internal_04546f9ce66150e097b2df9e93a6906745a081a58e74a249704b407dc9ba8723_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_70ff73c44bbae88d97af362d02e047c50e127f0b6ac5aa432af74b747d92c269 = $this->env->getExtension("native_profiler");
        $__internal_70ff73c44bbae88d97af362d02e047c50e127f0b6ac5aa432af74b747d92c269->enter($__internal_70ff73c44bbae88d97af362d02e047c50e127f0b6ac5aa432af74b747d92c269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Création de compte parent - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_70ff73c44bbae88d97af362d02e047c50e127f0b6ac5aa432af74b747d92c269->leave($__internal_70ff73c44bbae88d97af362d02e047c50e127f0b6ac5aa432af74b747d92c269_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_198b756852d61ba14fac8a17af045439ae0589a123892cfb55396abd6805ee89 = $this->env->getExtension("native_profiler");
        $__internal_198b756852d61ba14fac8a17af045439ae0589a123892cfb55396abd6805ee89->enter($__internal_198b756852d61ba14fac8a17af045439ae0589a123892cfb55396abd6805ee89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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

        <div class=\"form-group\">
          ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'label', array("label_attr" => array(), "label" => "Date de naissance"));
        echo "
          ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'errors');
        echo "
        </div>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array(), "label" => "Pseudo"));
        echo "
          ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array(), "label" => "Adresse email"));
        echo "
          ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'errors');
        echo "
        </div>

        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <div>
            <input type=\"submit\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\"/>
        </div>
    </form>
";
        
        $__internal_198b756852d61ba14fac8a17af045439ae0589a123892cfb55396abd6805ee89->leave($__internal_198b756852d61ba14fac8a17af045439ae0589a123892cfb55396abd6805ee89_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/parent.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 70,  204 => 68,  198 => 65,  194 => 64,  187 => 60,  183 => 59,  179 => 58,  172 => 54,  168 => 53,  164 => 52,  157 => 48,  153 => 47,  149 => 46,  142 => 42,  138 => 41,  134 => 40,  127 => 36,  123 => 35,  119 => 34,  112 => 30,  108 => 29,  104 => 28,  97 => 24,  93 => 23,  89 => 22,  82 => 18,  78 => 17,  74 => 16,  68 => 13,  64 => 12,  59 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/*         <div class="form-group">*/
/*           {{ form_label(form.dateNaissance, "Date de naissance", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.dateNaissance, {'attr': {}}) }}*/
/*           {{ form_errors(form.dateNaissance) }}*/
/*         </div>*/
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
/*           {{ form_label(form.username, "Pseudo", {'label_attr': {}}) }}*/
/*           {{ form_widget(form.username, {'attr': {}}) }}*/
/*           {{ form_errors(form.username) }}*/
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
