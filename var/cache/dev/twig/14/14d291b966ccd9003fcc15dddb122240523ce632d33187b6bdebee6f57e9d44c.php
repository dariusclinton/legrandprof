<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_2bdbb70e2a1c877fa248404006573ab42dcbdadcf20918b56371727ae9018878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_63b0d6371fb2aacbff566ea114236b6cc84b86fad147b90c1083b052350f7c47 = $this->env->getExtension("native_profiler");
        $__internal_63b0d6371fb2aacbff566ea114236b6cc84b86fad147b90c1083b052350f7c47->enter($__internal_63b0d6371fb2aacbff566ea114236b6cc84b86fad147b90c1083b052350f7c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63b0d6371fb2aacbff566ea114236b6cc84b86fad147b90c1083b052350f7c47->leave($__internal_63b0d6371fb2aacbff566ea114236b6cc84b86fad147b90c1083b052350f7c47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe19c1cf400e94e1c2bc12ed9a3847952a1ed13487f45722dbc07c826dd9b413 = $this->env->getExtension("native_profiler");
        $__internal_fe19c1cf400e94e1c2bc12ed9a3847952a1ed13487f45722dbc07c826dd9b413->enter($__internal_fe19c1cf400e94e1c2bc12ed9a3847952a1ed13487f45722dbc07c826dd9b413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_fe19c1cf400e94e1c2bc12ed9a3847952a1ed13487f45722dbc07c826dd9b413->leave($__internal_fe19c1cf400e94e1c2bc12ed9a3847952a1ed13487f45722dbc07c826dd9b413_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
