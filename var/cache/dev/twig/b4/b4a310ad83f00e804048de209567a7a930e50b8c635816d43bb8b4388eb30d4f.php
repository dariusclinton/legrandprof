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
        $__internal_22165fb7b7748bab811ceb7d9d54fb9316c60e245ff2661749bc0f4893770d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22165fb7b7748bab811ceb7d9d54fb9316c60e245ff2661749bc0f4893770d08->enter($__internal_22165fb7b7748bab811ceb7d9d54fb9316c60e245ff2661749bc0f4893770d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22165fb7b7748bab811ceb7d9d54fb9316c60e245ff2661749bc0f4893770d08->leave($__internal_22165fb7b7748bab811ceb7d9d54fb9316c60e245ff2661749bc0f4893770d08_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7a61d7d3e053c83b08ce0b44706dcf94321a79a63b376b6b8fb0531f0c36eb29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a61d7d3e053c83b08ce0b44706dcf94321a79a63b376b6b8fb0531f0c36eb29->enter($__internal_7a61d7d3e053c83b08ce0b44706dcf94321a79a63b376b6b8fb0531f0c36eb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_7a61d7d3e053c83b08ce0b44706dcf94321a79a63b376b6b8fb0531f0c36eb29->leave($__internal_7a61d7d3e053c83b08ce0b44706dcf94321a79a63b376b6b8fb0531f0c36eb29_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_3742ce5cdcad85f1978b4f4b8c797282316cfeb29fd7bc46d0f5baf6990d2667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3742ce5cdcad85f1978b4f4b8c797282316cfeb29fd7bc46d0f5baf6990d2667->enter($__internal_3742ce5cdcad85f1978b4f4b8c797282316cfeb29fd7bc46d0f5baf6990d2667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_3742ce5cdcad85f1978b4f4b8c797282316cfeb29fd7bc46d0f5baf6990d2667->leave($__internal_3742ce5cdcad85f1978b4f4b8c797282316cfeb29fd7bc46d0f5baf6990d2667_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_91ec668364ff3d53c5f8dfdfa20fdfc6f7c8de5327bbe084c146cf8afb1d86c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ec668364ff3d53c5f8dfdfa20fdfc6f7c8de5327bbe084c146cf8afb1d86c1->enter($__internal_91ec668364ff3d53c5f8dfdfa20fdfc6f7c8de5327bbe084c146cf8afb1d86c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_91ec668364ff3d53c5f8dfdfa20fdfc6f7c8de5327bbe084c146cf8afb1d86c1->leave($__internal_91ec668364ff3d53c5f8dfdfa20fdfc6f7c8de5327bbe084c146cf8afb1d86c1_prof);

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
