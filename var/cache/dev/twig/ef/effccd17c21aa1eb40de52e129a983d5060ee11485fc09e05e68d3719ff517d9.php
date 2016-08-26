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
        $__internal_f8a9833cbb1199a87bc66a30a598c6f8abbef0d92a19f68bcd0d1a4151db95fc = $this->env->getExtension("native_profiler");
        $__internal_f8a9833cbb1199a87bc66a30a598c6f8abbef0d92a19f68bcd0d1a4151db95fc->enter($__internal_f8a9833cbb1199a87bc66a30a598c6f8abbef0d92a19f68bcd0d1a4151db95fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a9833cbb1199a87bc66a30a598c6f8abbef0d92a19f68bcd0d1a4151db95fc->leave($__internal_f8a9833cbb1199a87bc66a30a598c6f8abbef0d92a19f68bcd0d1a4151db95fc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e518f1c5bae47534b1a6fbc2e6c0d6df7af54eacceaf41d3d9b5f629931aa30 = $this->env->getExtension("native_profiler");
        $__internal_4e518f1c5bae47534b1a6fbc2e6c0d6df7af54eacceaf41d3d9b5f629931aa30->enter($__internal_4e518f1c5bae47534b1a6fbc2e6c0d6df7af54eacceaf41d3d9b5f629931aa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_4e518f1c5bae47534b1a6fbc2e6c0d6df7af54eacceaf41d3d9b5f629931aa30->leave($__internal_4e518f1c5bae47534b1a6fbc2e6c0d6df7af54eacceaf41d3d9b5f629931aa30_prof);

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
