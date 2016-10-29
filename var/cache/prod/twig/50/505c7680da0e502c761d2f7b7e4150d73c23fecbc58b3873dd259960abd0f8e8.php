<?php

/* LGPUserBundle:Indisponibilite:formulaire.html.twig */
class __TwigTemplate_72f4d43b0b85d60a54cb4cd31dbb446ec6000c3e43ec8c8412760b15501c6ddf extends Twig_Template
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
    <div class=\"row\">
        <div class=\"col-md-3\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateDebut", array()), 'label', array("label_attr" => array(), "label" => "Date de début"));
        echo " : </div>
        <div class=\"col-md-4\">
            <div class=\"row\">
                <div class=\"col-md-4 no-padding\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateDebut", array()), "day", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4 no-padding\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateDebut", array()), "month", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4 no-padding\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateDebut", array()), "year", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateDebut", array()), 'errors');
        echo "
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateFin", array()), 'label', array("label_attr" => array(), "label" => "Date de fin"));
        echo " : </div>
        <div class=\"col-md-4\">
            <div class=\"row\">
                <div class=\"col-md-4 no-padding\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateFin", array()), "day", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "jour")));
        echo "</div>
                <div class=\"col-md-4 no-padding\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateFin", array()), "month", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4 no-padding\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateFin", array()), "year", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateFin", array()), 'errors');
        echo "
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "motif", array()), 'label', array("label_attr" => array(), "label" => "Motif"));
        echo " : </div>
        <div class=\"col-md-4\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "motif", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "motif", array()), 'errors');
        echo "
        </div>
    </div>
</div>

";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

<input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\">

";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
        return array (  118 => 49,  111 => 45,  106 => 43,  98 => 38,  94 => 37,  89 => 35,  79 => 28,  74 => 26,  70 => 25,  66 => 24,  60 => 21,  50 => 14,  45 => 12,  41 => 11,  37 => 10,  31 => 7,  24 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}

{{ form_errors(form) }}

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">{{ form_label(form.dateDebut, 'Date de début', {'label_attr': {}}) }} : </div>
        <div class=\"col-md-4\">
            <div class=\"row\">
                <div class=\"col-md-4 no-padding\">{{ form_widget(form.dateDebut.day, {'attr': {'class':'form-control'}}) }}</div>
                <div class=\"col-md-4 no-padding\">{{ form_widget(form.dateDebut.month, {'attr': {'class':'form-control'}}) }}</div>
                <div class=\"col-md-4 no-padding\">{{ form_widget(form.dateDebut.year, {'attr': {'class':'form-control'}}) }}</div>
            </div>
            {{ form_errors(form.dateDebut) }}
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">{{ form_label(form.dateFin, 'Date de fin', {'label_attr': {}}) }} : </div>
        <div class=\"col-md-4\">
            <div class=\"row\">
                <div class=\"col-md-4 no-padding\">{{ form_widget(form.dateFin.day, {'attr': {'class':'form-control','placeholder':'jour'}}) }}</div>
                <div class=\"col-md-4 no-padding\">{{ form_widget(form.dateFin.month, {'attr': {'class':'form-control'}}) }}</div>
                <div class=\"col-md-4 no-padding\">{{ form_widget(form.dateFin.year, {'attr': {'class':'form-control'}}) }}</div>
            </div>
            {{ form_errors(form.dateFin) }}
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">{{ form_label(form.motif, 'Motif', {'label_attr': {}}) }} : </div>
        <div class=\"col-md-4\">
            {{ form_widget(form.motif, {'attr': {'class':'form-control'}}) }}
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
