<?php

/* LGPUserBundle:Cours:add.html.twig */
class __TwigTemplate_be758b6cd042679e4b590d7d45920eb788fb7ffb79ad12364d878f4bba6b525e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Cours:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32aa8a1fa1f4371873cf9d55c9d0441ac7bdf6cbc12dd332ed92fcb3d6a60863 = $this->env->getExtension("native_profiler");
        $__internal_32aa8a1fa1f4371873cf9d55c9d0441ac7bdf6cbc12dd332ed92fcb3d6a60863->enter($__internal_32aa8a1fa1f4371873cf9d55c9d0441ac7bdf6cbc12dd332ed92fcb3d6a60863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32aa8a1fa1f4371873cf9d55c9d0441ac7bdf6cbc12dd332ed92fcb3d6a60863->leave($__internal_32aa8a1fa1f4371873cf9d55c9d0441ac7bdf6cbc12dd332ed92fcb3d6a60863_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc62b264437a2493b3c2e6a9408bb48f657fb43a1664a4f9cf1661844a003644 = $this->env->getExtension("native_profiler");
        $__internal_cc62b264437a2493b3c2e6a9408bb48f657fb43a1664a4f9cf1661844a003644->enter($__internal_cc62b264437a2493b3c2e6a9408bb48f657fb43a1664a4f9cf1661844a003644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cc62b264437a2493b3c2e6a9408bb48f657fb43a1664a4f9cf1661844a003644->leave($__internal_cc62b264437a2493b3c2e6a9408bb48f657fb43a1664a4f9cf1661844a003644_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_b33f6f9a7361ed5d91fc7414bf724aa230e9dc5ecae5666700c7dd12ff501e02 = $this->env->getExtension("native_profiler");
        $__internal_b33f6f9a7361ed5d91fc7414bf724aa230e9dc5ecae5666700c7dd12ff501e02->enter($__internal_b33f6f9a7361ed5d91fc7414bf724aa230e9dc5ecae5666700c7dd12ff501e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_b33f6f9a7361ed5d91fc7414bf724aa230e9dc5ecae5666700c7dd12ff501e02->leave($__internal_b33f6f9a7361ed5d91fc7414bf724aa230e9dc5ecae5666700c7dd12ff501e02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_babfb420de3d98e69ea256a8103c445af8435ab301cf8677a9ed467886238807 = $this->env->getExtension("native_profiler");
        $__internal_babfb420de3d98e69ea256a8103c445af8435ab301cf8677a9ed467886238807->enter($__internal_babfb420de3d98e69ea256a8103c445af8435ab301cf8677a9ed467886238807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                    <div class=\"row\">
                            <div class=\"col-md-3\">
                                    <h3 class=\"title-block-dash\">Gérer mes cours</h3>
                                    <ul class=\"menu-dash\">
                                            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_cours");
        echo "\">Ma liste de cours</a></li>
                                            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_cours_add");
        echo "\">Ajouter un cours</a></li>
                                    </ul>
                            </div>
                            <div class=\"col-md-9\">
                                
                                    <div class=\"notifications-block\">
                                            <div class=\"notifications-header\">Ajouter un cours</div>
                                            <div class=\"notifications-content\">
                                                ";
        // line 29
        $this->loadTemplate("LGPUserBundle:Cours:formulaire.html.twig", "LGPUserBundle:Cours:add.html.twig", 29)->display($context);
        // line 30
        echo "                                            </div>
                                    </div>
                                
                            </div>
                    </div>
            </div>
        </div>
    </div>
  
";
        
        $__internal_babfb420de3d98e69ea256a8103c445af8435ab301cf8677a9ed467886238807->leave($__internal_babfb420de3d98e69ea256a8103c445af8435ab301cf8677a9ed467886238807_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Cours:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  100 => 29,  89 => 21,  85 => 20,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Ajout d'un cours - {{ parent() }}
{% endblock %}

{% block header_submenu %} 
    {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}
    
    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                    <div class=\"row\">
                            <div class=\"col-md-3\">
                                    <h3 class=\"title-block-dash\">Gérer mes cours</h3>
                                    <ul class=\"menu-dash\">
                                            <li><a href=\"{{ path('lgp_user_prof_cours') }}\">Ma liste de cours</a></li>
                                            <li><a href=\"{{ path('lgp_user_prof_cours_add') }}\">Ajouter un cours</a></li>
                                    </ul>
                            </div>
                            <div class=\"col-md-9\">
                                
                                    <div class=\"notifications-block\">
                                            <div class=\"notifications-header\">Ajouter un cours</div>
                                            <div class=\"notifications-content\">
                                                {% include 'LGPUserBundle:Cours:formulaire.html.twig' %}
                                            </div>
                                    </div>
                                
                            </div>
                    </div>
            </div>
        </div>
    </div>
  
{% endblock %}";
    }
}
