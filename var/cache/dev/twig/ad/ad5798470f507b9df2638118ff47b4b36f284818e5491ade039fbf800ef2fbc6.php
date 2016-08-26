<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_ec52b5077b7639cdefe61788cacbf62c3f44462d53284020fa171ffdab3e79ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_b8d7fe52b237d67298f577b567483c14040b1a1736f66b632c121695019e90d8 = $this->env->getExtension("native_profiler");
        $__internal_b8d7fe52b237d67298f577b567483c14040b1a1736f66b632c121695019e90d8->enter($__internal_b8d7fe52b237d67298f577b567483c14040b1a1736f66b632c121695019e90d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8d7fe52b237d67298f577b567483c14040b1a1736f66b632c121695019e90d8->leave($__internal_b8d7fe52b237d67298f577b567483c14040b1a1736f66b632c121695019e90d8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_567d118d4e1e6edab9ce82f32ecca56cfda06a65803e9213f9cb94bfde6c2073 = $this->env->getExtension("native_profiler");
        $__internal_567d118d4e1e6edab9ce82f32ecca56cfda06a65803e9213f9cb94bfde6c2073->enter($__internal_567d118d4e1e6edab9ce82f32ecca56cfda06a65803e9213f9cb94bfde6c2073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_567d118d4e1e6edab9ce82f32ecca56cfda06a65803e9213f9cb94bfde6c2073->leave($__internal_567d118d4e1e6edab9ce82f32ecca56cfda06a65803e9213f9cb94bfde6c2073_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
