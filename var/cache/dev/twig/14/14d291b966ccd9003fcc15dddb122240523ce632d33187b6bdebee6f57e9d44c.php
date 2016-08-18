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
        $__internal_a431fe744e4b35a380a88f8b564787a86986afff49a9846dceba9a8bef701d41 = $this->env->getExtension("native_profiler");
        $__internal_a431fe744e4b35a380a88f8b564787a86986afff49a9846dceba9a8bef701d41->enter($__internal_a431fe744e4b35a380a88f8b564787a86986afff49a9846dceba9a8bef701d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a431fe744e4b35a380a88f8b564787a86986afff49a9846dceba9a8bef701d41->leave($__internal_a431fe744e4b35a380a88f8b564787a86986afff49a9846dceba9a8bef701d41_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f415cf303dfb51d20f26abc486a9d2a415559fedcf4c15c61864b11575fcf8f = $this->env->getExtension("native_profiler");
        $__internal_7f415cf303dfb51d20f26abc486a9d2a415559fedcf4c15c61864b11575fcf8f->enter($__internal_7f415cf303dfb51d20f26abc486a9d2a415559fedcf4c15c61864b11575fcf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_7f415cf303dfb51d20f26abc486a9d2a415559fedcf4c15c61864b11575fcf8f->leave($__internal_7f415cf303dfb51d20f26abc486a9d2a415559fedcf4c15c61864b11575fcf8f_prof);

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
