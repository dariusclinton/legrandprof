<?php

/* LGPUserBundle:Evaluation:formulaire.html.twig */
class __TwigTemplate_97f75efb98f70f9c77397b7c27ca9ebdf4223fa8806acdb7a5aa948e5e9d7bb6 extends Twig_Template
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
        $__internal_6aaa004d927449f5c407f40d4e7048b7e111adbbc71ec422d47da2fdd5e987cb = $this->env->getExtension("native_profiler");
        $__internal_6aaa004d927449f5c407f40d4e7048b7e111adbbc71ec422d47da2fdd5e987cb->enter($__internal_6aaa004d927449f5c407f40d4e7048b7e111adbbc71ec422d47da2fdd5e987cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Evaluation:formulaire.html.twig"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array(), "label" => "Date"));
        echo " : </div>
        <div class=\"col-md-4\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array()));
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'label', array("label_attr" => array(), "label" => "Lieu de l'évaluation"));
        echo " : </div>
        <div class=\"col-md-4\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'widget', array("attr" => array()));
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'errors');
        echo "
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cours", array()), 'label', array("label_attr" => array(), "label" => "Cours"));
        echo " : </div>
        <div class=\"col-md-4\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cours", array()), 'widget', array("attr" => array()));
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cours", array()), 'errors');
        echo "
        </div>
    </div>
</div>

";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<div class=\"form-group\">
  <input type='submit' value=\"Enregistrer\" class=\"btn btn-primary\">
</div>
";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_6aaa004d927449f5c407f40d4e7048b7e111adbbc71ec422d47da2fdd5e987cb->leave($__internal_6aaa004d927449f5c407f40d4e7048b7e111adbbc71ec422d47da2fdd5e987cb_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Evaluation:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 40,  89 => 35,  81 => 30,  77 => 29,  72 => 27,  62 => 20,  58 => 19,  53 => 17,  43 => 10,  39 => 9,  34 => 7,  27 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}

{{ form_errors(form) }}

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">{{ form_label(form.date, 'Date', {'label_attr': {}}) }} : </div>
        <div class=\"col-md-4\">
            {{ form_widget(form.date, {'attr': {}}) }}
            {{ form_errors(form.date) }}
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">{{ form_label(form.lieu, 'Lieu de l\\'évaluation', {'label_attr': {}}) }} : </div>
        <div class=\"col-md-4\">
            {{ form_widget(form.lieu, {'attr': {}}) }}
            {{ form_errors(form.lieu) }}
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">{{ form_label(form.cours, 'Cours', {'label_attr': {}}) }} : </div>
        <div class=\"col-md-4\">
            {{ form_widget(form.cours, {'attr': {}}) }}
            {{ form_errors(form.cours) }}
        </div>
    </div>
</div>

{{ form_rest(form) }}

<div class=\"form-group\">
  <input type='submit' value=\"Enregistrer\" class=\"btn btn-primary\">
</div>
{{ form_end(form) }}";
    }
}
