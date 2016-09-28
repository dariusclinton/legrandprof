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
        $__internal_229978f1618e8eaa855ad45038bfba7435d7523e5455c30452a0bd27a7ac4e4b = $this->env->getExtension("native_profiler");
        $__internal_229978f1618e8eaa855ad45038bfba7435d7523e5455c30452a0bd27a7ac4e4b->enter($__internal_229978f1618e8eaa855ad45038bfba7435d7523e5455c30452a0bd27a7ac4e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_229978f1618e8eaa855ad45038bfba7435d7523e5455c30452a0bd27a7ac4e4b->leave($__internal_229978f1618e8eaa855ad45038bfba7435d7523e5455c30452a0bd27a7ac4e4b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3481e398631fe102bf5d23754c4cbcf56e904c95f55657ba23c88526980e9f25 = $this->env->getExtension("native_profiler");
        $__internal_3481e398631fe102bf5d23754c4cbcf56e904c95f55657ba23c88526980e9f25->enter($__internal_3481e398631fe102bf5d23754c4cbcf56e904c95f55657ba23c88526980e9f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_3481e398631fe102bf5d23754c4cbcf56e904c95f55657ba23c88526980e9f25->leave($__internal_3481e398631fe102bf5d23754c4cbcf56e904c95f55657ba23c88526980e9f25_prof);

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
