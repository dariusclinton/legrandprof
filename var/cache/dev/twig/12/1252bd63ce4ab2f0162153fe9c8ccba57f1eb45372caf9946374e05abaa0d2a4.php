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
        $__internal_f2162d4389faf9f400ce0ec664372f9c08064b5f5539f668e14d9937a7e3982e = $this->env->getExtension("native_profiler");
        $__internal_f2162d4389faf9f400ce0ec664372f9c08064b5f5539f668e14d9937a7e3982e->enter($__internal_f2162d4389faf9f400ce0ec664372f9c08064b5f5539f668e14d9937a7e3982e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2162d4389faf9f400ce0ec664372f9c08064b5f5539f668e14d9937a7e3982e->leave($__internal_f2162d4389faf9f400ce0ec664372f9c08064b5f5539f668e14d9937a7e3982e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74eaa8ed8f596574d5ff054e5643157f89836baffff8f7042371a1496639f5bf = $this->env->getExtension("native_profiler");
        $__internal_74eaa8ed8f596574d5ff054e5643157f89836baffff8f7042371a1496639f5bf->enter($__internal_74eaa8ed8f596574d5ff054e5643157f89836baffff8f7042371a1496639f5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_74eaa8ed8f596574d5ff054e5643157f89836baffff8f7042371a1496639f5bf->leave($__internal_74eaa8ed8f596574d5ff054e5643157f89836baffff8f7042371a1496639f5bf_prof);

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
