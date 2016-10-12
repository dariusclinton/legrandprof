<?php

/* LGPAdminBundle:ProfAdmin:list_cv.html.twig */
class __TwigTemplate_0a77714f7eda31d0df553c8fb20a11f6d00826fb7d9dfb4b9d60604b3bf99c50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "LGPAdminBundle:ProfAdmin:list_cv.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b062d45777ece27720c9ebdc61700c63a1c319970ac2f6a0d271af18a0d19d96 = $this->env->getExtension("native_profiler");
        $__internal_b062d45777ece27720c9ebdc61700c63a1c319970ac2f6a0d271af18a0d19d96->enter($__internal_b062d45777ece27720c9ebdc61700c63a1c319970ac2f6a0d271af18a0d19d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPAdminBundle:ProfAdmin:list_cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b062d45777ece27720c9ebdc61700c63a1c319970ac2f6a0d271af18a0d19d96->leave($__internal_b062d45777ece27720c9ebdc61700c63a1c319970ac2f6a0d271af18a0d19d96_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_bf89a4652082444fe218bd79dd278d0678659aee561c7bab9ba93eeafe590de7 = $this->env->getExtension("native_profiler");
        $__internal_bf89a4652082444fe218bd79dd278d0678659aee561c7bab9ba93eeafe590de7->enter($__internal_bf89a4652082444fe218bd79dd278d0678659aee561c7bab9ba93eeafe590de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "CVFile", array()))) {
            // line 5
            echo "        (<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "CVFile", array()), "webPath", array())), "html", null, true);
            echo "\" target=\"blank\">Voir le CV</a>)
    ";
        }
        
        $__internal_bf89a4652082444fe218bd79dd278d0678659aee561c7bab9ba93eeafe590de7->leave($__internal_bf89a4652082444fe218bd79dd278d0678659aee561c7bab9ba93eeafe590de7_prof);

    }

    public function getTemplateName()
    {
        return "LGPAdminBundle:ProfAdmin:list_cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}

{% block field %}
    {% if object.CVFile is not null %}
        (<a href=\"{{ asset(object.CVFile.webPath) }}\" target=\"blank\">Voir le CV</a>)
    {% endif %}
{% endblock %}
";
    }
}
