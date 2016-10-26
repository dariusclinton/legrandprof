<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ccb8917722725ab3ed3b4a5b03873b5888ba7e00c8ed07339024e8ae38618321 extends Twig_Template
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
        $__internal_f3826d2ef8ca3ad4731282adc5043730c577f4a429e920d8f71e1ba666cf8a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3826d2ef8ca3ad4731282adc5043730c577f4a429e920d8f71e1ba666cf8a3b->enter($__internal_f3826d2ef8ca3ad4731282adc5043730c577f4a429e920d8f71e1ba666cf8a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3826d2ef8ca3ad4731282adc5043730c577f4a429e920d8f71e1ba666cf8a3b->leave($__internal_f3826d2ef8ca3ad4731282adc5043730c577f4a429e920d8f71e1ba666cf8a3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89106e24b7e25601cd17b74f9e2e777e900dab606d37083c4ed7fd3b1d917cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89106e24b7e25601cd17b74f9e2e777e900dab606d37083c4ed7fd3b1d917cee->enter($__internal_89106e24b7e25601cd17b74f9e2e777e900dab606d37083c4ed7fd3b1d917cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_89106e24b7e25601cd17b74f9e2e777e900dab606d37083c4ed7fd3b1d917cee->leave($__internal_89106e24b7e25601cd17b74f9e2e777e900dab606d37083c4ed7fd3b1d917cee_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_f2907452b2c40683f575c69e8b352705e0ded74e80abef3d09cd13c467e19e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2907452b2c40683f575c69e8b352705e0ded74e80abef3d09cd13c467e19e08->enter($__internal_f2907452b2c40683f575c69e8b352705e0ded74e80abef3d09cd13c467e19e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_f2907452b2c40683f575c69e8b352705e0ded74e80abef3d09cd13c467e19e08->leave($__internal_f2907452b2c40683f575c69e8b352705e0ded74e80abef3d09cd13c467e19e08_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce90e745e91a0353e4dca59649b488917436a8bb10e52cf31d6a07dc805c1059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce90e745e91a0353e4dca59649b488917436a8bb10e52cf31d6a07dc805c1059->enter($__internal_ce90e745e91a0353e4dca59649b488917436a8bb10e52cf31d6a07dc805c1059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_ce90e745e91a0353e4dca59649b488917436a8bb10e52cf31d6a07dc805c1059->leave($__internal_ce90e745e91a0353e4dca59649b488917436a8bb10e52cf31d6a07dc805c1059_prof);

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
