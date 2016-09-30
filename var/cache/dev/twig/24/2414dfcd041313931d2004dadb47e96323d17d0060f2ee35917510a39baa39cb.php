<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_0cd8e319d39a0b321c36fe24ad3c80f503ff524a951f1e5cbb6d7e2bcaf40e17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d227e1c487db42b95c56511160cf059668a3cc02bfce5b4455f3acc7071e40f1 = $this->env->getExtension("native_profiler");
        $__internal_d227e1c487db42b95c56511160cf059668a3cc02bfce5b4455f3acc7071e40f1->enter($__internal_d227e1c487db42b95c56511160cf059668a3cc02bfce5b4455f3acc7071e40f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d227e1c487db42b95c56511160cf059668a3cc02bfce5b4455f3acc7071e40f1->leave($__internal_d227e1c487db42b95c56511160cf059668a3cc02bfce5b4455f3acc7071e40f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_602bea5a0dc47e198fabeeafa0ced03f58cc11356909f48b816f85e773fe1f8a = $this->env->getExtension("native_profiler");
        $__internal_602bea5a0dc47e198fabeeafa0ced03f58cc11356909f48b816f85e773fe1f8a->enter($__internal_602bea5a0dc47e198fabeeafa0ced03f58cc11356909f48b816f85e773fe1f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_602bea5a0dc47e198fabeeafa0ced03f58cc11356909f48b816f85e773fe1f8a->leave($__internal_602bea5a0dc47e198fabeeafa0ced03f58cc11356909f48b816f85e773fe1f8a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
