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
        $__internal_ef47fe1d7f6571f47410048547d4a269d1f864d965e1dbe54fc71391d80df69a = $this->env->getExtension("native_profiler");
        $__internal_ef47fe1d7f6571f47410048547d4a269d1f864d965e1dbe54fc71391d80df69a->enter($__internal_ef47fe1d7f6571f47410048547d4a269d1f864d965e1dbe54fc71391d80df69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef47fe1d7f6571f47410048547d4a269d1f864d965e1dbe54fc71391d80df69a->leave($__internal_ef47fe1d7f6571f47410048547d4a269d1f864d965e1dbe54fc71391d80df69a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6677f81398ae83169fed4bd2cbafc7b8f070ba8c1745452d7912feebc92e55c = $this->env->getExtension("native_profiler");
        $__internal_c6677f81398ae83169fed4bd2cbafc7b8f070ba8c1745452d7912feebc92e55c->enter($__internal_c6677f81398ae83169fed4bd2cbafc7b8f070ba8c1745452d7912feebc92e55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_c6677f81398ae83169fed4bd2cbafc7b8f070ba8c1745452d7912feebc92e55c->leave($__internal_c6677f81398ae83169fed4bd2cbafc7b8f070ba8c1745452d7912feebc92e55c_prof);

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
