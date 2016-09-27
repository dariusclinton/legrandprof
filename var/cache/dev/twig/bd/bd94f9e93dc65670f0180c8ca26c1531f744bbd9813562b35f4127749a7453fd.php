<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_4521d676946951738cb56724d2c52591d8716f7f5a7fa46afcb86c386a78aa7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc5ea42332ae27e65d5cd5e3b16502a21621d85c4214d6d81c448b7459534ed7 = $this->env->getExtension("native_profiler");
        $__internal_cc5ea42332ae27e65d5cd5e3b16502a21621d85c4214d6d81c448b7459534ed7->enter($__internal_cc5ea42332ae27e65d5cd5e3b16502a21621d85c4214d6d81c448b7459534ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc5ea42332ae27e65d5cd5e3b16502a21621d85c4214d6d81c448b7459534ed7->leave($__internal_cc5ea42332ae27e65d5cd5e3b16502a21621d85c4214d6d81c448b7459534ed7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
";
    }
}
