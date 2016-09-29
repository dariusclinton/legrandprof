<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_9e738a5cdb0f3384d6e7280cfe3700f2096f9421318985dea485cb3eefbd5728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_d6b0707bfcbc5e38c888833df082431ad6276354e76fe1872b198daee82014c4 = $this->env->getExtension("native_profiler");
        $__internal_d6b0707bfcbc5e38c888833df082431ad6276354e76fe1872b198daee82014c4->enter($__internal_d6b0707bfcbc5e38c888833df082431ad6276354e76fe1872b198daee82014c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b0707bfcbc5e38c888833df082431ad6276354e76fe1872b198daee82014c4->leave($__internal_d6b0707bfcbc5e38c888833df082431ad6276354e76fe1872b198daee82014c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1f6de3388a938d83b09ece65fb175a0f7a9245806ab46fd8d230ef14a8c0cb0 = $this->env->getExtension("native_profiler");
        $__internal_a1f6de3388a938d83b09ece65fb175a0f7a9245806ab46fd8d230ef14a8c0cb0->enter($__internal_a1f6de3388a938d83b09ece65fb175a0f7a9245806ab46fd8d230ef14a8c0cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a1f6de3388a938d83b09ece65fb175a0f7a9245806ab46fd8d230ef14a8c0cb0->leave($__internal_a1f6de3388a938d83b09ece65fb175a0f7a9245806ab46fd8d230ef14a8c0cb0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
