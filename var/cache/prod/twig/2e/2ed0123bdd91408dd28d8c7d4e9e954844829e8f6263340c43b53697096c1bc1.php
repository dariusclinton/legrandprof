<?php

/* LGPCourseBundle:Form:city_form_search.html.twig */
class __TwigTemplate_df6f50cfda2969047ebeedf461c4c279c944fb012c5d29e056b02994cf5d28b0 extends Twig_Template
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form_city"]) ? $context["form_city"] : null), 'form_start');
        echo "
<div class=\"column-item-medium\">
    <div class=\"form-group\">
        ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_city"]) ? $context["form_city"] : null), "ville", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "spellcheck" => "off")));
        echo "
    </div>
</div>
";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_city"]) ? $context["form_city"] : null), 'rest');
        echo "
<div class=\"column-item for-btn\">
    <div class=\"form-group\">
        <input type=\"submit\" name=\"\" value=\"Rechercher\" class=\"btn btn-primary btn-block\">
    </div>
</div>
";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form_city"]) ? $context["form_city"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Form:city_form_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 13,  31 => 7,  25 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
