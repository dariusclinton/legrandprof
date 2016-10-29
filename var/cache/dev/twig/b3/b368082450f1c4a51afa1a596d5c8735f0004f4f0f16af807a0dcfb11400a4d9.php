<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_51ab9805b8091f065e4d7514a5d6b1f7e98186476f1409be8aec14f2662c93ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_73b83ed7482fcee7dbdb1c00528bda0a9584603639c1cd5470eb156bc93c0cee = $this->env->getExtension("native_profiler");
        $__internal_73b83ed7482fcee7dbdb1c00528bda0a9584603639c1cd5470eb156bc93c0cee->enter($__internal_73b83ed7482fcee7dbdb1c00528bda0a9584603639c1cd5470eb156bc93c0cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73b83ed7482fcee7dbdb1c00528bda0a9584603639c1cd5470eb156bc93c0cee->leave($__internal_73b83ed7482fcee7dbdb1c00528bda0a9584603639c1cd5470eb156bc93c0cee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7479066c626b58f0309839d4f74b6976224a7327dd6fc4628e3391e215b342b7 = $this->env->getExtension("native_profiler");
        $__internal_7479066c626b58f0309839d4f74b6976224a7327dd6fc4628e3391e215b342b7->enter($__internal_7479066c626b58f0309839d4f74b6976224a7327dd6fc4628e3391e215b342b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7479066c626b58f0309839d4f74b6976224a7327dd6fc4628e3391e215b342b7->leave($__internal_7479066c626b58f0309839d4f74b6976224a7327dd6fc4628e3391e215b342b7_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_130296893c13095615809f6a96f801129127f6fd2380b869962f73b377886f37 = $this->env->getExtension("native_profiler");
        $__internal_130296893c13095615809f6a96f801129127f6fd2380b869962f73b377886f37->enter($__internal_130296893c13095615809f6a96f801129127f6fd2380b869962f73b377886f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_130296893c13095615809f6a96f801129127f6fd2380b869962f73b377886f37->leave($__internal_130296893c13095615809f6a96f801129127f6fd2380b869962f73b377886f37_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41fcfabf6d59992513659e10bdb6d6381cfc3a9f2689dd803b4fd3c7e6cbc874 = $this->env->getExtension("native_profiler");
        $__internal_41fcfabf6d59992513659e10bdb6d6381cfc3a9f2689dd803b4fd3c7e6cbc874->enter($__internal_41fcfabf6d59992513659e10bdb6d6381cfc3a9f2689dd803b4fd3c7e6cbc874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_41fcfabf6d59992513659e10bdb6d6381cfc3a9f2689dd803b4fd3c7e6cbc874->leave($__internal_41fcfabf6d59992513659e10bdb6d6381cfc3a9f2689dd803b4fd3c7e6cbc874_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  82 => 13,  79 => 12,  73 => 11,  64 => 8,  56 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block title %}
    {{ app.user.prenoms }} {{ app.user.nom }} - Edit profile - {{ parent() }}
{% endblock %}

{% block header_submenu %} 
    {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block fos_user_content %}
    <div class=\"bg-grey dashboard\">
        {% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
    </div>
{% endblock fos_user_content %}
";
    }
}
