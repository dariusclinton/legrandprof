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
        $__internal_32716f3569378853af499251169cf601baf6ba82865e51db585b13562e3735fc = $this->env->getExtension("native_profiler");
        $__internal_32716f3569378853af499251169cf601baf6ba82865e51db585b13562e3735fc->enter($__internal_32716f3569378853af499251169cf601baf6ba82865e51db585b13562e3735fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32716f3569378853af499251169cf601baf6ba82865e51db585b13562e3735fc->leave($__internal_32716f3569378853af499251169cf601baf6ba82865e51db585b13562e3735fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b394c68618a4a0a1aeaef7240e2706df30a72a25b80da5c2e2a1d48ac7c0a541 = $this->env->getExtension("native_profiler");
        $__internal_b394c68618a4a0a1aeaef7240e2706df30a72a25b80da5c2e2a1d48ac7c0a541->enter($__internal_b394c68618a4a0a1aeaef7240e2706df30a72a25b80da5c2e2a1d48ac7c0a541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_b394c68618a4a0a1aeaef7240e2706df30a72a25b80da5c2e2a1d48ac7c0a541->leave($__internal_b394c68618a4a0a1aeaef7240e2706df30a72a25b80da5c2e2a1d48ac7c0a541_prof);

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
