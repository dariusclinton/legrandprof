<?php

/* LGPCourseBundle:Form:course_quarter_form_search.html.twig */
class __TwigTemplate_0860cf51d910ee843306c23655eac45475ec2dd6b2c028be9e6d35e09934ef50 extends Twig_Template
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
        $__internal_b0fa1a626a5d9b4659f9bf4f56c719daa956b9f68a39d954a8c1dc31ca175071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fa1a626a5d9b4659f9bf4f56c719daa956b9f68a39d954a8c1dc31ca175071->enter($__internal_b0fa1a626a5d9b4659f9bf4f56c719daa956b9f68a39d954a8c1dc31ca175071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Form:course_quarter_form_search.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form_course_quarter"]) ? $context["form_course_quarter"] : $this->getContext($context, "form_course_quarter")), 'form_start');
        echo "

<div class=\"column-item-medium\">
    <div class=\"form-group\">
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_course_quarter"]) ? $context["form_course_quarter"] : $this->getContext($context, "form_course_quarter")), "intitule", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "spellcheck" => "off")));
        echo "
    </div>
</div>
<div class=\"column-item-medium\">
    <div class=\"form-group\">
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_course_quarter"]) ? $context["form_course_quarter"] : $this->getContext($context, "form_course_quarter")), "quartier", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "spellcheck" => "off")));
        echo "
    </div>
</div>
";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_course_quarter"]) ? $context["form_course_quarter"] : $this->getContext($context, "form_course_quarter")), 'rest');
        echo "
<div class=\"column-item for-btn\">
    <div class=\"form-group\">
        <input type=\"submit\" name=\"\" value=\"Rechercher\" class=\"btn btn-primary btn-block\">
    </div>
</div>
";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form_course_quarter"]) ? $context["form_course_quarter"] : $this->getContext($context, "form_course_quarter")), 'form_end');
        
        $__internal_b0fa1a626a5d9b4659f9bf4f56c719daa956b9f68a39d954a8c1dc31ca175071->leave($__internal_b0fa1a626a5d9b4659f9bf4f56c719daa956b9f68a39d954a8c1dc31ca175071_prof);

    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Form:course_quarter_form_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 19,  43 => 13,  37 => 10,  29 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form_course_quarter) }}

<div class=\"column-item-medium\">
    <div class=\"form-group\">
        {{ form_widget(form_course_quarter.intitule, {'attr': {'class': 'form-control', 'autocomplete':'off', 'spellcheck':'off'}}) }}
    </div>
</div>
<div class=\"column-item-medium\">
    <div class=\"form-group\">
        {{ form_widget(form_course_quarter.quartier, {'attr': {'class': 'form-control', 'autocomplete':'off', 'spellcheck':'off'}}) }}
    </div>
</div>
{{ form_rest(form_course_quarter) }}
<div class=\"column-item for-btn\">
    <div class=\"form-group\">
        <input type=\"submit\" name=\"\" value=\"Rechercher\" class=\"btn btn-primary btn-block\">
    </div>
</div>
{{ form_end(form_course_quarter) }}";
    }
}
