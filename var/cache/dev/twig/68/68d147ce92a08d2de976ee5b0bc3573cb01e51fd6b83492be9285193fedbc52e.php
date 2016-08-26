<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4ab49bb795b9cf59c836d91c2c3dbbd61afe0342bba06ccaa56bf3d136d119fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8124789d206a633c856197c26de470afbb0f2cf34829663526e5515afdb78750 = $this->env->getExtension("native_profiler");
        $__internal_8124789d206a633c856197c26de470afbb0f2cf34829663526e5515afdb78750->enter($__internal_8124789d206a633c856197c26de470afbb0f2cf34829663526e5515afdb78750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8124789d206a633c856197c26de470afbb0f2cf34829663526e5515afdb78750->leave($__internal_8124789d206a633c856197c26de470afbb0f2cf34829663526e5515afdb78750_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_533093cafe405ee7df6a803c76d2ec00ab2587f3d98eb1964dc9e94976e2d3c6 = $this->env->getExtension("native_profiler");
        $__internal_533093cafe405ee7df6a803c76d2ec00ab2587f3d98eb1964dc9e94976e2d3c6->enter($__internal_533093cafe405ee7df6a803c76d2ec00ab2587f3d98eb1964dc9e94976e2d3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_533093cafe405ee7df6a803c76d2ec00ab2587f3d98eb1964dc9e94976e2d3c6->leave($__internal_533093cafe405ee7df6a803c76d2ec00ab2587f3d98eb1964dc9e94976e2d3c6_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32752c92afa505e844f5a1251b5caaf9097aa8aaca79cd78c96c2990895b66af = $this->env->getExtension("native_profiler");
        $__internal_32752c92afa505e844f5a1251b5caaf9097aa8aaca79cd78c96c2990895b66af->enter($__internal_32752c92afa505e844f5a1251b5caaf9097aa8aaca79cd78c96c2990895b66af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_32752c92afa505e844f5a1251b5caaf9097aa8aaca79cd78c96c2990895b66af->leave($__internal_32752c92afa505e844f5a1251b5caaf9097aa8aaca79cd78c96c2990895b66af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/* */
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
