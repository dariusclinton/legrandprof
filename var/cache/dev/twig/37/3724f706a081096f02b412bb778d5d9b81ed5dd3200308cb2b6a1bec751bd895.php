<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_addc6a791de2974e7aa145d72799d3422f9b4b4248c4631977d654914e2cae32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_d95ad28d21cd8135fb5402f4723c411d19fa3670a003d713fea656d847f7b2c4 = $this->env->getExtension("native_profiler");
        $__internal_d95ad28d21cd8135fb5402f4723c411d19fa3670a003d713fea656d847f7b2c4->enter($__internal_d95ad28d21cd8135fb5402f4723c411d19fa3670a003d713fea656d847f7b2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d95ad28d21cd8135fb5402f4723c411d19fa3670a003d713fea656d847f7b2c4->leave($__internal_d95ad28d21cd8135fb5402f4723c411d19fa3670a003d713fea656d847f7b2c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c14a858395ea932333c4b92fc8a2b07098fe02b6a6062174186045f4e78b656c = $this->env->getExtension("native_profiler");
        $__internal_c14a858395ea932333c4b92fc8a2b07098fe02b6a6062174186045f4e78b656c->enter($__internal_c14a858395ea932333c4b92fc8a2b07098fe02b6a6062174186045f4e78b656c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_c14a858395ea932333c4b92fc8a2b07098fe02b6a6062174186045f4e78b656c->leave($__internal_c14a858395ea932333c4b92fc8a2b07098fe02b6a6062174186045f4e78b656c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
