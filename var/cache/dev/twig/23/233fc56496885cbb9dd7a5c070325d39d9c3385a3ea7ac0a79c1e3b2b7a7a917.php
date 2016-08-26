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
        $__internal_248cab485b587b1922445ff74908970adae2489dd6e8405f71d5515a54a0b301 = $this->env->getExtension("native_profiler");
        $__internal_248cab485b587b1922445ff74908970adae2489dd6e8405f71d5515a54a0b301->enter($__internal_248cab485b587b1922445ff74908970adae2489dd6e8405f71d5515a54a0b301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_248cab485b587b1922445ff74908970adae2489dd6e8405f71d5515a54a0b301->leave($__internal_248cab485b587b1922445ff74908970adae2489dd6e8405f71d5515a54a0b301_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_422ea1f46e05b9da6c5594c77643d27d580e14fff6dea3435cbf3fa8e04576e6 = $this->env->getExtension("native_profiler");
        $__internal_422ea1f46e05b9da6c5594c77643d27d580e14fff6dea3435cbf3fa8e04576e6->enter($__internal_422ea1f46e05b9da6c5594c77643d27d580e14fff6dea3435cbf3fa8e04576e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_422ea1f46e05b9da6c5594c77643d27d580e14fff6dea3435cbf3fa8e04576e6->leave($__internal_422ea1f46e05b9da6c5594c77643d27d580e14fff6dea3435cbf3fa8e04576e6_prof);

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
