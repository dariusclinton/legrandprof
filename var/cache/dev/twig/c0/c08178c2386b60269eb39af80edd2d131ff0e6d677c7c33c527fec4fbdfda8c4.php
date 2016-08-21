<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3367fb9ba5b109089089c76ddf6b7d400349579681b0c10616ea3dd1530dcb0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_712e5de2a5d4cd4827e8e60a7be4ebfca4e3678133790c2ac9d03fbc6a102747 = $this->env->getExtension("native_profiler");
        $__internal_712e5de2a5d4cd4827e8e60a7be4ebfca4e3678133790c2ac9d03fbc6a102747->enter($__internal_712e5de2a5d4cd4827e8e60a7be4ebfca4e3678133790c2ac9d03fbc6a102747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_712e5de2a5d4cd4827e8e60a7be4ebfca4e3678133790c2ac9d03fbc6a102747->leave($__internal_712e5de2a5d4cd4827e8e60a7be4ebfca4e3678133790c2ac9d03fbc6a102747_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dde4e7b4b38615f791a10fe7964e2f35f38aaa171819f3021e2776b2c0992b35 = $this->env->getExtension("native_profiler");
        $__internal_dde4e7b4b38615f791a10fe7964e2f35f38aaa171819f3021e2776b2c0992b35->enter($__internal_dde4e7b4b38615f791a10fe7964e2f35f38aaa171819f3021e2776b2c0992b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_dde4e7b4b38615f791a10fe7964e2f35f38aaa171819f3021e2776b2c0992b35->leave($__internal_dde4e7b4b38615f791a10fe7964e2f35f38aaa171819f3021e2776b2c0992b35_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00a3a29aa7fcbda7eb40bb5457ba9341afdd15fc9308c056f06c2659190ac13d = $this->env->getExtension("native_profiler");
        $__internal_00a3a29aa7fcbda7eb40bb5457ba9341afdd15fc9308c056f06c2659190ac13d->enter($__internal_00a3a29aa7fcbda7eb40bb5457ba9341afdd15fc9308c056f06c2659190ac13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 8)->display($context);
        
        $__internal_00a3a29aa7fcbda7eb40bb5457ba9341afdd15fc9308c056f06c2659190ac13d->leave($__internal_00a3a29aa7fcbda7eb40bb5457ba9341afdd15fc9308c056f06c2659190ac13d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/*     {{ app.user.prenoms }} {{ app.user.nom }} - {{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
