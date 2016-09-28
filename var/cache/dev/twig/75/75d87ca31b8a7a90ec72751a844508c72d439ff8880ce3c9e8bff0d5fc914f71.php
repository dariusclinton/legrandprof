<?php

/* LGPUserBundle:SeanceDeCours:formulaire.html.twig */
class __TwigTemplate_c28040385eef957dab9da4ead264a43c05e6466727cb79495a2d88bb8f64fb5e extends Twig_Template
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
        $__internal_f19858c6d53a69d2e38f7dc6a584c315ecc5c3a0831ad0d8d37d091e0a153deb = $this->env->getExtension("native_profiler");
        $__internal_f19858c6d53a69d2e38f7dc6a584c315ecc5c3a0831ad0d8d37d091e0a153deb->enter($__internal_f19858c6d53a69d2e38f7dc6a584c315ecc5c3a0831ad0d8d37d091e0a153deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:formulaire.html.twig"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jourDeCours", array()), 'label', array("label_attr" => array(), "label" => "Jour de cours"));
        echo " : </div>
        <div class=\"col-md-4\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jourDeCours", array()), 'widget', array("attr" => array()));
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jourDeCours", array()), 'errors');
        echo "
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array(), "label" => "Date"));
        echo " : </div>
        <div class=\"col-md-4\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array()));
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", array()), 'label', array("label_attr" => array(), "label" => "Résumé"));
        echo " : </div>
        <div class=\"col-md-4\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", array()), 'widget', array("attr" => array()));
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", array()), 'errors');
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
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_f19858c6d53a69d2e38f7dc6a584c315ecc5c3a0831ad0d8d37d091e0a153deb->leave($__internal_f19858c6d53a69d2e38f7dc6a584c315ecc5c3a0831ad0d8d37d091e0a153deb_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:SeanceDeCours:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 41,  89 => 35,  81 => 30,  77 => 29,  72 => 27,  62 => 20,  58 => 19,  53 => 17,  43 => 10,  39 => 9,  34 => 7,  27 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}

{{ form_errors(form) }}

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">{{ form_label(form.jourDeCours, 'Jour de cours', {'label_attr': {}}) }} : </div>
        <div class=\"col-md-4\">
            {{ form_widget(form.jourDeCours, {'attr': {}}) }}
            {{ form_errors(form.jourDeCours) }}
        </div>
    </div>
</div>

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
        <div class=\"col-md-3\">{{ form_label(form.resume, 'Résumé', {'label_attr': {}}) }} : </div>
        <div class=\"col-md-4\">
            {{ form_widget(form.resume, {'attr': {}}) }}
            {{ form_errors(form.resume) }}
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
