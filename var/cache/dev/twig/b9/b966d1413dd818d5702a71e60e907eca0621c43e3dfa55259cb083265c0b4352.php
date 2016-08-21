<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_76424bd045e9bf1a54203252e1f6641525ea7cb92f51655ae854943cac288d79 extends Twig_Template
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
        $__internal_0f87a5979e9159ec1006cda0851279861322adcdf69ce7c3f7462ddba613ed71 = $this->env->getExtension("native_profiler");
        $__internal_0f87a5979e9159ec1006cda0851279861322adcdf69ce7c3f7462ddba613ed71->enter($__internal_0f87a5979e9159ec1006cda0851279861322adcdf69ce7c3f7462ddba613ed71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f87a5979e9159ec1006cda0851279861322adcdf69ce7c3f7462ddba613ed71->leave($__internal_0f87a5979e9159ec1006cda0851279861322adcdf69ce7c3f7462ddba613ed71_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b817258cc4f196255dda4d334232d17c7ac123a48327bc25b95e99691b83a6f = $this->env->getExtension("native_profiler");
        $__internal_3b817258cc4f196255dda4d334232d17c7ac123a48327bc25b95e99691b83a6f->enter($__internal_3b817258cc4f196255dda4d334232d17c7ac123a48327bc25b95e99691b83a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_3b817258cc4f196255dda4d334232d17c7ac123a48327bc25b95e99691b83a6f->leave($__internal_3b817258cc4f196255dda4d334232d17c7ac123a48327bc25b95e99691b83a6f_prof);

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
