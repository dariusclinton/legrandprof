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
        $__internal_6a542ad6764690e8b80fb85f078ad42cbb5485b3d6045c33dfeee45596416973 = $this->env->getExtension("native_profiler");
        $__internal_6a542ad6764690e8b80fb85f078ad42cbb5485b3d6045c33dfeee45596416973->enter($__internal_6a542ad6764690e8b80fb85f078ad42cbb5485b3d6045c33dfeee45596416973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a542ad6764690e8b80fb85f078ad42cbb5485b3d6045c33dfeee45596416973->leave($__internal_6a542ad6764690e8b80fb85f078ad42cbb5485b3d6045c33dfeee45596416973_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2413704bcc4d67b62c2104763eddc6edf86e662733e9e3cfa5c8d2ba67bae30e = $this->env->getExtension("native_profiler");
        $__internal_2413704bcc4d67b62c2104763eddc6edf86e662733e9e3cfa5c8d2ba67bae30e->enter($__internal_2413704bcc4d67b62c2104763eddc6edf86e662733e9e3cfa5c8d2ba67bae30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_2413704bcc4d67b62c2104763eddc6edf86e662733e9e3cfa5c8d2ba67bae30e->leave($__internal_2413704bcc4d67b62c2104763eddc6edf86e662733e9e3cfa5c8d2ba67bae30e_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_acbfedc94e3fd54db44bcf8e500290e25aa782de6c9021e453b1f5b1042ba305 = $this->env->getExtension("native_profiler");
        $__internal_acbfedc94e3fd54db44bcf8e500290e25aa782de6c9021e453b1f5b1042ba305->enter($__internal_acbfedc94e3fd54db44bcf8e500290e25aa782de6c9021e453b1f5b1042ba305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_acbfedc94e3fd54db44bcf8e500290e25aa782de6c9021e453b1f5b1042ba305->leave($__internal_acbfedc94e3fd54db44bcf8e500290e25aa782de6c9021e453b1f5b1042ba305_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_79922b05b4401b4e78a0a965d5e4aa688d2aecf5fca3da4b1bf1a6a0a33b23ed = $this->env->getExtension("native_profiler");
        $__internal_79922b05b4401b4e78a0a965d5e4aa688d2aecf5fca3da4b1bf1a6a0a33b23ed->enter($__internal_79922b05b4401b4e78a0a965d5e4aa688d2aecf5fca3da4b1bf1a6a0a33b23ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_79922b05b4401b4e78a0a965d5e4aa688d2aecf5fca3da4b1bf1a6a0a33b23ed->leave($__internal_79922b05b4401b4e78a0a965d5e4aa688d2aecf5fca3da4b1bf1a6a0a33b23ed_prof);

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
