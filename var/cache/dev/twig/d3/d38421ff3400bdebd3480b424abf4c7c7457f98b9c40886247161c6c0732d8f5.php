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
        $__internal_67a2d819dc7603b766b1070ac915e84de4cf40a29add95e8fab676783d9353f9 = $this->env->getExtension("native_profiler");
        $__internal_67a2d819dc7603b766b1070ac915e84de4cf40a29add95e8fab676783d9353f9->enter($__internal_67a2d819dc7603b766b1070ac915e84de4cf40a29add95e8fab676783d9353f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67a2d819dc7603b766b1070ac915e84de4cf40a29add95e8fab676783d9353f9->leave($__internal_67a2d819dc7603b766b1070ac915e84de4cf40a29add95e8fab676783d9353f9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_def08d42535066da70f078b74d18ec52d5fef9050879ee8c2fc8af5f5a7055df = $this->env->getExtension("native_profiler");
        $__internal_def08d42535066da70f078b74d18ec52d5fef9050879ee8c2fc8af5f5a7055df->enter($__internal_def08d42535066da70f078b74d18ec52d5fef9050879ee8c2fc8af5f5a7055df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_def08d42535066da70f078b74d18ec52d5fef9050879ee8c2fc8af5f5a7055df->leave($__internal_def08d42535066da70f078b74d18ec52d5fef9050879ee8c2fc8af5f5a7055df_prof);

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
