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
        $__internal_4eb9b9e8611be83a913e8e6810e3b072b9644ab86e95cd1bb59671fd61997520 = $this->env->getExtension("native_profiler");
        $__internal_4eb9b9e8611be83a913e8e6810e3b072b9644ab86e95cd1bb59671fd61997520->enter($__internal_4eb9b9e8611be83a913e8e6810e3b072b9644ab86e95cd1bb59671fd61997520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eb9b9e8611be83a913e8e6810e3b072b9644ab86e95cd1bb59671fd61997520->leave($__internal_4eb9b9e8611be83a913e8e6810e3b072b9644ab86e95cd1bb59671fd61997520_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbb80f83fe58d9968cfae00020350d94fe4b8cd001d799229b5626b94c2eca4f = $this->env->getExtension("native_profiler");
        $__internal_fbb80f83fe58d9968cfae00020350d94fe4b8cd001d799229b5626b94c2eca4f->enter($__internal_fbb80f83fe58d9968cfae00020350d94fe4b8cd001d799229b5626b94c2eca4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_fbb80f83fe58d9968cfae00020350d94fe4b8cd001d799229b5626b94c2eca4f->leave($__internal_fbb80f83fe58d9968cfae00020350d94fe4b8cd001d799229b5626b94c2eca4f_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_0db3f631d3d8376705cca172d0880d11792881aaa968d08ce539020dd19e0b74 = $this->env->getExtension("native_profiler");
        $__internal_0db3f631d3d8376705cca172d0880d11792881aaa968d08ce539020dd19e0b74->enter($__internal_0db3f631d3d8376705cca172d0880d11792881aaa968d08ce539020dd19e0b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_0db3f631d3d8376705cca172d0880d11792881aaa968d08ce539020dd19e0b74->leave($__internal_0db3f631d3d8376705cca172d0880d11792881aaa968d08ce539020dd19e0b74_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3769d8a813c5262e7b076cd407961ccfc35a0a15c59bf45601add9948253775 = $this->env->getExtension("native_profiler");
        $__internal_e3769d8a813c5262e7b076cd407961ccfc35a0a15c59bf45601add9948253775->enter($__internal_e3769d8a813c5262e7b076cd407961ccfc35a0a15c59bf45601add9948253775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_e3769d8a813c5262e7b076cd407961ccfc35a0a15c59bf45601add9948253775->leave($__internal_e3769d8a813c5262e7b076cd407961ccfc35a0a15c59bf45601add9948253775_prof);

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
