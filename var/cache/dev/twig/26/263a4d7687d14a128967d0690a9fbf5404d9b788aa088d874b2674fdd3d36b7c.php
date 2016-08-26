<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_77561ebfd065ae127418de65663460602243aa631c602c07b6aacb8bf31583d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_4d68c61ece0c3d0ac42141840bde1e17d7377f8c4fdf34d9b163e01f7cf20ce7 = $this->env->getExtension("native_profiler");
        $__internal_4d68c61ece0c3d0ac42141840bde1e17d7377f8c4fdf34d9b163e01f7cf20ce7->enter($__internal_4d68c61ece0c3d0ac42141840bde1e17d7377f8c4fdf34d9b163e01f7cf20ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d68c61ece0c3d0ac42141840bde1e17d7377f8c4fdf34d9b163e01f7cf20ce7->leave($__internal_4d68c61ece0c3d0ac42141840bde1e17d7377f8c4fdf34d9b163e01f7cf20ce7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb5b8a4ea8059a7e6d4f7cfcbac48306bc520de7ddd892463f9f229a1e96fb2f = $this->env->getExtension("native_profiler");
        $__internal_eb5b8a4ea8059a7e6d4f7cfcbac48306bc520de7ddd892463f9f229a1e96fb2f->enter($__internal_eb5b8a4ea8059a7e6d4f7cfcbac48306bc520de7ddd892463f9f229a1e96fb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_eb5b8a4ea8059a7e6d4f7cfcbac48306bc520de7ddd892463f9f229a1e96fb2f->leave($__internal_eb5b8a4ea8059a7e6d4f7cfcbac48306bc520de7ddd892463f9f229a1e96fb2f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
