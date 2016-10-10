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
        $__internal_bcff52169dec8333079a6ede54b04f4e635868431070f8ffc7f0ea607478339a = $this->env->getExtension("native_profiler");
        $__internal_bcff52169dec8333079a6ede54b04f4e635868431070f8ffc7f0ea607478339a->enter($__internal_bcff52169dec8333079a6ede54b04f4e635868431070f8ffc7f0ea607478339a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcff52169dec8333079a6ede54b04f4e635868431070f8ffc7f0ea607478339a->leave($__internal_bcff52169dec8333079a6ede54b04f4e635868431070f8ffc7f0ea607478339a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e58bf7e47c422d8fa387f5dd9a3396ad02d593802adf9e49ffdace076d816774 = $this->env->getExtension("native_profiler");
        $__internal_e58bf7e47c422d8fa387f5dd9a3396ad02d593802adf9e49ffdace076d816774->enter($__internal_e58bf7e47c422d8fa387f5dd9a3396ad02d593802adf9e49ffdace076d816774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_e58bf7e47c422d8fa387f5dd9a3396ad02d593802adf9e49ffdace076d816774->leave($__internal_e58bf7e47c422d8fa387f5dd9a3396ad02d593802adf9e49ffdace076d816774_prof);

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
