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
        $__internal_daeba0923760b236971b1437ed1d591800f9dc57f8c3252028ec4f12330e7c5a = $this->env->getExtension("native_profiler");
        $__internal_daeba0923760b236971b1437ed1d591800f9dc57f8c3252028ec4f12330e7c5a->enter($__internal_daeba0923760b236971b1437ed1d591800f9dc57f8c3252028ec4f12330e7c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daeba0923760b236971b1437ed1d591800f9dc57f8c3252028ec4f12330e7c5a->leave($__internal_daeba0923760b236971b1437ed1d591800f9dc57f8c3252028ec4f12330e7c5a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_26bc15027738be4eb68f12c9aad86f6d4b3f5841e60d69e14094775ebc784d70 = $this->env->getExtension("native_profiler");
        $__internal_26bc15027738be4eb68f12c9aad86f6d4b3f5841e60d69e14094775ebc784d70->enter($__internal_26bc15027738be4eb68f12c9aad86f6d4b3f5841e60d69e14094775ebc784d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_26bc15027738be4eb68f12c9aad86f6d4b3f5841e60d69e14094775ebc784d70->leave($__internal_26bc15027738be4eb68f12c9aad86f6d4b3f5841e60d69e14094775ebc784d70_prof);

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
