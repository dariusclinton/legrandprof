<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_ab6c15dffc49d1430319cdf846cc82e8e2cf4c27c12c5a72ce6451ecc9ebfcdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d37c63d34b9daf39e02b697098a6fe4db8ba61c248eec14214b53ed17af1366 = $this->env->getExtension("native_profiler");
        $__internal_5d37c63d34b9daf39e02b697098a6fe4db8ba61c248eec14214b53ed17af1366->enter($__internal_5d37c63d34b9daf39e02b697098a6fe4db8ba61c248eec14214b53ed17af1366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d37c63d34b9daf39e02b697098a6fe4db8ba61c248eec14214b53ed17af1366->leave($__internal_5d37c63d34b9daf39e02b697098a6fe4db8ba61c248eec14214b53ed17af1366_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c86a17a71829fc4f90776312906ef2d4dda3f589f7ca560c37cb75da8e65339e = $this->env->getExtension("native_profiler");
        $__internal_c86a17a71829fc4f90776312906ef2d4dda3f589f7ca560c37cb75da8e65339e->enter($__internal_c86a17a71829fc4f90776312906ef2d4dda3f589f7ca560c37cb75da8e65339e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_c86a17a71829fc4f90776312906ef2d4dda3f589f7ca560c37cb75da8e65339e->leave($__internal_c86a17a71829fc4f90776312906ef2d4dda3f589f7ca560c37cb75da8e65339e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
";
    }
}
