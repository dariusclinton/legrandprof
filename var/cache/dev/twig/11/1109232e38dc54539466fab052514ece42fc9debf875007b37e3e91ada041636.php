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
        $__internal_195e4182da6042b19dc7087f711ec3900f087952e4db096549d08728a12c740c = $this->env->getExtension("native_profiler");
        $__internal_195e4182da6042b19dc7087f711ec3900f087952e4db096549d08728a12c740c->enter($__internal_195e4182da6042b19dc7087f711ec3900f087952e4db096549d08728a12c740c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"form-group\">
    <div class='row'>
        <div class='col-md-3'>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Intitulé de la catégorie"));
        echo "</div>
        <div class='col-md-4'>
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'errors');
        echo "
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class='row'>
        <div class='col-md-3'>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Description"));
        echo "</div>
        <div class='col-md-4'>
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
        </div>
    </div>
</div>

";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<input type=\"submit\" class=\"btn btn-primary\" value='Soumettre'/>

";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_195e4182da6042b19dc7087f711ec3900f087952e4db096549d08728a12c740c->leave($__internal_195e4182da6042b19dc7087f711ec3900f087952e4db096549d08728a12c740c_prof);

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
        return array (  77 => 29,  70 => 25,  62 => 20,  58 => 19,  53 => 17,  43 => 10,  39 => 9,  34 => 7,  27 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}

{{ form_errors(form) }}

<div class=\"form-group\">
    <div class='row'>
        <div class='col-md-3'>{{ form_label(form.intitule, \"Intitulé de la catégorie\", {'label_attr': {'class': 'control-label'}}) }}</div>
        <div class='col-md-4'>
            {{ form_widget(form.intitule, {'attr': {'class': 'form-control'}}) }}
            {{ form_errors(form.intitule) }}
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class='row'>
        <div class='col-md-3'>{{ form_label(form.description, \"Description\", {'label_attr': {'class': 'control-label'}}) }}</div>
        <div class='col-md-4'>
            {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
            {{ form_errors(form.description) }}
        </div>
    </div>
</div>

{{ form_rest(form) }}

<input type=\"submit\" class=\"btn btn-primary\" value='Soumettre'/>

{{ form_end(form) }}";
    }
}
