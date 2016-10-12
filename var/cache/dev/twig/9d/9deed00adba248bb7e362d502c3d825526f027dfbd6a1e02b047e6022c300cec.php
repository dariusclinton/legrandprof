<?php

/* LGPUserBundle:Cours:update.html.twig */
class __TwigTemplate_29c8667ecb8ddde55e0251a04ff2f7399af7da435ad0bb53fcb16b58c87308c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Cours:update.html.twig", 1);
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
        $__internal_0341814bac9d4a956830a357dd9a0bdf54229cfed3496d59cff5977b7d4fe067 = $this->env->getExtension("native_profiler");
        $__internal_0341814bac9d4a956830a357dd9a0bdf54229cfed3496d59cff5977b7d4fe067->enter($__internal_0341814bac9d4a956830a357dd9a0bdf54229cfed3496d59cff5977b7d4fe067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0341814bac9d4a956830a357dd9a0bdf54229cfed3496d59cff5977b7d4fe067->leave($__internal_0341814bac9d4a956830a357dd9a0bdf54229cfed3496d59cff5977b7d4fe067_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e33462de77dbc4334eee9fbdc9bfe00c9f95bd9a634b9a50ff98b440c5b012a = $this->env->getExtension("native_profiler");
        $__internal_0e33462de77dbc4334eee9fbdc9bfe00c9f95bd9a634b9a50ff98b440c5b012a->enter($__internal_0e33462de77dbc4334eee9fbdc9bfe00c9f95bd9a634b9a50ff98b440c5b012a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0e33462de77dbc4334eee9fbdc9bfe00c9f95bd9a634b9a50ff98b440c5b012a->leave($__internal_0e33462de77dbc4334eee9fbdc9bfe00c9f95bd9a634b9a50ff98b440c5b012a_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_42d89eab1f18197f119bbeb62ee0df9c6a1e30707d3dbceb876ca873b710b2d8 = $this->env->getExtension("native_profiler");
        $__internal_42d89eab1f18197f119bbeb62ee0df9c6a1e30707d3dbceb876ca873b710b2d8->enter($__internal_42d89eab1f18197f119bbeb62ee0df9c6a1e30707d3dbceb876ca873b710b2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_42d89eab1f18197f119bbeb62ee0df9c6a1e30707d3dbceb876ca873b710b2d8->leave($__internal_42d89eab1f18197f119bbeb62ee0df9c6a1e30707d3dbceb876ca873b710b2d8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a86d74ff4c014d3d39744f6c829cdf165d1dafe3050aaa5a1c6fd51719e90e16 = $this->env->getExtension("native_profiler");
        $__internal_a86d74ff4c014d3d39744f6c829cdf165d1dafe3050aaa5a1c6fd51719e90e16->enter($__internal_a86d74ff4c014d3d39744f6c829cdf165d1dafe3050aaa5a1c6fd51719e90e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                            <div class=\"notifications-header\">Modifier un cours</div>
                                            <div class=\"notifications-content\">
                                                ";
        // line 29
        $this->loadTemplate("LGPUserBundle:Cours:formulaire.html.twig", "LGPUserBundle:Cours:update.html.twig", 29)->display($context);
        // line 30
        echo "                                            </div>
                                    </div>
                                
                            </div>
                    </div>
            </div>
        </div>
    </div>
                                            
  
";
        
        $__internal_a86d74ff4c014d3d39744f6c829cdf165d1dafe3050aaa5a1c6fd51719e90e16->leave($__internal_a86d74ff4c014d3d39744f6c829cdf165d1dafe3050aaa5a1c6fd51719e90e16_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Cours:update.html.twig";
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
  Modification d'un cours - {{ parent() }}
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
                                            <div class=\"notifications-header\">Modifier un cours</div>
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
