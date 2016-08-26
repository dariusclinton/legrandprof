<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_dbd5d53f0cc3680a412195cd06fb3539dffb4db7a587f89e1e87b780209aa671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e53152b2f3e7dd94034a94fa777db95f3de5ec7c945b36b176a1fdcfd7dc9feb = $this->env->getExtension("native_profiler");
        $__internal_e53152b2f3e7dd94034a94fa777db95f3de5ec7c945b36b176a1fdcfd7dc9feb->enter($__internal_e53152b2f3e7dd94034a94fa777db95f3de5ec7c945b36b176a1fdcfd7dc9feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e53152b2f3e7dd94034a94fa777db95f3de5ec7c945b36b176a1fdcfd7dc9feb->leave($__internal_e53152b2f3e7dd94034a94fa777db95f3de5ec7c945b36b176a1fdcfd7dc9feb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd6efc186cc4cff5a83a96ff471b11684d52a1b46a6f56852fda868d68ad713e = $this->env->getExtension("native_profiler");
        $__internal_cd6efc186cc4cff5a83a96ff471b11684d52a1b46a6f56852fda868d68ad713e->enter($__internal_cd6efc186cc4cff5a83a96ff471b11684d52a1b46a6f56852fda868d68ad713e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_cd6efc186cc4cff5a83a96ff471b11684d52a1b46a6f56852fda868d68ad713e->leave($__internal_cd6efc186cc4cff5a83a96ff471b11684d52a1b46a6f56852fda868d68ad713e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
