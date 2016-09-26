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
        $__internal_bec0d9488c7e4df2d0cc89c95db476f88a78e609c114da0d66d2013bb992e645 = $this->env->getExtension("native_profiler");
        $__internal_bec0d9488c7e4df2d0cc89c95db476f88a78e609c114da0d66d2013bb992e645->enter($__internal_bec0d9488c7e4df2d0cc89c95db476f88a78e609c114da0d66d2013bb992e645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bec0d9488c7e4df2d0cc89c95db476f88a78e609c114da0d66d2013bb992e645->leave($__internal_bec0d9488c7e4df2d0cc89c95db476f88a78e609c114da0d66d2013bb992e645_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c85027c65f0712b32245d02995020e1baafde6f3d5ba8cd28241663c7262444 = $this->env->getExtension("native_profiler");
        $__internal_2c85027c65f0712b32245d02995020e1baafde6f3d5ba8cd28241663c7262444->enter($__internal_2c85027c65f0712b32245d02995020e1baafde6f3d5ba8cd28241663c7262444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2c85027c65f0712b32245d02995020e1baafde6f3d5ba8cd28241663c7262444->leave($__internal_2c85027c65f0712b32245d02995020e1baafde6f3d5ba8cd28241663c7262444_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_d9f15303d1edde7a858efb73ecae57ff88eeb40a8afa470b06f8d52d7cdf4b77 = $this->env->getExtension("native_profiler");
        $__internal_d9f15303d1edde7a858efb73ecae57ff88eeb40a8afa470b06f8d52d7cdf4b77->enter($__internal_d9f15303d1edde7a858efb73ecae57ff88eeb40a8afa470b06f8d52d7cdf4b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_d9f15303d1edde7a858efb73ecae57ff88eeb40a8afa470b06f8d52d7cdf4b77->leave($__internal_d9f15303d1edde7a858efb73ecae57ff88eeb40a8afa470b06f8d52d7cdf4b77_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_49b99d9f9c60f044e6cef5b6df910d79ca8c9e23e0f5b4e10aab323d8cb730b4 = $this->env->getExtension("native_profiler");
        $__internal_49b99d9f9c60f044e6cef5b6df910d79ca8c9e23e0f5b4e10aab323d8cb730b4->enter($__internal_49b99d9f9c60f044e6cef5b6df910d79ca8c9e23e0f5b4e10aab323d8cb730b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_49b99d9f9c60f044e6cef5b6df910d79ca8c9e23e0f5b4e10aab323d8cb730b4->leave($__internal_49b99d9f9c60f044e6cef5b6df910d79ca8c9e23e0f5b4e10aab323d8cb730b4_prof);

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
