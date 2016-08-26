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
        $__internal_ee8b80cd5ff61c11cbe0405bad6e8b92ad6c381fd6f5020d4c5d9f2831be1baf = $this->env->getExtension("native_profiler");
        $__internal_ee8b80cd5ff61c11cbe0405bad6e8b92ad6c381fd6f5020d4c5d9f2831be1baf->enter($__internal_ee8b80cd5ff61c11cbe0405bad6e8b92ad6c381fd6f5020d4c5d9f2831be1baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee8b80cd5ff61c11cbe0405bad6e8b92ad6c381fd6f5020d4c5d9f2831be1baf->leave($__internal_ee8b80cd5ff61c11cbe0405bad6e8b92ad6c381fd6f5020d4c5d9f2831be1baf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ddc06b0286da88c90b14a8608286ee30188bbf7ad6d82d6c83c97cbe8b9907e = $this->env->getExtension("native_profiler");
        $__internal_6ddc06b0286da88c90b14a8608286ee30188bbf7ad6d82d6c83c97cbe8b9907e->enter($__internal_6ddc06b0286da88c90b14a8608286ee30188bbf7ad6d82d6c83c97cbe8b9907e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_6ddc06b0286da88c90b14a8608286ee30188bbf7ad6d82d6c83c97cbe8b9907e->leave($__internal_6ddc06b0286da88c90b14a8608286ee30188bbf7ad6d82d6c83c97cbe8b9907e_prof);

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
