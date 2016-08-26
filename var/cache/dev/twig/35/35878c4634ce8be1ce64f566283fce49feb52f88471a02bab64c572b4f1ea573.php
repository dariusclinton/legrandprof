<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_bfa5b54c28ea6200577ac5882a0df94a75ed8cfb3033da8b9b18747505c20ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4f93415ee7e3901c8c63d8a898fd827cd3df468a8a18203642c36980094f60f = $this->env->getExtension("native_profiler");
        $__internal_a4f93415ee7e3901c8c63d8a898fd827cd3df468a8a18203642c36980094f60f->enter($__internal_a4f93415ee7e3901c8c63d8a898fd827cd3df468a8a18203642c36980094f60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4f93415ee7e3901c8c63d8a898fd827cd3df468a8a18203642c36980094f60f->leave($__internal_a4f93415ee7e3901c8c63d8a898fd827cd3df468a8a18203642c36980094f60f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2acd963140bbe52cb7bc8d00faa355e57b048a2559ff3f415ae3b9e744fc60d = $this->env->getExtension("native_profiler");
        $__internal_a2acd963140bbe52cb7bc8d00faa355e57b048a2559ff3f415ae3b9e744fc60d->enter($__internal_a2acd963140bbe52cb7bc8d00faa355e57b048a2559ff3f415ae3b9e744fc60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a2acd963140bbe52cb7bc8d00faa355e57b048a2559ff3f415ae3b9e744fc60d->leave($__internal_a2acd963140bbe52cb7bc8d00faa355e57b048a2559ff3f415ae3b9e744fc60d_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef5039803db6781f839940777f8bd7bf6ce4c0f4274be91c0e9ea474724e3dbc = $this->env->getExtension("native_profiler");
        $__internal_ef5039803db6781f839940777f8bd7bf6ce4c0f4274be91c0e9ea474724e3dbc->enter($__internal_ef5039803db6781f839940777f8bd7bf6ce4c0f4274be91c0e9ea474724e3dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_ef5039803db6781f839940777f8bd7bf6ce4c0f4274be91c0e9ea474724e3dbc->leave($__internal_ef5039803db6781f839940777f8bd7bf6ce4c0f4274be91c0e9ea474724e3dbc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  55 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ app.user.prenoms }} {{ app.user.nom }} - Edit profile - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
