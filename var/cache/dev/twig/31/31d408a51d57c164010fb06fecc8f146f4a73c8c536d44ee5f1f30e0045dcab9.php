<?php

/* LGPCourseBundle:Form:city_form_search.html.twig */
class __TwigTemplate_8e3ffb2483ebc385c92fd56cf24acefe1ea1ea49ae10511693806245da0f4ad3 extends Twig_Template
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
        $__internal_7351bcbebb3354bbec8d15e6b70b673e0c1bcc7f7105c25da1c120475bc62f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7351bcbebb3354bbec8d15e6b70b673e0c1bcc7f7105c25da1c120475bc62f8d->enter($__internal_7351bcbebb3354bbec8d15e6b70b673e0c1bcc7f7105c25da1c120475bc62f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Form:city_form_search.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form_city"]) ? $context["form_city"] : $this->getContext($context, "form_city")), 'form_start');
        echo "
<div class=\"column-item-medium\">
    <div class=\"form-group\">
        ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_city"]) ? $context["form_city"] : $this->getContext($context, "form_city")), "ville", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "spellcheck" => "off")));
        echo "
    </div>
</div>
";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_city"]) ? $context["form_city"] : $this->getContext($context, "form_city")), 'rest');
        echo "
<div class=\"column-item for-btn\">
    <div class=\"form-group\">
        <input type=\"submit\" name=\"\" value=\"Rechercher\" class=\"btn btn-primary btn-block\">
    </div>
</div>
";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form_city"]) ? $context["form_city"] : $this->getContext($context, "form_city")), 'form_end');
        
        $__internal_7351bcbebb3354bbec8d15e6b70b673e0c1bcc7f7105c25da1c120475bc62f8d->leave($__internal_7351bcbebb3354bbec8d15e6b70b673e0c1bcc7f7105c25da1c120475bc62f8d_prof);

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
        return array (  43 => 13,  34 => 7,  28 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form_city) }}
<div class=\"column-item-medium\">
    <div class=\"form-group\">
        {{ form_widget(form_city.ville, {'attr': {'class': 'form-control', 'autocomplete':'off', 'spellcheck':'off'}}) }}
    </div>
</div>
{{ form_rest(form_city) }}
<div class=\"column-item for-btn\">
    <div class=\"form-group\">
        <input type=\"submit\" name=\"\" value=\"Rechercher\" class=\"btn btn-primary btn-block\">
    </div>
</div>
{{ form_end(form_city) }}";
    }
}
