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
        $__internal_6315bf540955d924304e64572b93aaea9c3c354b31c0d7e4dd1b1047b63fe254 = $this->env->getExtension("native_profiler");
        $__internal_6315bf540955d924304e64572b93aaea9c3c354b31c0d7e4dd1b1047b63fe254->enter($__internal_6315bf540955d924304e64572b93aaea9c3c354b31c0d7e4dd1b1047b63fe254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6315bf540955d924304e64572b93aaea9c3c354b31c0d7e4dd1b1047b63fe254->leave($__internal_6315bf540955d924304e64572b93aaea9c3c354b31c0d7e4dd1b1047b63fe254_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea86e78e088f725ad4c0340bad76d9b68e3b6163e49a4e8b6c9d90e7e70f6ef3 = $this->env->getExtension("native_profiler");
        $__internal_ea86e78e088f725ad4c0340bad76d9b68e3b6163e49a4e8b6c9d90e7e70f6ef3->enter($__internal_ea86e78e088f725ad4c0340bad76d9b68e3b6163e49a4e8b6c9d90e7e70f6ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_ea86e78e088f725ad4c0340bad76d9b68e3b6163e49a4e8b6c9d90e7e70f6ef3->leave($__internal_ea86e78e088f725ad4c0340bad76d9b68e3b6163e49a4e8b6c9d90e7e70f6ef3_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_81590e57ccaa71936f8abea4d8bc2fb9953328b9a05f8985a8ab6114535f5bd8 = $this->env->getExtension("native_profiler");
        $__internal_81590e57ccaa71936f8abea4d8bc2fb9953328b9a05f8985a8ab6114535f5bd8->enter($__internal_81590e57ccaa71936f8abea4d8bc2fb9953328b9a05f8985a8ab6114535f5bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_81590e57ccaa71936f8abea4d8bc2fb9953328b9a05f8985a8ab6114535f5bd8->leave($__internal_81590e57ccaa71936f8abea4d8bc2fb9953328b9a05f8985a8ab6114535f5bd8_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_023358f5f3714052c6c1dedcc388b7d76ec94b6a85927df3108763018c497255 = $this->env->getExtension("native_profiler");
        $__internal_023358f5f3714052c6c1dedcc388b7d76ec94b6a85927df3108763018c497255->enter($__internal_023358f5f3714052c6c1dedcc388b7d76ec94b6a85927df3108763018c497255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_023358f5f3714052c6c1dedcc388b7d76ec94b6a85927df3108763018c497255->leave($__internal_023358f5f3714052c6c1dedcc388b7d76ec94b6a85927df3108763018c497255_prof);

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
