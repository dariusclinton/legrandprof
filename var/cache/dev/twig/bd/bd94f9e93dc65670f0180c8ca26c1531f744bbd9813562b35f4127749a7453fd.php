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
        $__internal_669628bae84c5f58565272caca3f96ad5320a0077463b6b0a47f9e3728ef45c8 = $this->env->getExtension("native_profiler");
        $__internal_669628bae84c5f58565272caca3f96ad5320a0077463b6b0a47f9e3728ef45c8->enter($__internal_669628bae84c5f58565272caca3f96ad5320a0077463b6b0a47f9e3728ef45c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_669628bae84c5f58565272caca3f96ad5320a0077463b6b0a47f9e3728ef45c8->leave($__internal_669628bae84c5f58565272caca3f96ad5320a0077463b6b0a47f9e3728ef45c8_prof);

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
