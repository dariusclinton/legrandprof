<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_00e3784b1d0351a3c64d5ea4c57ebfd277a7a03e6bd1b9a37d34ec84d923836a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbd1375395d0968c89f7d738243dd852ad07f87feeef159399c3453512150077 = $this->env->getExtension("native_profiler");
        $__internal_bbd1375395d0968c89f7d738243dd852ad07f87feeef159399c3453512150077->enter($__internal_bbd1375395d0968c89f7d738243dd852ad07f87feeef159399c3453512150077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbd1375395d0968c89f7d738243dd852ad07f87feeef159399c3453512150077->leave($__internal_bbd1375395d0968c89f7d738243dd852ad07f87feeef159399c3453512150077_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_29dc2261274ff9df38e5a457646d464941fe1673917fee20bdb3342697ff5016 = $this->env->getExtension("native_profiler");
        $__internal_29dc2261274ff9df38e5a457646d464941fe1673917fee20bdb3342697ff5016->enter($__internal_29dc2261274ff9df38e5a457646d464941fe1673917fee20bdb3342697ff5016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_29dc2261274ff9df38e5a457646d464941fe1673917fee20bdb3342697ff5016->leave($__internal_29dc2261274ff9df38e5a457646d464941fe1673917fee20bdb3342697ff5016_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"::layout.html.twig\" %}

{% block body %}



{% endblock %}
";
    }
}
