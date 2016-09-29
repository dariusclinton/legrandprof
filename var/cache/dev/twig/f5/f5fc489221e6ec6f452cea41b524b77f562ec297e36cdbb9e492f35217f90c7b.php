<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c569f9891ea703df050261c3cdba45df7a6efbb1520c9e6f384a471cf4a82140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_111977382139cd872f1a7be89a0eff86b8359971e364f2220d242514a9cc4f91 = $this->env->getExtension("native_profiler");
        $__internal_111977382139cd872f1a7be89a0eff86b8359971e364f2220d242514a9cc4f91->enter($__internal_111977382139cd872f1a7be89a0eff86b8359971e364f2220d242514a9cc4f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_111977382139cd872f1a7be89a0eff86b8359971e364f2220d242514a9cc4f91->leave($__internal_111977382139cd872f1a7be89a0eff86b8359971e364f2220d242514a9cc4f91_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6023823006c84073dd32961529bf7881f28712ffe16d4e81148b397d82588215 = $this->env->getExtension("native_profiler");
        $__internal_6023823006c84073dd32961529bf7881f28712ffe16d4e81148b397d82588215->enter($__internal_6023823006c84073dd32961529bf7881f28712ffe16d4e81148b397d82588215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_6023823006c84073dd32961529bf7881f28712ffe16d4e81148b397d82588215->leave($__internal_6023823006c84073dd32961529bf7881f28712ffe16d4e81148b397d82588215_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
