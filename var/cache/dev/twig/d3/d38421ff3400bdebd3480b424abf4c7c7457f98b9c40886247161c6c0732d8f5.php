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
        $__internal_7178d9339e13e3e060ce862805d5d4be866739fec1f7f4f87cd22c80a81a408d = $this->env->getExtension("native_profiler");
        $__internal_7178d9339e13e3e060ce862805d5d4be866739fec1f7f4f87cd22c80a81a408d->enter($__internal_7178d9339e13e3e060ce862805d5d4be866739fec1f7f4f87cd22c80a81a408d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7178d9339e13e3e060ce862805d5d4be866739fec1f7f4f87cd22c80a81a408d->leave($__internal_7178d9339e13e3e060ce862805d5d4be866739fec1f7f4f87cd22c80a81a408d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e0b661956e295563989de0f9b6f6f151c976a848a5480cfe01045c732a81153 = $this->env->getExtension("native_profiler");
        $__internal_9e0b661956e295563989de0f9b6f6f151c976a848a5480cfe01045c732a81153->enter($__internal_9e0b661956e295563989de0f9b6f6f151c976a848a5480cfe01045c732a81153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_9e0b661956e295563989de0f9b6f6f151c976a848a5480cfe01045c732a81153->leave($__internal_9e0b661956e295563989de0f9b6f6f151c976a848a5480cfe01045c732a81153_prof);

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
