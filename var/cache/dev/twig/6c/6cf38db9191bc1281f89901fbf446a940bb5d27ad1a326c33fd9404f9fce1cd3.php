<?php

/* LGPUserBundle:Indisponibilite:formulaire.html.twig */
class __TwigTemplate_d79c6280bb45266e86c940ec2ed45911365b479a97355c1c86f8e80ae762bef6 extends Twig_Template
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
        $__internal_07ea17d22c632f5e30664046a5ec60a199ed5b4ae10832b1346153f86d41b7e4 = $this->env->getExtension("native_profiler");
        $__internal_07ea17d22c632f5e30664046a5ec60a199ed5b4ae10832b1346153f86d41b7e4->enter($__internal_07ea17d22c632f5e30664046a5ec60a199ed5b4ae10832b1346153f86d41b7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:formulaire.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'label', array("label_attr" => array(), "label" => "Date de début"));
        echo " : </div>
        <div class=\"col-md-4\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'widget', array("attr" => array()));
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'errors');
        echo "
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'label', array("label_attr" => array(), "label" => "Date de fin"));
        echo " : </div>
        <div class=\"col-md-4\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'widget', array("attr" => array()));
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'errors');
        echo "
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motif", array()), 'label', array("label_attr" => array(), "label" => "Motif"));
        echo " : </div>
        <div class=\"col-md-4\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motif", array()), 'widget', array("attr" => array()));
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motif", array()), 'errors');
        echo "
        </div>
    </div>
</div>

";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\">

";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_07ea17d22c632f5e30664046a5ec60a199ed5b4ae10832b1346153f86d41b7e4->leave($__internal_07ea17d22c632f5e30664046a5ec60a199ed5b4ae10832b1346153f86d41b7e4_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 41,  94 => 37,  89 => 35,  81 => 30,  77 => 29,  72 => 27,  62 => 20,  58 => 19,  53 => 17,  43 => 10,  39 => 9,  34 => 7,  27 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}

{{ form_errors(form) }}

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">{{ form_label(form.dateDebut, 'Date de début', {'label_attr': {}}) }} : </div>
        <div class=\"col-md-4\">
            {{ form_widget(form.dateDebut, {'attr': {}}) }}
            {{ form_errors(form.dateDebut) }}
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">{{ form_label(form.dateFin, 'Date de fin', {'label_attr': {}}) }} : </div>
        <div class=\"col-md-4\">
            {{ form_widget(form.dateFin, {'attr': {}}) }}
            {{ form_errors(form.dateFin) }}
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">{{ form_label(form.motif, 'Motif', {'label_attr': {}}) }} : </div>
        <div class=\"col-md-4\">
            {{ form_widget(form.motif, {'attr': {}}) }}
            {{ form_errors(form.motif) }}
        </div>
    </div>
</div>

{{ form_widget(form) }}

{{ form_rest(form) }}

<input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\">

{{ form_end(form) }}";
    }
}
