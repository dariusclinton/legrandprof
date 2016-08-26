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
        $__internal_7ab1a08f29a0bd7a79d4e270269419a6bb3ee272e74d77e29be6142e6de40b48 = $this->env->getExtension("native_profiler");
        $__internal_7ab1a08f29a0bd7a79d4e270269419a6bb3ee272e74d77e29be6142e6de40b48->enter($__internal_7ab1a08f29a0bd7a79d4e270269419a6bb3ee272e74d77e29be6142e6de40b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ab1a08f29a0bd7a79d4e270269419a6bb3ee272e74d77e29be6142e6de40b48->leave($__internal_7ab1a08f29a0bd7a79d4e270269419a6bb3ee272e74d77e29be6142e6de40b48_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8314e51262f1d147e2c8123a97a56eb4a27ab1894ad6a300d7e44b43b4e1ba6c = $this->env->getExtension("native_profiler");
        $__internal_8314e51262f1d147e2c8123a97a56eb4a27ab1894ad6a300d7e44b43b4e1ba6c->enter($__internal_8314e51262f1d147e2c8123a97a56eb4a27ab1894ad6a300d7e44b43b4e1ba6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8314e51262f1d147e2c8123a97a56eb4a27ab1894ad6a300d7e44b43b4e1ba6c->leave($__internal_8314e51262f1d147e2c8123a97a56eb4a27ab1894ad6a300d7e44b43b4e1ba6c_prof);

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
