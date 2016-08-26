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
        $__internal_3a1fcb194e021bec6a664948342b126bccf852f29337e8f6c546abcc00335774 = $this->env->getExtension("native_profiler");
        $__internal_3a1fcb194e021bec6a664948342b126bccf852f29337e8f6c546abcc00335774->enter($__internal_3a1fcb194e021bec6a664948342b126bccf852f29337e8f6c546abcc00335774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a1fcb194e021bec6a664948342b126bccf852f29337e8f6c546abcc00335774->leave($__internal_3a1fcb194e021bec6a664948342b126bccf852f29337e8f6c546abcc00335774_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_72593f2b767f4970ca15ee00fbb2f65654d32718f5b65ea6b0454d519d072dbb = $this->env->getExtension("native_profiler");
        $__internal_72593f2b767f4970ca15ee00fbb2f65654d32718f5b65ea6b0454d519d072dbb->enter($__internal_72593f2b767f4970ca15ee00fbb2f65654d32718f5b65ea6b0454d519d072dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_72593f2b767f4970ca15ee00fbb2f65654d32718f5b65ea6b0454d519d072dbb->leave($__internal_72593f2b767f4970ca15ee00fbb2f65654d32718f5b65ea6b0454d519d072dbb_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_827ad117ea5681cb539a94ff31b9ec31f48eaea4f477ccfb58ca25e6452c4900 = $this->env->getExtension("native_profiler");
        $__internal_827ad117ea5681cb539a94ff31b9ec31f48eaea4f477ccfb58ca25e6452c4900->enter($__internal_827ad117ea5681cb539a94ff31b9ec31f48eaea4f477ccfb58ca25e6452c4900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_827ad117ea5681cb539a94ff31b9ec31f48eaea4f477ccfb58ca25e6452c4900->leave($__internal_827ad117ea5681cb539a94ff31b9ec31f48eaea4f477ccfb58ca25e6452c4900_prof);

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
