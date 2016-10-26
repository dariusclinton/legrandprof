<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_c772c9bbe2fd09ded2fdd8eaf4e54492df376cea0b8cd1dc5235d97727122a53 extends Twig_Template
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
        $__internal_51395bfc1b92ccb3af0182dd559276a30e98d74cb70a7587c8ca381c533e1b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51395bfc1b92ccb3af0182dd559276a30e98d74cb70a7587c8ca381c533e1b37->enter($__internal_51395bfc1b92ccb3af0182dd559276a30e98d74cb70a7587c8ca381c533e1b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51395bfc1b92ccb3af0182dd559276a30e98d74cb70a7587c8ca381c533e1b37->leave($__internal_51395bfc1b92ccb3af0182dd559276a30e98d74cb70a7587c8ca381c533e1b37_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_be3cd744b2ecf9a7940cb46ba916dac2684323c3c6de9d044b343b8ef36b72ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3cd744b2ecf9a7940cb46ba916dac2684323c3c6de9d044b343b8ef36b72ab->enter($__internal_be3cd744b2ecf9a7940cb46ba916dac2684323c3c6de9d044b343b8ef36b72ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_be3cd744b2ecf9a7940cb46ba916dac2684323c3c6de9d044b343b8ef36b72ab->leave($__internal_be3cd744b2ecf9a7940cb46ba916dac2684323c3c6de9d044b343b8ef36b72ab_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_d580994b48145e8fcd1975989a9a94bfb9ada9945d591acf846568c65d98835b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d580994b48145e8fcd1975989a9a94bfb9ada9945d591acf846568c65d98835b->enter($__internal_d580994b48145e8fcd1975989a9a94bfb9ada9945d591acf846568c65d98835b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_d580994b48145e8fcd1975989a9a94bfb9ada9945d591acf846568c65d98835b->leave($__internal_d580994b48145e8fcd1975989a9a94bfb9ada9945d591acf846568c65d98835b_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_75bb624f8a4c7d12d0688a3a853a7824a8cdbbbd26590b62c377b09df85ecb45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bb624f8a4c7d12d0688a3a853a7824a8cdbbbd26590b62c377b09df85ecb45->enter($__internal_75bb624f8a4c7d12d0688a3a853a7824a8cdbbbd26590b62c377b09df85ecb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_75bb624f8a4c7d12d0688a3a853a7824a8cdbbbd26590b62c377b09df85ecb45->leave($__internal_75bb624f8a4c7d12d0688a3a853a7824a8cdbbbd26590b62c377b09df85ecb45_prof);

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
