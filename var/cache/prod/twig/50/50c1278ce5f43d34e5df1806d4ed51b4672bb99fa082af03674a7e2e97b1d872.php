<?php

/* LGPCourseBundle:Form:course_city_form_search.html.twig */
class __TwigTemplate_1e51f0e9c43687fd1d5a18c5c37b53b34dea7caa6f33cfb837cd2e61c2bc063a extends Twig_Template
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form_course_city"]) ? $context["form_course_city"] : null), 'form_start');
        echo "

<div class=\"column-item-medium\">
    <div class=\"form-group\">
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_course_city"]) ? $context["form_course_city"] : null), "intitule", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "spellcheck" => "off")));
        echo "
    </div>
</div>
<div class=\"column-item-medium\">
    <div class=\"form-group\">
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_course_city"]) ? $context["form_course_city"] : null), "quartier", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "spellcheck" => "off")));
        echo "
    </div>
</div>
";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_course_city"]) ? $context["form_course_city"] : null), 'rest');
        echo "
<div class=\"column-item for-btn\">
    <div class=\"form-group\">
        <input type=\"submit\" name=\"\" value=\"Rechercher\" class=\"btn btn-primary btn-block\">
    </div>
</div>
";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form_course_city"]) ? $context["form_course_city"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Form:course_city_form_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 19,  40 => 13,  34 => 10,  26 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
