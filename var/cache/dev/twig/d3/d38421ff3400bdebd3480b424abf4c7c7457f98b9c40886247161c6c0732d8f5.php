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
        $__internal_fe40b513234412bd8e0aa78c12a6c2cd4a5e792f4f4de9ce5637bfe28445c97e = $this->env->getExtension("native_profiler");
        $__internal_fe40b513234412bd8e0aa78c12a6c2cd4a5e792f4f4de9ce5637bfe28445c97e->enter($__internal_fe40b513234412bd8e0aa78c12a6c2cd4a5e792f4f4de9ce5637bfe28445c97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe40b513234412bd8e0aa78c12a6c2cd4a5e792f4f4de9ce5637bfe28445c97e->leave($__internal_fe40b513234412bd8e0aa78c12a6c2cd4a5e792f4f4de9ce5637bfe28445c97e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb71bd32b39962fcfced1ede22eb1b35b0c3c877a4adb105d894f7ac559845d7 = $this->env->getExtension("native_profiler");
        $__internal_cb71bd32b39962fcfced1ede22eb1b35b0c3c877a4adb105d894f7ac559845d7->enter($__internal_cb71bd32b39962fcfced1ede22eb1b35b0c3c877a4adb105d894f7ac559845d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_cb71bd32b39962fcfced1ede22eb1b35b0c3c877a4adb105d894f7ac559845d7->leave($__internal_cb71bd32b39962fcfced1ede22eb1b35b0c3c877a4adb105d894f7ac559845d7_prof);

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
