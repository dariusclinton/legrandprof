<?php

/* LGPUserBundle:Registration:parent.form.html.twig */
class __TwigTemplate_17c407842ce18c3b3ea2ac7d5c4121e75f4e478e9208d81f297f00dbb29e4171 extends Twig_Template
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
        $__internal_bb38302ebaa6aab4870b140e557ec83f04f467eb1673ddb6c2bd5def305b0c17 = $this->env->getExtension("native_profiler");
        $__internal_bb38302ebaa6aab4870b140e557ec83f04f467eb1673ddb6c2bd5def305b0c17->enter($__internal_bb38302ebaa6aab4870b140e557ec83f04f467eb1673ddb6c2bd5def305b0c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Registration:parent.form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb38302ebaa6aab4870b140e557ec83f04f467eb1673ddb6c2bd5def305b0c17->leave($__internal_bb38302ebaa6aab4870b140e557ec83f04f467eb1673ddb6c2bd5def305b0c17_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2ef81addeaa96cf0740fa469b81b97df35d50d207d384ea0b02747082f603b4 = $this->env->getExtension("native_profiler");
        $__internal_f2ef81addeaa96cf0740fa469b81b97df35d50d207d384ea0b02747082f603b4->enter($__internal_f2ef81addeaa96cf0740fa469b81b97df35d50d207d384ea0b02747082f603b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Création de compte parent - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f2ef81addeaa96cf0740fa469b81b97df35d50d207d384ea0b02747082f603b4->leave($__internal_f2ef81addeaa96cf0740fa469b81b97df35d50d207d384ea0b02747082f603b4_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43a98d19b44a0c2612af154306b83a402b617fe8b72e3735a15d0be538152d77 = $this->env->getExtension("native_profiler");
        $__internal_43a98d19b44a0c2612af154306b83a402b617fe8b72e3735a15d0be538152d77->enter($__internal_43a98d19b44a0c2612af154306b83a402b617fe8b72e3735a15d0be538152d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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

        ";
        // line 44
        echo "
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
        
        $__internal_43a98d19b44a0c2612af154306b83a402b617fe8b72e3735a15d0be538152d77->leave($__internal_43a98d19b44a0c2612af154306b83a402b617fe8b72e3735a15d0be538152d77_prof);

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
        return array (  170 => 64,  165 => 62,  159 => 59,  155 => 58,  148 => 54,  144 => 53,  140 => 52,  133 => 48,  129 => 47,  125 => 46,  121 => 44,  115 => 36,  111 => 35,  107 => 34,  103 => 32,  97 => 24,  93 => 23,  89 => 22,  82 => 18,  78 => 17,  74 => 16,  68 => 13,  64 => 12,  59 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block title %}
    Création de compte parent - {{ parent() }}
{% endblock %}

{% block fos_user_content %}
    {% trans_default_domain 'FOSUserBundle' %}
    
    <h1>Creation de compte parent</h1>

    <form action=\"{{ path('lgp_parent_registration') }}\" method=\"POST\">
        {{ form_errors(form) }}

        <div class=\"form-group\">
          {{ form_label(form.nom, \"Nom\", {'label_attr': {}}) }}
          {{ form_widget(form.nom, {'attr': {}}) }}
          {{ form_errors(form.nom) }}
        </div>

        <div class=\"form-group\">
          {{ form_label(form.prenoms, \"Prénoms\", {'label_attr': {}}) }}
          {{ form_widget(form.prenoms, {'attr': {}}) }}
          {{ form_errors(form.prenoms) }}
        </div>

        {#<div class=\"form-group\">
          {{ form_label(form.dateNaissance, \"Date de naissance\", {'label_attr': {}}) }}
          {{ form_widget(form.dateNaissance, {'attr': {}}) }}
          {{ form_errors(form.dateNaissance) }}
        </div>#}

        <div class=\"form-group\">
          {{ form_label(form.sexe, \"Sexe\", {'label_attr': {}}) }}
          {{ form_widget(form.sexe, {'attr': {}}) }}
          {{ form_errors(form.sexe) }}
        </div>

        {#<div class=\"form-group\">
          {{ form_label(form.telephone, \"Numéro de téléphone\", {'label_attr': {}}) }}
          {{ form_widget(form.telephone, {'attr': {}}) }}
          {{ form_errors(form.telephone) }}
        </div>#}

        <div class=\"form-group\">
          {{ form_label(form.pays, \"Pays de résidence\", {'label_attr': {}}) }}
          {{ form_widget(form.pays, {'attr': {}}) }}
          {{ form_errors(form.pays) }}
        </div>

        <div class=\"form-group\">
          {{ form_label(form.email, \"Adresse email\", {'label_attr': {}}) }}
          {{ form_widget(form.email, {'attr': {}}) }}
          {{ form_errors(form.email) }}
        </div>

        <div class=\"form-group\">
          {{ form_widget(form.plainPassword, {'attr': {}}) }}
          {{ form_errors(form.plainPassword) }}
        </div>

        {{ form_rest(form) }}
        <div>
            <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" class=\"btn btn-primary\"/>
        </div>
    </form>
{% endblock fos_user_content %}";
    }
}
