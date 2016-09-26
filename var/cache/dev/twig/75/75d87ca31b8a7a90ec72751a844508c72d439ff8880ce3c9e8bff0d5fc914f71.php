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
        $__internal_ae8a30e215163cdf4a488d83d2fce2a21d0c42fdb87e9984755cbf3925fd3062 = $this->env->getExtension("native_profiler");
        $__internal_ae8a30e215163cdf4a488d83d2fce2a21d0c42fdb87e9984755cbf3925fd3062->enter($__internal_ae8a30e215163cdf4a488d83d2fce2a21d0c42fdb87e9984755cbf3925fd3062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:formulaire.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"form-group\">
  ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jourDeCours", array()), 'label', array("label_attr" => array(), "label" => "Jour de cours"));
        echo "
  ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jourDeCours", array()), 'widget', array("attr" => array()));
        echo "
  ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jourDeCours", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array(), "label" => "Date"));
        echo "
  ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array()));
        echo "
  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
  ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", array()), 'label', array("label_attr" => array(), "label" => "Résumé"));
        echo "
  ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", array()), 'widget', array("attr" => array()));
        echo "
  ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", array()), 'errors');
        echo "
</div>

";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<div class=\"form-group\">
  <input type='submit' value=\"Enregistrer\" class=\"btn btn-primary\">
</div>

";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_ae8a30e215163cdf4a488d83d2fce2a21d0c42fdb87e9984755cbf3925fd3062->leave($__internal_ae8a30e215163cdf4a488d83d2fce2a21d0c42fdb87e9984755cbf3925fd3062_prof);

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
        return array (  86 => 29,  77 => 23,  71 => 20,  67 => 19,  63 => 18,  56 => 14,  52 => 13,  48 => 12,  41 => 8,  37 => 7,  33 => 6,  27 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}

{{ form_errors(form) }}

<div class=\"form-group\">
  {{ form_label(form.jourDeCours, 'Jour de cours', {'label_attr': {}}) }}
  {{ form_widget(form.jourDeCours, {'attr': {}}) }}
  {{ form_errors(form.jourDeCours) }}
</div>

<div class=\"form-group\">
  {{ form_label(form.date, 'Date', {'label_attr': {}}) }}
  {{ form_widget(form.date, {'attr': {}}) }}
  {{ form_errors(form.date) }}
</div>

<div class=\"form-group\">
  {{ form_label(form.resume, 'Résumé', {'label_attr': {}}) }}
  {{ form_widget(form.resume, {'attr': {}}) }}
  {{ form_errors(form.resume) }}
</div>

{{ form_rest(form) }}

<div class=\"form-group\">
  <input type='submit' value=\"Enregistrer\" class=\"btn btn-primary\">
</div>

{{ form_end(form) }}";
    }
}
