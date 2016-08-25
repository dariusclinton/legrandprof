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
        $__internal_fccebe4613dac878ac4fca3e0998d8dd7025d6c7bf568b43109d37ce44b64b18 = $this->env->getExtension("native_profiler");
        $__internal_fccebe4613dac878ac4fca3e0998d8dd7025d6c7bf568b43109d37ce44b64b18->enter($__internal_fccebe4613dac878ac4fca3e0998d8dd7025d6c7bf568b43109d37ce44b64b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fccebe4613dac878ac4fca3e0998d8dd7025d6c7bf568b43109d37ce44b64b18->leave($__internal_fccebe4613dac878ac4fca3e0998d8dd7025d6c7bf568b43109d37ce44b64b18_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37d7b5d526105d28c3f0a4c8ad980707b6936117af1cce96aa0d46ad38c71a1a = $this->env->getExtension("native_profiler");
        $__internal_37d7b5d526105d28c3f0a4c8ad980707b6936117af1cce96aa0d46ad38c71a1a->enter($__internal_37d7b5d526105d28c3f0a4c8ad980707b6936117af1cce96aa0d46ad38c71a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_37d7b5d526105d28c3f0a4c8ad980707b6936117af1cce96aa0d46ad38c71a1a->leave($__internal_37d7b5d526105d28c3f0a4c8ad980707b6936117af1cce96aa0d46ad38c71a1a_prof);

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
