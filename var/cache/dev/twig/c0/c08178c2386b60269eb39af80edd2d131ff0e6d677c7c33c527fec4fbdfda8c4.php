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
        $__internal_92121715a87e53c1a46f2871016c3cb56a368e426b7e268a564a06cb59041a19 = $this->env->getExtension("native_profiler");
        $__internal_92121715a87e53c1a46f2871016c3cb56a368e426b7e268a564a06cb59041a19->enter($__internal_92121715a87e53c1a46f2871016c3cb56a368e426b7e268a564a06cb59041a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92121715a87e53c1a46f2871016c3cb56a368e426b7e268a564a06cb59041a19->leave($__internal_92121715a87e53c1a46f2871016c3cb56a368e426b7e268a564a06cb59041a19_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_103dd05a066b3632e6b63fb05ed13ea5bd8050e7662a79b783ea27174b8f6363 = $this->env->getExtension("native_profiler");
        $__internal_103dd05a066b3632e6b63fb05ed13ea5bd8050e7662a79b783ea27174b8f6363->enter($__internal_103dd05a066b3632e6b63fb05ed13ea5bd8050e7662a79b783ea27174b8f6363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_103dd05a066b3632e6b63fb05ed13ea5bd8050e7662a79b783ea27174b8f6363->leave($__internal_103dd05a066b3632e6b63fb05ed13ea5bd8050e7662a79b783ea27174b8f6363_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84644f05bead541a9ff2bd19722803d62b6006b709ad87b8d6b71c735f7703ee = $this->env->getExtension("native_profiler");
        $__internal_84644f05bead541a9ff2bd19722803d62b6006b709ad87b8d6b71c735f7703ee->enter($__internal_84644f05bead541a9ff2bd19722803d62b6006b709ad87b8d6b71c735f7703ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 8)->display($context);
        
        $__internal_84644f05bead541a9ff2bd19722803d62b6006b709ad87b8d6b71c735f7703ee->leave($__internal_84644f05bead541a9ff2bd19722803d62b6006b709ad87b8d6b71c735f7703ee_prof);

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
