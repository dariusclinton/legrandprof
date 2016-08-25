<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_be1e132bae8340ed2a0182bfd29fdc26ce89f6f4aa09f54257e84ea80981a725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_a5c1d68b8fcc98a90e9e3f267bd0774232f12d7f4a5a98c800121adf39a5b390 = $this->env->getExtension("native_profiler");
        $__internal_a5c1d68b8fcc98a90e9e3f267bd0774232f12d7f4a5a98c800121adf39a5b390->enter($__internal_a5c1d68b8fcc98a90e9e3f267bd0774232f12d7f4a5a98c800121adf39a5b390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5c1d68b8fcc98a90e9e3f267bd0774232f12d7f4a5a98c800121adf39a5b390->leave($__internal_a5c1d68b8fcc98a90e9e3f267bd0774232f12d7f4a5a98c800121adf39a5b390_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f764b54bfc4e78d9c6a927bb325a1a55f8d86701024553f0e89de81bb371a779 = $this->env->getExtension("native_profiler");
        $__internal_f764b54bfc4e78d9c6a927bb325a1a55f8d86701024553f0e89de81bb371a779->enter($__internal_f764b54bfc4e78d9c6a927bb325a1a55f8d86701024553f0e89de81bb371a779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f764b54bfc4e78d9c6a927bb325a1a55f8d86701024553f0e89de81bb371a779->leave($__internal_f764b54bfc4e78d9c6a927bb325a1a55f8d86701024553f0e89de81bb371a779_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
