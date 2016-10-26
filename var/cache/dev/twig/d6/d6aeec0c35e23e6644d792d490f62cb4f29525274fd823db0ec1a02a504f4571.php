<?php

/* LGPUserBundle:Cours:update.html.twig */
class __TwigTemplate_d823ea58503088859ae38d3c1d12beaea08b72bda08c4c8f3ba9d80d7797b44b extends Twig_Template
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
        $__internal_26fe5256e65d10a483b364de34d5a7e309dddae96f786c91939178cb0dcae10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26fe5256e65d10a483b364de34d5a7e309dddae96f786c91939178cb0dcae10d->enter($__internal_26fe5256e65d10a483b364de34d5a7e309dddae96f786c91939178cb0dcae10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26fe5256e65d10a483b364de34d5a7e309dddae96f786c91939178cb0dcae10d->leave($__internal_26fe5256e65d10a483b364de34d5a7e309dddae96f786c91939178cb0dcae10d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b024926166b4d731a58f3d7dc2858444b08f38bc44b9fb4c60b5e4b993b5539b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b024926166b4d731a58f3d7dc2858444b08f38bc44b9fb4c60b5e4b993b5539b->enter($__internal_b024926166b4d731a58f3d7dc2858444b08f38bc44b9fb4c60b5e4b993b5539b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b024926166b4d731a58f3d7dc2858444b08f38bc44b9fb4c60b5e4b993b5539b->leave($__internal_b024926166b4d731a58f3d7dc2858444b08f38bc44b9fb4c60b5e4b993b5539b_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_4fa2376603ffecd87e0d66624ea798b1d6c9aee633ed5ca5193cd6059a70e811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa2376603ffecd87e0d66624ea798b1d6c9aee633ed5ca5193cd6059a70e811->enter($__internal_4fa2376603ffecd87e0d66624ea798b1d6c9aee633ed5ca5193cd6059a70e811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_4fa2376603ffecd87e0d66624ea798b1d6c9aee633ed5ca5193cd6059a70e811->leave($__internal_4fa2376603ffecd87e0d66624ea798b1d6c9aee633ed5ca5193cd6059a70e811_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_acceb899b644c897bfb7e610b0da28dc5f1f594e79ae55000035ef7c18b82402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acceb899b644c897bfb7e610b0da28dc5f1f594e79ae55000035ef7c18b82402->enter($__internal_acceb899b644c897bfb7e610b0da28dc5f1f594e79ae55000035ef7c18b82402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_cours");
        echo "\">Ma liste de cours</a></li>
                                            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_cours_add");
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
        
        $__internal_acceb899b644c897bfb7e610b0da28dc5f1f594e79ae55000035ef7c18b82402->leave($__internal_acceb899b644c897bfb7e610b0da28dc5f1f594e79ae55000035ef7c18b82402_prof);

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
