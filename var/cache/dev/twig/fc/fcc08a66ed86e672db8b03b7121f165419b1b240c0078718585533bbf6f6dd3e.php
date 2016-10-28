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
        $__internal_c021c532b5ff11828a26d916bb350d9840444bbdc6910eb92952adb400b39cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c021c532b5ff11828a26d916bb350d9840444bbdc6910eb92952adb400b39cc1->enter($__internal_c021c532b5ff11828a26d916bb350d9840444bbdc6910eb92952adb400b39cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Form:course_form_search.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form_course"]) ? $context["form_course"] : $this->getContext($context, "form_course")), 'form_start');
        echo "

<div class=\"column-item-medium\">
    <div class=\"form-group\" data-onload=\"loadCourses()\">
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_course"]) ? $context["form_course"] : $this->getContext($context, "form_course")), "intitule", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "spellcheck" => "off")));
        echo "
    </div>
</div>
";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_course"]) ? $context["form_course"] : $this->getContext($context, "form_course")), 'rest');
        echo "
<div class=\"column-item for-btn\">
    <div class=\"form-group\">
        <input type=\"submit\" name=\"\" value=\"Rechercher\" class=\"btn btn-primary btn-block\">
    </div>
</div>
";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form_course"]) ? $context["form_course"] : $this->getContext($context, "form_course")), 'form_end');
        
        $__internal_c021c532b5ff11828a26d916bb350d9840444bbdc6910eb92952adb400b39cc1->leave($__internal_c021c532b5ff11828a26d916bb350d9840444bbdc6910eb92952adb400b39cc1_prof);

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
        return array (  44 => 14,  35 => 8,  29 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form_course) }}

<div class=\"column-item-medium\">
    <div class=\"form-group\" data-onload=\"loadCourses()\">
        {{ form_widget(form_course.intitule, {'attr': {'class': 'form-control', 'autocomplete':'off', 'spellcheck':'off'}}) }}
    </div>
</div>
{{ form_rest(form_course) }}
<div class=\"column-item for-btn\">
    <div class=\"form-group\">
        <input type=\"submit\" name=\"\" value=\"Rechercher\" class=\"btn btn-primary btn-block\">
    </div>
</div>
{{ form_end(form_course) }}";
    }
}
