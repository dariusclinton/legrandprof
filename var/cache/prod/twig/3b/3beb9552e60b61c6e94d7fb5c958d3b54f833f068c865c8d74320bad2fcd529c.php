<?php

/* LGPCourseBundle:Form:course_form_search.html.twig */
class __TwigTemplate_b0e3c545046ed7077917e2db354ce2abe622c66ddae890ea588a2e12e3f23e12 extends Twig_Template
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

<div class=\"column-item-medium\">
    <div class=\"form-group\" data-onload=\"loadCourses()\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "intitule", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "spellcheck" => "off")));
        echo "
    </div>
</div>
<div class=\"column-item-medium\">
    <div class=\"form-group\">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quartier", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "spellcheck" => "off")));
        echo "
    </div>
</div>
";
        // line 13
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quartier1", array(), "any", true, true)) {
            // line 14
            echo "    <div class=\"column-item-medium\">
        <div class=\"form-group\">
            ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quartier1", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "spellcheck" => "off")));
            echo "
        </div>
    </div>
";
        }
        // line 20
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
<div class=\"column-item for-btn\">
    <div class=\"form-group\">
        <input type=\"submit\" name=\"\" value=\"Rechercher\" class=\"btn btn-primary btn-block\">
    </div>
</div>
";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Form:course_form_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 26,  53 => 20,  46 => 16,  42 => 14,  40 => 13,  34 => 10,  26 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}

<div class=\"column-item-medium\">
    <div class=\"form-group\" data-onload=\"loadCourses()\">
        {{ form_widget(form.intitule, {'attr': {'class': 'form-control', 'autocomplete':'off', 'spellcheck':'off'}}) }}
    </div>
</div>
<div class=\"column-item-medium\">
    <div class=\"form-group\">
        {{ form_widget(form.quartier, {'attr': {'class': 'form-control', 'autocomplete':'off', 'spellcheck':'off'}}) }}
    </div>
</div>
{% if form.quartier1 is defined %}
    <div class=\"column-item-medium\">
        <div class=\"form-group\">
            {{ form_widget(form.quartier1, {'attr': {'class': 'form-control', 'autocomplete':'off', 'spellcheck':'off'}}) }}
        </div>
    </div>
{% endif %}
    {{ form_rest(form) }}
<div class=\"column-item for-btn\">
    <div class=\"form-group\">
        <input type=\"submit\" name=\"\" value=\"Rechercher\" class=\"btn btn-primary btn-block\">
    </div>
</div>
{{ form_end(form) }}";
    }
}
