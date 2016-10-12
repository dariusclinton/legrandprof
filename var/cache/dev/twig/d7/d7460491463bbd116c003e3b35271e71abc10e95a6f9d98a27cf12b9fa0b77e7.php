<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_fb28a3b015569241baeb6a53a2a4fa53daabe5ccb8093856ab696c4baf97df76 extends Twig_Template
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
        $__internal_ad4687214a299adc221659d222c7f3ee2f2e901b6674984c074e1c175f3dc8ce = $this->env->getExtension("native_profiler");
        $__internal_ad4687214a299adc221659d222c7f3ee2f2e901b6674984c074e1c175f3dc8ce->enter($__internal_ad4687214a299adc221659d222c7f3ee2f2e901b6674984c074e1c175f3dc8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad4687214a299adc221659d222c7f3ee2f2e901b6674984c074e1c175f3dc8ce->leave($__internal_ad4687214a299adc221659d222c7f3ee2f2e901b6674984c074e1c175f3dc8ce_prof);

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
