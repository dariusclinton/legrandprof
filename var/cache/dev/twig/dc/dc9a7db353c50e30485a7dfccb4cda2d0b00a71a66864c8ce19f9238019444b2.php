<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_376cedbffd1475f18b038bf1bddbc61f36bfa1f96c35dfcc6dc930b0d5aebe11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6af3b31b9d81ecea94ba362c08294eb6af865a60947aed81cb2515fc84d61480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af3b31b9d81ecea94ba362c08294eb6af865a60947aed81cb2515fc84d61480->enter($__internal_6af3b31b9d81ecea94ba362c08294eb6af865a60947aed81cb2515fc84d61480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6af3b31b9d81ecea94ba362c08294eb6af865a60947aed81cb2515fc84d61480->leave($__internal_6af3b31b9d81ecea94ba362c08294eb6af865a60947aed81cb2515fc84d61480_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
";
    }
}
