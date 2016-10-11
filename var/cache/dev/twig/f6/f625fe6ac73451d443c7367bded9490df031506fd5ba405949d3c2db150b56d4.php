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
        $__internal_6131161f4c9c6c4f23f89c6972d61b81e69682a1466c17114e634a04e8341b1d = $this->env->getExtension("native_profiler");
        $__internal_6131161f4c9c6c4f23f89c6972d61b81e69682a1466c17114e634a04e8341b1d->enter($__internal_6131161f4c9c6c4f23f89c6972d61b81e69682a1466c17114e634a04e8341b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6131161f4c9c6c4f23f89c6972d61b81e69682a1466c17114e634a04e8341b1d->leave($__internal_6131161f4c9c6c4f23f89c6972d61b81e69682a1466c17114e634a04e8341b1d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9bbd2b592d00a19cb320ce1b1b335d7b29deb8fa2e86a95e75ac3cf2e7d99fac = $this->env->getExtension("native_profiler");
        $__internal_9bbd2b592d00a19cb320ce1b1b335d7b29deb8fa2e86a95e75ac3cf2e7d99fac->enter($__internal_9bbd2b592d00a19cb320ce1b1b335d7b29deb8fa2e86a95e75ac3cf2e7d99fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_9bbd2b592d00a19cb320ce1b1b335d7b29deb8fa2e86a95e75ac3cf2e7d99fac->leave($__internal_9bbd2b592d00a19cb320ce1b1b335d7b29deb8fa2e86a95e75ac3cf2e7d99fac_prof);

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
