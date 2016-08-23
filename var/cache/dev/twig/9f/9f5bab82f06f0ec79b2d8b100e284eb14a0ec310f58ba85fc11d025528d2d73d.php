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
        $__internal_3c377b91344bb80716447743600e694d935af4446ade7f9b8e5426a9d8e10a63 = $this->env->getExtension("native_profiler");
        $__internal_3c377b91344bb80716447743600e694d935af4446ade7f9b8e5426a9d8e10a63->enter($__internal_3c377b91344bb80716447743600e694d935af4446ade7f9b8e5426a9d8e10a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c377b91344bb80716447743600e694d935af4446ade7f9b8e5426a9d8e10a63->leave($__internal_3c377b91344bb80716447743600e694d935af4446ade7f9b8e5426a9d8e10a63_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a8d855c564db1cb936c6f249ee40f190cf5d3f59948a75d9024b523ed9441ef = $this->env->getExtension("native_profiler");
        $__internal_6a8d855c564db1cb936c6f249ee40f190cf5d3f59948a75d9024b523ed9441ef->enter($__internal_6a8d855c564db1cb936c6f249ee40f190cf5d3f59948a75d9024b523ed9441ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6a8d855c564db1cb936c6f249ee40f190cf5d3f59948a75d9024b523ed9441ef->leave($__internal_6a8d855c564db1cb936c6f249ee40f190cf5d3f59948a75d9024b523ed9441ef_prof);

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
