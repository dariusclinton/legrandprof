<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_1c7ced3a42052fa275849b8d3605614c52819d9cd23b06a9bd1679935a19c87f extends Twig_Template
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
        $__internal_e21bfaa1958ab1e76d1b15c437159119be62e7765197b3110aacc8711673599d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21bfaa1958ab1e76d1b15c437159119be62e7765197b3110aacc8711673599d->enter($__internal_e21bfaa1958ab1e76d1b15c437159119be62e7765197b3110aacc8711673599d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e21bfaa1958ab1e76d1b15c437159119be62e7765197b3110aacc8711673599d->leave($__internal_e21bfaa1958ab1e76d1b15c437159119be62e7765197b3110aacc8711673599d_prof);

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
