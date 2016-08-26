<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2a00b1dac2c61a734ba3034bd7813c4ce86417a5f2788a98b4230a1dff6fda7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_aed0e6ef5a794c7e8046aaf4ff8b434ef08bdf65f996bfffbf6101425e1602cd = $this->env->getExtension("native_profiler");
        $__internal_aed0e6ef5a794c7e8046aaf4ff8b434ef08bdf65f996bfffbf6101425e1602cd->enter($__internal_aed0e6ef5a794c7e8046aaf4ff8b434ef08bdf65f996bfffbf6101425e1602cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aed0e6ef5a794c7e8046aaf4ff8b434ef08bdf65f996bfffbf6101425e1602cd->leave($__internal_aed0e6ef5a794c7e8046aaf4ff8b434ef08bdf65f996bfffbf6101425e1602cd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33f0952ef7cf594d68b21f5d6a02823d1f04d18eda7e265347c43139fb5c3de6 = $this->env->getExtension("native_profiler");
        $__internal_33f0952ef7cf594d68b21f5d6a02823d1f04d18eda7e265347c43139fb5c3de6->enter($__internal_33f0952ef7cf594d68b21f5d6a02823d1f04d18eda7e265347c43139fb5c3de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_33f0952ef7cf594d68b21f5d6a02823d1f04d18eda7e265347c43139fb5c3de6->leave($__internal_33f0952ef7cf594d68b21f5d6a02823d1f04d18eda7e265347c43139fb5c3de6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
