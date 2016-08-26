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
        $__internal_4eb90493c1cf721f2cab274f939942ee9e82a0ec9d6a802158b29e2ec82b9c17 = $this->env->getExtension("native_profiler");
        $__internal_4eb90493c1cf721f2cab274f939942ee9e82a0ec9d6a802158b29e2ec82b9c17->enter($__internal_4eb90493c1cf721f2cab274f939942ee9e82a0ec9d6a802158b29e2ec82b9c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eb90493c1cf721f2cab274f939942ee9e82a0ec9d6a802158b29e2ec82b9c17->leave($__internal_4eb90493c1cf721f2cab274f939942ee9e82a0ec9d6a802158b29e2ec82b9c17_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_db753cc79c0558481ffd30166282f0f7ccc544872004341983939834191c22bc = $this->env->getExtension("native_profiler");
        $__internal_db753cc79c0558481ffd30166282f0f7ccc544872004341983939834191c22bc->enter($__internal_db753cc79c0558481ffd30166282f0f7ccc544872004341983939834191c22bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_db753cc79c0558481ffd30166282f0f7ccc544872004341983939834191c22bc->leave($__internal_db753cc79c0558481ffd30166282f0f7ccc544872004341983939834191c22bc_prof);

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
