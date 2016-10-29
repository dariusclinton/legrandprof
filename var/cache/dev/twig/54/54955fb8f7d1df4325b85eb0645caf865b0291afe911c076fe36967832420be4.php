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
        $__internal_47657f326e07c9425cc780af91d9d55dbf8df09031970217c1b9839b621f8a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47657f326e07c9425cc780af91d9d55dbf8df09031970217c1b9839b621f8a28->enter($__internal_47657f326e07c9425cc780af91d9d55dbf8df09031970217c1b9839b621f8a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47657f326e07c9425cc780af91d9d55dbf8df09031970217c1b9839b621f8a28->leave($__internal_47657f326e07c9425cc780af91d9d55dbf8df09031970217c1b9839b621f8a28_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95bd980f4a632ce6f381d732802ea7e957555b6b14b76cfd027a2f5816c3435f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bd980f4a632ce6f381d732802ea7e957555b6b14b76cfd027a2f5816c3435f->enter($__internal_95bd980f4a632ce6f381d732802ea7e957555b6b14b76cfd027a2f5816c3435f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_95bd980f4a632ce6f381d732802ea7e957555b6b14b76cfd027a2f5816c3435f->leave($__internal_95bd980f4a632ce6f381d732802ea7e957555b6b14b76cfd027a2f5816c3435f_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_821708cb6c2aef97a6b7a31d1d863761b7919394cda253015447633acad01577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821708cb6c2aef97a6b7a31d1d863761b7919394cda253015447633acad01577->enter($__internal_821708cb6c2aef97a6b7a31d1d863761b7919394cda253015447633acad01577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_821708cb6c2aef97a6b7a31d1d863761b7919394cda253015447633acad01577->leave($__internal_821708cb6c2aef97a6b7a31d1d863761b7919394cda253015447633acad01577_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f24fb6babe6eb4da4b3c75b0b81e76986e0d9917081f760964c3887df689e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f24fb6babe6eb4da4b3c75b0b81e76986e0d9917081f760964c3887df689e04->enter($__internal_6f24fb6babe6eb4da4b3c75b0b81e76986e0d9917081f760964c3887df689e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_6f24fb6babe6eb4da4b3c75b0b81e76986e0d9917081f760964c3887df689e04->leave($__internal_6f24fb6babe6eb4da4b3c75b0b81e76986e0d9917081f760964c3887df689e04_prof);

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
