<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_23b1bb09fe5afb462229aa15e65f01d0e7a65741269f0170aa14a847f9b8a479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b477079a373e4ff5c6f73d04ebcf165c6ce50cf2fe8107cf58903d321a69e21f = $this->env->getExtension("native_profiler");
        $__internal_b477079a373e4ff5c6f73d04ebcf165c6ce50cf2fe8107cf58903d321a69e21f->enter($__internal_b477079a373e4ff5c6f73d04ebcf165c6ce50cf2fe8107cf58903d321a69e21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b477079a373e4ff5c6f73d04ebcf165c6ce50cf2fe8107cf58903d321a69e21f->leave($__internal_b477079a373e4ff5c6f73d04ebcf165c6ce50cf2fe8107cf58903d321a69e21f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
";
    }
}
