<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a68c2b58d2abb85a6ac70f5fda3b1ec34cd0ed57b34ee6d7df1118ef3eca3954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_21a41058488fbc69f2a5e5584be8f957d5b8f9541d7e6f65250b78ab9ce2babc = $this->env->getExtension("native_profiler");
        $__internal_21a41058488fbc69f2a5e5584be8f957d5b8f9541d7e6f65250b78ab9ce2babc->enter($__internal_21a41058488fbc69f2a5e5584be8f957d5b8f9541d7e6f65250b78ab9ce2babc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21a41058488fbc69f2a5e5584be8f957d5b8f9541d7e6f65250b78ab9ce2babc->leave($__internal_21a41058488fbc69f2a5e5584be8f957d5b8f9541d7e6f65250b78ab9ce2babc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4cc8e7b20a6320aca1af87816939bc5ca983977de1990a78cfb691b9b9026b44 = $this->env->getExtension("native_profiler");
        $__internal_4cc8e7b20a6320aca1af87816939bc5ca983977de1990a78cfb691b9b9026b44->enter($__internal_4cc8e7b20a6320aca1af87816939bc5ca983977de1990a78cfb691b9b9026b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_4cc8e7b20a6320aca1af87816939bc5ca983977de1990a78cfb691b9b9026b44->leave($__internal_4cc8e7b20a6320aca1af87816939bc5ca983977de1990a78cfb691b9b9026b44_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
