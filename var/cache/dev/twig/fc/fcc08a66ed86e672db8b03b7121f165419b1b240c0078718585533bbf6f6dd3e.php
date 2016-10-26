<?php

/* LGPCourseBundle:Form:course_form_search.html.twig */
class __TwigTemplate_c4af6b477b97c975a7b8b6bd13f3093811ee648da375e660b5005cbd69018d84 extends Twig_Template
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
        $__internal_409a509927072086abf3aec6e777ff293d9c02063761f7782b7425be2f51982e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409a509927072086abf3aec6e777ff293d9c02063761f7782b7425be2f51982e->enter($__internal_409a509927072086abf3aec6e777ff293d9c02063761f7782b7425be2f51982e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Form:course_form_search.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"column-item-medium\">
    <div class=\"form-group\" data-onload=\"loadCourses()\">
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "spellcheck" => "off")));
        echo "
    </div>
</div>
<div class=\"column-item-medium\">
    <div class=\"form-group\">
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quartier", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "spellcheck" => "off")));
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quartier1", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "spellcheck" => "off")));
            echo "
        </div>
    </div>
";
        }
        // line 20
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
<div class=\"column-item for-btn\">
    <div class=\"form-group\">
        <input type=\"submit\" name=\"\" value=\"Rechercher\" class=\"btn btn-primary btn-block\">
    </div>
</div>
";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_409a509927072086abf3aec6e777ff293d9c02063761f7782b7425be2f51982e->leave($__internal_409a509927072086abf3aec6e777ff293d9c02063761f7782b7425be2f51982e_prof);

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
        return array (  66 => 26,  56 => 20,  49 => 16,  45 => 14,  43 => 13,  37 => 10,  29 => 5,  22 => 1,);
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
