<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_8b84f0700c87a209d9b14409797815b33132862e9bdb6b9ce0e384f9eefb7840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d844c39945f77941e28d0773d062e1f2e06cfde91671bf2f9180fbd730f6af60 = $this->env->getExtension("native_profiler");
        $__internal_d844c39945f77941e28d0773d062e1f2e06cfde91671bf2f9180fbd730f6af60->enter($__internal_d844c39945f77941e28d0773d062e1f2e06cfde91671bf2f9180fbd730f6af60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d844c39945f77941e28d0773d062e1f2e06cfde91671bf2f9180fbd730f6af60->leave($__internal_d844c39945f77941e28d0773d062e1f2e06cfde91671bf2f9180fbd730f6af60_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b935cb8101bbe8bfbd58dfa784f20006b422112fb08552c45bb13a8a224faed4 = $this->env->getExtension("native_profiler");
        $__internal_b935cb8101bbe8bfbd58dfa784f20006b422112fb08552c45bb13a8a224faed4->enter($__internal_b935cb8101bbe8bfbd58dfa784f20006b422112fb08552c45bb13a8a224faed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b935cb8101bbe8bfbd58dfa784f20006b422112fb08552c45bb13a8a224faed4->leave($__internal_b935cb8101bbe8bfbd58dfa784f20006b422112fb08552c45bb13a8a224faed4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
