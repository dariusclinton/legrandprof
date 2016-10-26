<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_7dea89339ba992d476af24ef9f20cf7f2ec062d5d43774715d0ee7d2accebcde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1daefe2cf11fef935705ddcf12cbbc492096fd4e66d7702c51b8e36349a5c8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1daefe2cf11fef935705ddcf12cbbc492096fd4e66d7702c51b8e36349a5c8ec->enter($__internal_1daefe2cf11fef935705ddcf12cbbc492096fd4e66d7702c51b8e36349a5c8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1daefe2cf11fef935705ddcf12cbbc492096fd4e66d7702c51b8e36349a5c8ec->leave($__internal_1daefe2cf11fef935705ddcf12cbbc492096fd4e66d7702c51b8e36349a5c8ec_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
";
    }
}
