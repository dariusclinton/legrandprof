<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2a00b1dac2c61a734ba3034bd7813c4ce86417a5f2788a98b4230a1dff6fda7a extends Twig_Template
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
        $__internal_02f8d0102a8d5750e3629365dc67dbfd7efdfe89192120f959fcd10f9e887868 = $this->env->getExtension("native_profiler");
        $__internal_02f8d0102a8d5750e3629365dc67dbfd7efdfe89192120f959fcd10f9e887868->enter($__internal_02f8d0102a8d5750e3629365dc67dbfd7efdfe89192120f959fcd10f9e887868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02f8d0102a8d5750e3629365dc67dbfd7efdfe89192120f959fcd10f9e887868->leave($__internal_02f8d0102a8d5750e3629365dc67dbfd7efdfe89192120f959fcd10f9e887868_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b371a248cb9f99a53f09f4da47143432c251fd404bc8a3dddaae0281603bf1df = $this->env->getExtension("native_profiler");
        $__internal_b371a248cb9f99a53f09f4da47143432c251fd404bc8a3dddaae0281603bf1df->enter($__internal_b371a248cb9f99a53f09f4da47143432c251fd404bc8a3dddaae0281603bf1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b371a248cb9f99a53f09f4da47143432c251fd404bc8a3dddaae0281603bf1df->leave($__internal_b371a248cb9f99a53f09f4da47143432c251fd404bc8a3dddaae0281603bf1df_prof);

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
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
