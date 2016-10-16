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
        $__internal_63f4c0d9343fde991023f25c8b088d60fb7d11b4e8969a7cbb3a2f52e4fa7c98 = $this->env->getExtension("native_profiler");
        $__internal_63f4c0d9343fde991023f25c8b088d60fb7d11b4e8969a7cbb3a2f52e4fa7c98->enter($__internal_63f4c0d9343fde991023f25c8b088d60fb7d11b4e8969a7cbb3a2f52e4fa7c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63f4c0d9343fde991023f25c8b088d60fb7d11b4e8969a7cbb3a2f52e4fa7c98->leave($__internal_63f4c0d9343fde991023f25c8b088d60fb7d11b4e8969a7cbb3a2f52e4fa7c98_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6c1fb8aa1928685fdf2b19e216dc15c728ad985726f9dd9834a74d0217714c9 = $this->env->getExtension("native_profiler");
        $__internal_c6c1fb8aa1928685fdf2b19e216dc15c728ad985726f9dd9834a74d0217714c9->enter($__internal_c6c1fb8aa1928685fdf2b19e216dc15c728ad985726f9dd9834a74d0217714c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c6c1fb8aa1928685fdf2b19e216dc15c728ad985726f9dd9834a74d0217714c9->leave($__internal_c6c1fb8aa1928685fdf2b19e216dc15c728ad985726f9dd9834a74d0217714c9_prof);

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
