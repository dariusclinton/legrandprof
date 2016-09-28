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
        $__internal_80b4ce6879f777e363f29f15181dc7dcec764f89b2484849538f6b1870db664f = $this->env->getExtension("native_profiler");
        $__internal_80b4ce6879f777e363f29f15181dc7dcec764f89b2484849538f6b1870db664f->enter($__internal_80b4ce6879f777e363f29f15181dc7dcec764f89b2484849538f6b1870db664f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80b4ce6879f777e363f29f15181dc7dcec764f89b2484849538f6b1870db664f->leave($__internal_80b4ce6879f777e363f29f15181dc7dcec764f89b2484849538f6b1870db664f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b1582ddfde017ae9df953292cdfa2063d1a626345973fe34852c7930048027c = $this->env->getExtension("native_profiler");
        $__internal_4b1582ddfde017ae9df953292cdfa2063d1a626345973fe34852c7930048027c->enter($__internal_4b1582ddfde017ae9df953292cdfa2063d1a626345973fe34852c7930048027c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_4b1582ddfde017ae9df953292cdfa2063d1a626345973fe34852c7930048027c->leave($__internal_4b1582ddfde017ae9df953292cdfa2063d1a626345973fe34852c7930048027c_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_c840f6bc35d2a37121d78ac88ec9ffbe8f7d7d4190059b017a319b810ddccac7 = $this->env->getExtension("native_profiler");
        $__internal_c840f6bc35d2a37121d78ac88ec9ffbe8f7d7d4190059b017a319b810ddccac7->enter($__internal_c840f6bc35d2a37121d78ac88ec9ffbe8f7d7d4190059b017a319b810ddccac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_c840f6bc35d2a37121d78ac88ec9ffbe8f7d7d4190059b017a319b810ddccac7->leave($__internal_c840f6bc35d2a37121d78ac88ec9ffbe8f7d7d4190059b017a319b810ddccac7_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca73711dbd2b16029f55657b0338a9758e6c9da8b3fa9dac8854de5e8db9b7f1 = $this->env->getExtension("native_profiler");
        $__internal_ca73711dbd2b16029f55657b0338a9758e6c9da8b3fa9dac8854de5e8db9b7f1->enter($__internal_ca73711dbd2b16029f55657b0338a9758e6c9da8b3fa9dac8854de5e8db9b7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_ca73711dbd2b16029f55657b0338a9758e6c9da8b3fa9dac8854de5e8db9b7f1->leave($__internal_ca73711dbd2b16029f55657b0338a9758e6c9da8b3fa9dac8854de5e8db9b7f1_prof);

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
