<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a9726e6d020e42e487c531aea7c293bf9878ac3d55d1fba467f08e4b556d14a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_e79dd66e445effc63dd6fa69ede4b0e9e8c3f4349121ef1012f6a25629c8b431 = $this->env->getExtension("native_profiler");
        $__internal_e79dd66e445effc63dd6fa69ede4b0e9e8c3f4349121ef1012f6a25629c8b431->enter($__internal_e79dd66e445effc63dd6fa69ede4b0e9e8c3f4349121ef1012f6a25629c8b431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e79dd66e445effc63dd6fa69ede4b0e9e8c3f4349121ef1012f6a25629c8b431->leave($__internal_e79dd66e445effc63dd6fa69ede4b0e9e8c3f4349121ef1012f6a25629c8b431_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fb29e96fa85f19bd0115ed3fd6a133328245b1bfbf20d21c253eb768200697a = $this->env->getExtension("native_profiler");
        $__internal_8fb29e96fa85f19bd0115ed3fd6a133328245b1bfbf20d21c253eb768200697a->enter($__internal_8fb29e96fa85f19bd0115ed3fd6a133328245b1bfbf20d21c253eb768200697a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_8fb29e96fa85f19bd0115ed3fd6a133328245b1bfbf20d21c253eb768200697a->leave($__internal_8fb29e96fa85f19bd0115ed3fd6a133328245b1bfbf20d21c253eb768200697a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
