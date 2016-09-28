<?php

/* SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_5b0113cd983abc847e403f2d3fa9702edb1b8fa1c50460f415e5da27288bd7b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a45d6fbbe3236548d7692a80d309f23fb2bfa236e52d30a6ec73f40f7d184a9 = $this->env->getExtension("native_profiler");
        $__internal_7a45d6fbbe3236548d7692a80d309f23fb2bfa236e52d30a6ec73f40f7d184a9->enter($__internal_7a45d6fbbe3236548d7692a80d309f23fb2bfa236e52d30a6ec73f40f7d184a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a45d6fbbe3236548d7692a80d309f23fb2bfa236e52d30a6ec73f40f7d184a9->leave($__internal_7a45d6fbbe3236548d7692a80d309f23fb2bfa236e52d30a6ec73f40f7d184a9_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig";
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
";
    }
}
