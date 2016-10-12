<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_4e9388e47a351ec26429461ab99f3f6c97b7e94d2628279a1b59d02c9d8f356c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7dbd2979509c48273a9d51e373ba0d0149169281a26a39fc730ace8d8c9cc79 = $this->env->getExtension("native_profiler");
        $__internal_f7dbd2979509c48273a9d51e373ba0d0149169281a26a39fc730ace8d8c9cc79->enter($__internal_f7dbd2979509c48273a9d51e373ba0d0149169281a26a39fc730ace8d8c9cc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7dbd2979509c48273a9d51e373ba0d0149169281a26a39fc730ace8d8c9cc79->leave($__internal_f7dbd2979509c48273a9d51e373ba0d0149169281a26a39fc730ace8d8c9cc79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ec9b22e60f7733433194d4313a206ca46a44058f1c3812821da8f9ee146511b = $this->env->getExtension("native_profiler");
        $__internal_2ec9b22e60f7733433194d4313a206ca46a44058f1c3812821da8f9ee146511b->enter($__internal_2ec9b22e60f7733433194d4313a206ca46a44058f1c3812821da8f9ee146511b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_2ec9b22e60f7733433194d4313a206ca46a44058f1c3812821da8f9ee146511b->leave($__internal_2ec9b22e60f7733433194d4313a206ca46a44058f1c3812821da8f9ee146511b_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_501d7a49c82491a2e64f1baaa64cf0f266f60a4cbf0ed150edab753068934ad2 = $this->env->getExtension("native_profiler");
        $__internal_501d7a49c82491a2e64f1baaa64cf0f266f60a4cbf0ed150edab753068934ad2->enter($__internal_501d7a49c82491a2e64f1baaa64cf0f266f60a4cbf0ed150edab753068934ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_501d7a49c82491a2e64f1baaa64cf0f266f60a4cbf0ed150edab753068934ad2->leave($__internal_501d7a49c82491a2e64f1baaa64cf0f266f60a4cbf0ed150edab753068934ad2_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5340037256cc2362e4fa36afbcfea488a908bebe458bb7f79279d4a35ed3bb75 = $this->env->getExtension("native_profiler");
        $__internal_5340037256cc2362e4fa36afbcfea488a908bebe458bb7f79279d4a35ed3bb75->enter($__internal_5340037256cc2362e4fa36afbcfea488a908bebe458bb7f79279d4a35ed3bb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_5340037256cc2362e4fa36afbcfea488a908bebe458bb7f79279d4a35ed3bb75->leave($__internal_5340037256cc2362e4fa36afbcfea488a908bebe458bb7f79279d4a35ed3bb75_prof);

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
        return array (  84 => 14,  82 => 13,  73 => 11,  64 => 8,  56 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block title %}
  {{ app.user.prenoms }} {{ app.user.nom }} - {{ parent() }} 
{% endblock %}

{% block header_submenu %} 
  {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block fos_user_content %}    
  <div class=\"bg-grey dashboard\">
    {% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
  </div>
{% endblock fos_user_content %}";
    }
}
