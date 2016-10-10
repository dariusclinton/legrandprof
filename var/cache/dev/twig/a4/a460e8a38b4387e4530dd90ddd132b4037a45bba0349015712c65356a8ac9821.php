<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_65f27ecce06d3ec1a6e0f823c4d758bce8875a4a51a75c5e1e01d6d39114a1a6 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ee1980f5d5e8384ed25de372db2960b1639a2b781d6a05ad0b6bfabad19b74f = $this->env->getExtension("native_profiler");
        $__internal_2ee1980f5d5e8384ed25de372db2960b1639a2b781d6a05ad0b6bfabad19b74f->enter($__internal_2ee1980f5d5e8384ed25de372db2960b1639a2b781d6a05ad0b6bfabad19b74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ee1980f5d5e8384ed25de372db2960b1639a2b781d6a05ad0b6bfabad19b74f->leave($__internal_2ee1980f5d5e8384ed25de372db2960b1639a2b781d6a05ad0b6bfabad19b74f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d237f8cf329a8bdcd2ab644a53fe36a3b56023fc1e98c57f3f727cef60a0d4d4 = $this->env->getExtension("native_profiler");
        $__internal_d237f8cf329a8bdcd2ab644a53fe36a3b56023fc1e98c57f3f727cef60a0d4d4->enter($__internal_d237f8cf329a8bdcd2ab644a53fe36a3b56023fc1e98c57f3f727cef60a0d4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_d237f8cf329a8bdcd2ab644a53fe36a3b56023fc1e98c57f3f727cef60a0d4d4->leave($__internal_d237f8cf329a8bdcd2ab644a53fe36a3b56023fc1e98c57f3f727cef60a0d4d4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
";
    }
}
