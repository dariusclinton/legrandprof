<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_9cd6a0d2c1a177223ec53ea3e095ff68876204abb4f4b4298a3f8729427d6f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_0fe3bf9d1c1bf74b02f872a675262a0cf44ff5780549b89907d0b69848d99611 = $this->env->getExtension("native_profiler");
        $__internal_0fe3bf9d1c1bf74b02f872a675262a0cf44ff5780549b89907d0b69848d99611->enter($__internal_0fe3bf9d1c1bf74b02f872a675262a0cf44ff5780549b89907d0b69848d99611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fe3bf9d1c1bf74b02f872a675262a0cf44ff5780549b89907d0b69848d99611->leave($__internal_0fe3bf9d1c1bf74b02f872a675262a0cf44ff5780549b89907d0b69848d99611_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb5d42fb12d4d712401ea116bfe9b08d8e5b963fdf625333a8ceec37f58472db = $this->env->getExtension("native_profiler");
        $__internal_fb5d42fb12d4d712401ea116bfe9b08d8e5b963fdf625333a8ceec37f58472db->enter($__internal_fb5d42fb12d4d712401ea116bfe9b08d8e5b963fdf625333a8ceec37f58472db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_fb5d42fb12d4d712401ea116bfe9b08d8e5b963fdf625333a8ceec37f58472db->leave($__internal_fb5d42fb12d4d712401ea116bfe9b08d8e5b963fdf625333a8ceec37f58472db_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
