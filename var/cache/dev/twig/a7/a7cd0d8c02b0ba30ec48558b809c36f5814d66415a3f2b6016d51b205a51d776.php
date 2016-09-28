<?php

/* LGPUserBundle:Avis:formulaire.html.twig */
class __TwigTemplate_6f2a143df1b399d4bae36c50efa2d49f456a2371905e90671c591c341fea1f61 extends Twig_Template
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
        $__internal_9aed43d651ae8b9af53f45abf778e1b377ae58c526cecf31edd51a0d88afac0c = $this->env->getExtension("native_profiler");
        $__internal_9aed43d651ae8b9af53f45abf778e1b377ae58c526cecf31edd51a0d88afac0c->enter($__internal_9aed43d651ae8b9af53f45abf778e1b377ae58c526cecf31edd51a0d88afac0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:formulaire.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'label', array("label_attr" => array(), "label" => "Note /5"));
        echo "
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget', array("attr" => array()));
        echo "
";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'errors');
        echo "

";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'label', array("label_attr" => array(), "label" => "Commentaire"));
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array()));
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "

";
        // line 13
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prof", array(), "any", true, true)) {
            // line 14
            echo "    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prof", array()), 'label', array("label_attr" => array(), "label" => "Veuillez choisir le prof"));
            echo "
    ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prof", array()), 'widget', array("attr" => array()));
            echo "
    ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prof", array()), 'errors');
            echo "
";
        }
        // line 18
        echo "
";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<input type=\"submit\" class=\"btn btn-primary\" value=\"Valider\">

";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_9aed43d651ae8b9af53f45abf778e1b377ae58c526cecf31edd51a0d88afac0c->leave($__internal_9aed43d651ae8b9af53f45abf778e1b377ae58c526cecf31edd51a0d88afac0c_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  77 => 19,  74 => 18,  69 => 16,  65 => 15,  60 => 14,  58 => 13,  53 => 11,  49 => 10,  45 => 9,  40 => 7,  36 => 6,  32 => 5,  27 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}

{{ form_errors(form) }}

{{ form_label(form.note, 'Note /5', {'label_attr': {}}) }}
{{ form_widget(form.note, {'attr': {}}) }}
{{ form_errors(form.note) }}

{{ form_label(form.commentaire, 'Commentaire', {'label_attr': {}}) }}
{{ form_widget(form.commentaire, {'attr': {}}) }}
{{ form_errors(form.commentaire) }}

{% if form.prof is defined %}
    {{ form_label(form.prof, 'Veuillez choisir le prof', {'label_attr': {}}) }}
    {{ form_widget(form.prof, {'attr': {}}) }}
    {{ form_errors(form.prof) }}
{% endif %}

{{ form_rest(form) }}

<input type=\"submit\" class=\"btn btn-primary\" value=\"Valider\">

{{ form_end(form) }}";
    }
}
