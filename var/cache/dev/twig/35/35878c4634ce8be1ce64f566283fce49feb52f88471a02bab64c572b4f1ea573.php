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
        $__internal_1ec684ad02cdecac1715fb2cc19659c752a04c706f746dedaa23cca51fab3593 = $this->env->getExtension("native_profiler");
        $__internal_1ec684ad02cdecac1715fb2cc19659c752a04c706f746dedaa23cca51fab3593->enter($__internal_1ec684ad02cdecac1715fb2cc19659c752a04c706f746dedaa23cca51fab3593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ec684ad02cdecac1715fb2cc19659c752a04c706f746dedaa23cca51fab3593->leave($__internal_1ec684ad02cdecac1715fb2cc19659c752a04c706f746dedaa23cca51fab3593_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab3f5e0ce93eb0fb6dec40c2338e7b312adccd1d5bf14c1dbbacbbf8dddabb25 = $this->env->getExtension("native_profiler");
        $__internal_ab3f5e0ce93eb0fb6dec40c2338e7b312adccd1d5bf14c1dbbacbbf8dddabb25->enter($__internal_ab3f5e0ce93eb0fb6dec40c2338e7b312adccd1d5bf14c1dbbacbbf8dddabb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ab3f5e0ce93eb0fb6dec40c2338e7b312adccd1d5bf14c1dbbacbbf8dddabb25->leave($__internal_ab3f5e0ce93eb0fb6dec40c2338e7b312adccd1d5bf14c1dbbacbbf8dddabb25_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b58430054e249d4bec66a7c7877de431fdff1d42915fa100cce5cd0f60ac6991 = $this->env->getExtension("native_profiler");
        $__internal_b58430054e249d4bec66a7c7877de431fdff1d42915fa100cce5cd0f60ac6991->enter($__internal_b58430054e249d4bec66a7c7877de431fdff1d42915fa100cce5cd0f60ac6991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_b58430054e249d4bec66a7c7877de431fdff1d42915fa100cce5cd0f60ac6991->leave($__internal_b58430054e249d4bec66a7c7877de431fdff1d42915fa100cce5cd0f60ac6991_prof);

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
/* */
