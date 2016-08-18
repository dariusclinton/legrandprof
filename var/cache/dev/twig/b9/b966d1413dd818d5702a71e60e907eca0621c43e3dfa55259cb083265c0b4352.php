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
        $__internal_52fd394d2a57515c9811db4bffa45393deb91cb879ee8aeafd5f986083cf08ee = $this->env->getExtension("native_profiler");
        $__internal_52fd394d2a57515c9811db4bffa45393deb91cb879ee8aeafd5f986083cf08ee->enter($__internal_52fd394d2a57515c9811db4bffa45393deb91cb879ee8aeafd5f986083cf08ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52fd394d2a57515c9811db4bffa45393deb91cb879ee8aeafd5f986083cf08ee->leave($__internal_52fd394d2a57515c9811db4bffa45393deb91cb879ee8aeafd5f986083cf08ee_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e05df47c3c140b824fced0c8ac7959094991c2f2968a1bf467ec01790e23822 = $this->env->getExtension("native_profiler");
        $__internal_1e05df47c3c140b824fced0c8ac7959094991c2f2968a1bf467ec01790e23822->enter($__internal_1e05df47c3c140b824fced0c8ac7959094991c2f2968a1bf467ec01790e23822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_1e05df47c3c140b824fced0c8ac7959094991c2f2968a1bf467ec01790e23822->leave($__internal_1e05df47c3c140b824fced0c8ac7959094991c2f2968a1bf467ec01790e23822_prof);

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
