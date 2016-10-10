<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_de3a5165fa096a95801d1d2b6414f309825b160f69891d7d9a7e4ad9595fd2e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_98fdbcb7f0436ce0b76690402a423c04413aa6c99356dca0abbad012b7a56191 = $this->env->getExtension("native_profiler");
        $__internal_98fdbcb7f0436ce0b76690402a423c04413aa6c99356dca0abbad012b7a56191->enter($__internal_98fdbcb7f0436ce0b76690402a423c04413aa6c99356dca0abbad012b7a56191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98fdbcb7f0436ce0b76690402a423c04413aa6c99356dca0abbad012b7a56191->leave($__internal_98fdbcb7f0436ce0b76690402a423c04413aa6c99356dca0abbad012b7a56191_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e553dad2717c976698c4aa395968e5994c5397917eb8b688320540bfdd9c3674 = $this->env->getExtension("native_profiler");
        $__internal_e553dad2717c976698c4aa395968e5994c5397917eb8b688320540bfdd9c3674->enter($__internal_e553dad2717c976698c4aa395968e5994c5397917eb8b688320540bfdd9c3674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e553dad2717c976698c4aa395968e5994c5397917eb8b688320540bfdd9c3674->leave($__internal_e553dad2717c976698c4aa395968e5994c5397917eb8b688320540bfdd9c3674_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
";
    }
}
