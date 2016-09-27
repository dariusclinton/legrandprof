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
        $__internal_84af78f0e265ff2265c5bca8005602b036017cd4372082069915d6318c7b8bdf = $this->env->getExtension("native_profiler");
        $__internal_84af78f0e265ff2265c5bca8005602b036017cd4372082069915d6318c7b8bdf->enter($__internal_84af78f0e265ff2265c5bca8005602b036017cd4372082069915d6318c7b8bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84af78f0e265ff2265c5bca8005602b036017cd4372082069915d6318c7b8bdf->leave($__internal_84af78f0e265ff2265c5bca8005602b036017cd4372082069915d6318c7b8bdf_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2714d0c8404c6689627f91d6719708cdaba55219a47d152c2967d3c0fb869d1b = $this->env->getExtension("native_profiler");
        $__internal_2714d0c8404c6689627f91d6719708cdaba55219a47d152c2967d3c0fb869d1b->enter($__internal_2714d0c8404c6689627f91d6719708cdaba55219a47d152c2967d3c0fb869d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_2714d0c8404c6689627f91d6719708cdaba55219a47d152c2967d3c0fb869d1b->leave($__internal_2714d0c8404c6689627f91d6719708cdaba55219a47d152c2967d3c0fb869d1b_prof);

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
