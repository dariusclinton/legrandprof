<?php

/* LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig */
class __TwigTemplate_31e70f96641af0059c669a98c72bec243c453d903ddad9398ae668913374bfed extends Twig_Template
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
        $__internal_f85220c8647e81a997fa76e37fc2f0189905fd0c64f8f3ca30ff01b40de5026a = $this->env->getExtension("native_profiler");
        $__internal_f85220c8647e81a997fa76e37fc2f0189905fd0c64f8f3ca30ff01b40de5026a->enter($__internal_f85220c8647e81a997fa76e37fc2f0189905fd0c64f8f3ca30ff01b40de5026a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Intitulé de la catégorie"));
        echo "
  ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
  ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Description"));
        echo "
  ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
</div>

";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<input type=\"submit\" class=\"btn btn-primary\" value='Soumettre'/>

";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_f85220c8647e81a997fa76e37fc2f0189905fd0c64f8f3ca30ff01b40de5026a->leave($__internal_f85220c8647e81a997fa76e37fc2f0189905fd0c64f8f3ca30ff01b40de5026a_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  62 => 17,  56 => 14,  52 => 13,  48 => 12,  41 => 8,  37 => 7,  33 => 6,  27 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}

{{ form_errors(form) }}

<div class=\"form-group\">
  {{ form_label(form.intitule, \"Intitulé de la catégorie\", {'label_attr': {'class': 'control-label'}}) }}
  {{ form_widget(form.intitule, {'attr': {'class': 'form-control'}}) }}
  {{ form_errors(form.intitule) }}
</div>

<div class=\"form-group\">
  {{ form_label(form.description, \"Description\", {'label_attr': {'class': 'control-label'}}) }}
  {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
  {{ form_errors(form.description) }}
</div>

{{ form_rest(form) }}

<input type=\"submit\" class=\"btn btn-primary\" value='Soumettre'/>

{{ form_end(form) }}";
    }
}
