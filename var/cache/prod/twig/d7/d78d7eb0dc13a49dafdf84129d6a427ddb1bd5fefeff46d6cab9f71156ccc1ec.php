<?php

/* LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig */
class __TwigTemplate_77f163e254a6d0b6263c41ebe453fd791c0b34d1243013e09d8d1e10e0b7dafc extends Twig_Template
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
        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

<div class=\"form-group\">
    <div class='row'>
        <div class='col-md-3'>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "intitule", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Intitulé de la catégorie"));
        echo "</div>
        <div class='col-md-4'>
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "intitule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "intitule", array()), 'errors');
        echo "
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class='row'>
        <div class='col-md-3'>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Description"));
        echo "</div>
        <div class='col-md-4'>
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'errors');
        echo "
        </div>
    </div>
</div>

";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

<input type=\"submit\" class=\"btn btn-primary\" value='Soumettre'/>

";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
        return array (  74 => 29,  67 => 25,  59 => 20,  55 => 19,  50 => 17,  40 => 10,  36 => 9,  31 => 7,  24 => 3,  19 => 1,);
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
