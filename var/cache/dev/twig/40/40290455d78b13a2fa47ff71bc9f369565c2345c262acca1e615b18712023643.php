<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_5d7bc87649681806824387d5571e55821932e7a4dd3da9c75b22d7c641f7b286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcf23dc0d7f4ce11b3268975e04669732d8445769238361f028ac0afbb463c86 = $this->env->getExtension("native_profiler");
        $__internal_fcf23dc0d7f4ce11b3268975e04669732d8445769238361f028ac0afbb463c86->enter($__internal_fcf23dc0d7f4ce11b3268975e04669732d8445769238361f028ac0afbb463c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcf23dc0d7f4ce11b3268975e04669732d8445769238361f028ac0afbb463c86->leave($__internal_fcf23dc0d7f4ce11b3268975e04669732d8445769238361f028ac0afbb463c86_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
";
    }
}
