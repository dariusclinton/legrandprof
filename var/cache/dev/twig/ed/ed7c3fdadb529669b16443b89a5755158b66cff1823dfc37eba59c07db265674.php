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
        $__internal_de3b830058a1a9d7f421f97a348f8d3544edc951206099caad16150ba31e397b = $this->env->getExtension("native_profiler");
        $__internal_de3b830058a1a9d7f421f97a348f8d3544edc951206099caad16150ba31e397b->enter($__internal_de3b830058a1a9d7f421f97a348f8d3544edc951206099caad16150ba31e397b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de3b830058a1a9d7f421f97a348f8d3544edc951206099caad16150ba31e397b->leave($__internal_de3b830058a1a9d7f421f97a348f8d3544edc951206099caad16150ba31e397b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b042d6cc76b7300793b1953ad25c45bb576d4e2c840a5e4b62c72f1c73d6292 = $this->env->getExtension("native_profiler");
        $__internal_1b042d6cc76b7300793b1953ad25c45bb576d4e2c840a5e4b62c72f1c73d6292->enter($__internal_1b042d6cc76b7300793b1953ad25c45bb576d4e2c840a5e4b62c72f1c73d6292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1b042d6cc76b7300793b1953ad25c45bb576d4e2c840a5e4b62c72f1c73d6292->leave($__internal_1b042d6cc76b7300793b1953ad25c45bb576d4e2c840a5e4b62c72f1c73d6292_prof);

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
