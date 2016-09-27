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
        $__internal_7c1e368172c6bf2de7e4abbe2b09f33ecf487b76b936046bf3e97b3c3ffd194b = $this->env->getExtension("native_profiler");
        $__internal_7c1e368172c6bf2de7e4abbe2b09f33ecf487b76b936046bf3e97b3c3ffd194b->enter($__internal_7c1e368172c6bf2de7e4abbe2b09f33ecf487b76b936046bf3e97b3c3ffd194b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c1e368172c6bf2de7e4abbe2b09f33ecf487b76b936046bf3e97b3c3ffd194b->leave($__internal_7c1e368172c6bf2de7e4abbe2b09f33ecf487b76b936046bf3e97b3c3ffd194b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2019e9bc4265367df862e2dafadbfc93d08899fe9e3cf8e408b0d936a2141478 = $this->env->getExtension("native_profiler");
        $__internal_2019e9bc4265367df862e2dafadbfc93d08899fe9e3cf8e408b0d936a2141478->enter($__internal_2019e9bc4265367df862e2dafadbfc93d08899fe9e3cf8e408b0d936a2141478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_2019e9bc4265367df862e2dafadbfc93d08899fe9e3cf8e408b0d936a2141478->leave($__internal_2019e9bc4265367df862e2dafadbfc93d08899fe9e3cf8e408b0d936a2141478_prof);

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
