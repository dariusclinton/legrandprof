<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_4d7378bbf6b1ae594a260ee0ca57afbaea467696fdaf24151374392056a69f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_ce8903a72f3139f0def939136a674f396f5231c78ed76e58ce8f3218ccbd03e7 = $this->env->getExtension("native_profiler");
        $__internal_ce8903a72f3139f0def939136a674f396f5231c78ed76e58ce8f3218ccbd03e7->enter($__internal_ce8903a72f3139f0def939136a674f396f5231c78ed76e58ce8f3218ccbd03e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce8903a72f3139f0def939136a674f396f5231c78ed76e58ce8f3218ccbd03e7->leave($__internal_ce8903a72f3139f0def939136a674f396f5231c78ed76e58ce8f3218ccbd03e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f51d27f10c45f95b0f09ee57ae12ceeaad6858f1267ae29fccb7418e4c9a2cf = $this->env->getExtension("native_profiler");
        $__internal_5f51d27f10c45f95b0f09ee57ae12ceeaad6858f1267ae29fccb7418e4c9a2cf->enter($__internal_5f51d27f10c45f95b0f09ee57ae12ceeaad6858f1267ae29fccb7418e4c9a2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_5f51d27f10c45f95b0f09ee57ae12ceeaad6858f1267ae29fccb7418e4c9a2cf->leave($__internal_5f51d27f10c45f95b0f09ee57ae12ceeaad6858f1267ae29fccb7418e4c9a2cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
