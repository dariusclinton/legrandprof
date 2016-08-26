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
        $__internal_5b6bd6cb17e3eb3e6f81f326d908c32806f38565eaf490ed07693cf20a55cce5 = $this->env->getExtension("native_profiler");
        $__internal_5b6bd6cb17e3eb3e6f81f326d908c32806f38565eaf490ed07693cf20a55cce5->enter($__internal_5b6bd6cb17e3eb3e6f81f326d908c32806f38565eaf490ed07693cf20a55cce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b6bd6cb17e3eb3e6f81f326d908c32806f38565eaf490ed07693cf20a55cce5->leave($__internal_5b6bd6cb17e3eb3e6f81f326d908c32806f38565eaf490ed07693cf20a55cce5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01a284cf96f3de4e991f9171c2db7340eef8b6ab0eb0a4f4d6f46d230280b066 = $this->env->getExtension("native_profiler");
        $__internal_01a284cf96f3de4e991f9171c2db7340eef8b6ab0eb0a4f4d6f46d230280b066->enter($__internal_01a284cf96f3de4e991f9171c2db7340eef8b6ab0eb0a4f4d6f46d230280b066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_01a284cf96f3de4e991f9171c2db7340eef8b6ab0eb0a4f4d6f46d230280b066->leave($__internal_01a284cf96f3de4e991f9171c2db7340eef8b6ab0eb0a4f4d6f46d230280b066_prof);

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
