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
        $__internal_25b431d4e96bfd540613176259375bb7b4a97af797f0491be95d437b5e4d6b8a = $this->env->getExtension("native_profiler");
        $__internal_25b431d4e96bfd540613176259375bb7b4a97af797f0491be95d437b5e4d6b8a->enter($__internal_25b431d4e96bfd540613176259375bb7b4a97af797f0491be95d437b5e4d6b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25b431d4e96bfd540613176259375bb7b4a97af797f0491be95d437b5e4d6b8a->leave($__internal_25b431d4e96bfd540613176259375bb7b4a97af797f0491be95d437b5e4d6b8a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fd9acaae4f07220ce6bcd0c0901360e0cdd97c1c5edf3265b015454872939ac = $this->env->getExtension("native_profiler");
        $__internal_1fd9acaae4f07220ce6bcd0c0901360e0cdd97c1c5edf3265b015454872939ac->enter($__internal_1fd9acaae4f07220ce6bcd0c0901360e0cdd97c1c5edf3265b015454872939ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1fd9acaae4f07220ce6bcd0c0901360e0cdd97c1c5edf3265b015454872939ac->leave($__internal_1fd9acaae4f07220ce6bcd0c0901360e0cdd97c1c5edf3265b015454872939ac_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_b0e6c6f3cc744ef904c0dd9cdffb7ab3d7287cb9d73a2918f12a32dc4b1c971f = $this->env->getExtension("native_profiler");
        $__internal_b0e6c6f3cc744ef904c0dd9cdffb7ab3d7287cb9d73a2918f12a32dc4b1c971f->enter($__internal_b0e6c6f3cc744ef904c0dd9cdffb7ab3d7287cb9d73a2918f12a32dc4b1c971f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_b0e6c6f3cc744ef904c0dd9cdffb7ab3d7287cb9d73a2918f12a32dc4b1c971f->leave($__internal_b0e6c6f3cc744ef904c0dd9cdffb7ab3d7287cb9d73a2918f12a32dc4b1c971f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c9582a56bac254711bf27b830ea8690c6398c2e979721d34f30c7551dfe1282 = $this->env->getExtension("native_profiler");
        $__internal_7c9582a56bac254711bf27b830ea8690c6398c2e979721d34f30c7551dfe1282->enter($__internal_7c9582a56bac254711bf27b830ea8690c6398c2e979721d34f30c7551dfe1282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7c9582a56bac254711bf27b830ea8690c6398c2e979721d34f30c7551dfe1282->leave($__internal_7c9582a56bac254711bf27b830ea8690c6398c2e979721d34f30c7551dfe1282_prof);

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
