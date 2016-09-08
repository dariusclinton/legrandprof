<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_d8476ffaff311cac05480954028647d69a878986b7f77f43ea02fe43d90920dc extends Twig_Template
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
        $__internal_a68c80eddf6f8a6ae8a2995c52efeae49b493e0b42b522b4d9fe159b4289d00f = $this->env->getExtension("native_profiler");
        $__internal_a68c80eddf6f8a6ae8a2995c52efeae49b493e0b42b522b4d9fe159b4289d00f->enter($__internal_a68c80eddf6f8a6ae8a2995c52efeae49b493e0b42b522b4d9fe159b4289d00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a68c80eddf6f8a6ae8a2995c52efeae49b493e0b42b522b4d9fe159b4289d00f->leave($__internal_a68c80eddf6f8a6ae8a2995c52efeae49b493e0b42b522b4d9fe159b4289d00f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba3c79a90b6d6c85c86e76dcf96679961bbac49c394b0f864741ac023145ba02 = $this->env->getExtension("native_profiler");
        $__internal_ba3c79a90b6d6c85c86e76dcf96679961bbac49c394b0f864741ac023145ba02->enter($__internal_ba3c79a90b6d6c85c86e76dcf96679961bbac49c394b0f864741ac023145ba02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_ba3c79a90b6d6c85c86e76dcf96679961bbac49c394b0f864741ac023145ba02->leave($__internal_ba3c79a90b6d6c85c86e76dcf96679961bbac49c394b0f864741ac023145ba02_prof);

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
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
