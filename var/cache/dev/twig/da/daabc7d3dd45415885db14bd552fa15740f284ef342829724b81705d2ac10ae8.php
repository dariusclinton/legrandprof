<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_1b61d811f56c31be876aa74889398d1f0bb28942e362a0b6d3ba1c40b6328333 extends Twig_Template
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
        $__internal_d1b50a02c0f8e8f53aeec5605e82414449b266c08a1a3f9d02d313ddadfc384e = $this->env->getExtension("native_profiler");
        $__internal_d1b50a02c0f8e8f53aeec5605e82414449b266c08a1a3f9d02d313ddadfc384e->enter($__internal_d1b50a02c0f8e8f53aeec5605e82414449b266c08a1a3f9d02d313ddadfc384e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1b50a02c0f8e8f53aeec5605e82414449b266c08a1a3f9d02d313ddadfc384e->leave($__internal_d1b50a02c0f8e8f53aeec5605e82414449b266c08a1a3f9d02d313ddadfc384e_prof);

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
