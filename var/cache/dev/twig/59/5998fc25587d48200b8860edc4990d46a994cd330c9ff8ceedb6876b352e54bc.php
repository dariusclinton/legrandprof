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
        $__internal_120fbeba17147ce1d5aa7a0756045a535d943ba8007050c6204bfdbdf85a4394 = $this->env->getExtension("native_profiler");
        $__internal_120fbeba17147ce1d5aa7a0756045a535d943ba8007050c6204bfdbdf85a4394->enter($__internal_120fbeba17147ce1d5aa7a0756045a535d943ba8007050c6204bfdbdf85a4394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_120fbeba17147ce1d5aa7a0756045a535d943ba8007050c6204bfdbdf85a4394->leave($__internal_120fbeba17147ce1d5aa7a0756045a535d943ba8007050c6204bfdbdf85a4394_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_299f4b73de04ee69ebb6af0c3f95b73763adf6b7ffa996f2c0e3079884ba8843 = $this->env->getExtension("native_profiler");
        $__internal_299f4b73de04ee69ebb6af0c3f95b73763adf6b7ffa996f2c0e3079884ba8843->enter($__internal_299f4b73de04ee69ebb6af0c3f95b73763adf6b7ffa996f2c0e3079884ba8843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_299f4b73de04ee69ebb6af0c3f95b73763adf6b7ffa996f2c0e3079884ba8843->leave($__internal_299f4b73de04ee69ebb6af0c3f95b73763adf6b7ffa996f2c0e3079884ba8843_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_4bfeb74bd91429b9b624b599f583c0207f4fdfcc088f489ba9b22fac0848b53e = $this->env->getExtension("native_profiler");
        $__internal_4bfeb74bd91429b9b624b599f583c0207f4fdfcc088f489ba9b22fac0848b53e->enter($__internal_4bfeb74bd91429b9b624b599f583c0207f4fdfcc088f489ba9b22fac0848b53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_4bfeb74bd91429b9b624b599f583c0207f4fdfcc088f489ba9b22fac0848b53e->leave($__internal_4bfeb74bd91429b9b624b599f583c0207f4fdfcc088f489ba9b22fac0848b53e_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17696c9218d725ea02453e26c113a41b4ed9ed173f6f8bd15b5e6c059db053e3 = $this->env->getExtension("native_profiler");
        $__internal_17696c9218d725ea02453e26c113a41b4ed9ed173f6f8bd15b5e6c059db053e3->enter($__internal_17696c9218d725ea02453e26c113a41b4ed9ed173f6f8bd15b5e6c059db053e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_17696c9218d725ea02453e26c113a41b4ed9ed173f6f8bd15b5e6c059db053e3->leave($__internal_17696c9218d725ea02453e26c113a41b4ed9ed173f6f8bd15b5e6c059db053e3_prof);

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
