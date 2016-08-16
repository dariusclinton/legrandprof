<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2e046a4820dea23c8f2d0ee89b7fdeca3fb30856beac520f86583e1fb04b2c90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_925619d2253310ade42f21a67cfcc74554acee465d3e0e67200372167e0dbc4b = $this->env->getExtension("native_profiler");
        $__internal_925619d2253310ade42f21a67cfcc74554acee465d3e0e67200372167e0dbc4b->enter($__internal_925619d2253310ade42f21a67cfcc74554acee465d3e0e67200372167e0dbc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925619d2253310ade42f21a67cfcc74554acee465d3e0e67200372167e0dbc4b->leave($__internal_925619d2253310ade42f21a67cfcc74554acee465d3e0e67200372167e0dbc4b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2df669b41fea5606a997c872c0285aa484136219d305d64ec1054fdc2dbf492 = $this->env->getExtension("native_profiler");
        $__internal_a2df669b41fea5606a997c872c0285aa484136219d305d64ec1054fdc2dbf492->enter($__internal_a2df669b41fea5606a997c872c0285aa484136219d305d64ec1054fdc2dbf492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a2df669b41fea5606a997c872c0285aa484136219d305d64ec1054fdc2dbf492->leave($__internal_a2df669b41fea5606a997c872c0285aa484136219d305d64ec1054fdc2dbf492_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
