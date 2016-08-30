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
        $__internal_0ce26793fca9d11f4dc8c2f4a62780626905f7c54d9b751462d58d2d2c34a0d1 = $this->env->getExtension("native_profiler");
        $__internal_0ce26793fca9d11f4dc8c2f4a62780626905f7c54d9b751462d58d2d2c34a0d1->enter($__internal_0ce26793fca9d11f4dc8c2f4a62780626905f7c54d9b751462d58d2d2c34a0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ce26793fca9d11f4dc8c2f4a62780626905f7c54d9b751462d58d2d2c34a0d1->leave($__internal_0ce26793fca9d11f4dc8c2f4a62780626905f7c54d9b751462d58d2d2c34a0d1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a6e08d422f4eae43cc1721a16445a5e81e7464d06c5737c16fe8499f458dbb6 = $this->env->getExtension("native_profiler");
        $__internal_3a6e08d422f4eae43cc1721a16445a5e81e7464d06c5737c16fe8499f458dbb6->enter($__internal_3a6e08d422f4eae43cc1721a16445a5e81e7464d06c5737c16fe8499f458dbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_3a6e08d422f4eae43cc1721a16445a5e81e7464d06c5737c16fe8499f458dbb6->leave($__internal_3a6e08d422f4eae43cc1721a16445a5e81e7464d06c5737c16fe8499f458dbb6_prof);

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
