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
        $__internal_ab075ac8fc874565dd022df4a1ebabf0625a7813efad250fb9f540eb460fef81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab075ac8fc874565dd022df4a1ebabf0625a7813efad250fb9f540eb460fef81->enter($__internal_ab075ac8fc874565dd022df4a1ebabf0625a7813efad250fb9f540eb460fef81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab075ac8fc874565dd022df4a1ebabf0625a7813efad250fb9f540eb460fef81->leave($__internal_ab075ac8fc874565dd022df4a1ebabf0625a7813efad250fb9f540eb460fef81_prof);

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
