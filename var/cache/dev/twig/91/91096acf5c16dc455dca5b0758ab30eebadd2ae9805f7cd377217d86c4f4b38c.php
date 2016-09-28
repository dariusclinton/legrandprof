<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_252f0aa29ac9450faf926649ec2f89fadd817f73218b3a8cc1f88360463af22d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_111207d990933eea59d5a7fc1c18f3028455a9a7c892439fd26603408dd5d540 = $this->env->getExtension("native_profiler");
        $__internal_111207d990933eea59d5a7fc1c18f3028455a9a7c892439fd26603408dd5d540->enter($__internal_111207d990933eea59d5a7fc1c18f3028455a9a7c892439fd26603408dd5d540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_111207d990933eea59d5a7fc1c18f3028455a9a7c892439fd26603408dd5d540->leave($__internal_111207d990933eea59d5a7fc1c18f3028455a9a7c892439fd26603408dd5d540_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ed3d9b9b6b26847e4e609fc492635803e25669d369cba8e99ac226617f37ee48 = $this->env->getExtension("native_profiler");
        $__internal_ed3d9b9b6b26847e4e609fc492635803e25669d369cba8e99ac226617f37ee48->enter($__internal_ed3d9b9b6b26847e4e609fc492635803e25669d369cba8e99ac226617f37ee48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_ed3d9b9b6b26847e4e609fc492635803e25669d369cba8e99ac226617f37ee48->leave($__internal_ed3d9b9b6b26847e4e609fc492635803e25669d369cba8e99ac226617f37ee48_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_7fa375058e1125dc3421e93360b394913d8151aa7be4b772426d237d5f85def3 = $this->env->getExtension("native_profiler");
        $__internal_7fa375058e1125dc3421e93360b394913d8151aa7be4b772426d237d5f85def3->enter($__internal_7fa375058e1125dc3421e93360b394913d8151aa7be4b772426d237d5f85def3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_7fa375058e1125dc3421e93360b394913d8151aa7be4b772426d237d5f85def3->leave($__internal_7fa375058e1125dc3421e93360b394913d8151aa7be4b772426d237d5f85def3_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_f29c59cd1b310099db66b04010dcd809f1234f0b22dfd515464223b0c285b6fa = $this->env->getExtension("native_profiler");
        $__internal_f29c59cd1b310099db66b04010dcd809f1234f0b22dfd515464223b0c285b6fa->enter($__internal_f29c59cd1b310099db66b04010dcd809f1234f0b22dfd515464223b0c285b6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_f29c59cd1b310099db66b04010dcd809f1234f0b22dfd515464223b0c285b6fa->leave($__internal_f29c59cd1b310099db66b04010dcd809f1234f0b22dfd515464223b0c285b6fa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block actions %}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{% endblock %}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
";
    }
}
