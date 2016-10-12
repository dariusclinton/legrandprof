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
        $__internal_d6cdd99894a2820fd58cbde84dd1cbc344e789a711796ce3da5ad43264fc63f1 = $this->env->getExtension("native_profiler");
        $__internal_d6cdd99894a2820fd58cbde84dd1cbc344e789a711796ce3da5ad43264fc63f1->enter($__internal_d6cdd99894a2820fd58cbde84dd1cbc344e789a711796ce3da5ad43264fc63f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6cdd99894a2820fd58cbde84dd1cbc344e789a711796ce3da5ad43264fc63f1->leave($__internal_d6cdd99894a2820fd58cbde84dd1cbc344e789a711796ce3da5ad43264fc63f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ff1f67a411e4539a256dfb2d7057759c22548169d7725717f541a5883430404 = $this->env->getExtension("native_profiler");
        $__internal_4ff1f67a411e4539a256dfb2d7057759c22548169d7725717f541a5883430404->enter($__internal_4ff1f67a411e4539a256dfb2d7057759c22548169d7725717f541a5883430404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_4ff1f67a411e4539a256dfb2d7057759c22548169d7725717f541a5883430404->leave($__internal_4ff1f67a411e4539a256dfb2d7057759c22548169d7725717f541a5883430404_prof);

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
