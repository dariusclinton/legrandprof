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
        $__internal_2feae507222076ede6ab12d4522650124a7407fe424493394e52c65637f7da7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2feae507222076ede6ab12d4522650124a7407fe424493394e52c65637f7da7e->enter($__internal_2feae507222076ede6ab12d4522650124a7407fe424493394e52c65637f7da7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2feae507222076ede6ab12d4522650124a7407fe424493394e52c65637f7da7e->leave($__internal_2feae507222076ede6ab12d4522650124a7407fe424493394e52c65637f7da7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_92c54f43294f2bf187e0ae340d4842763e2be4effb5c6d524f80ae0207b34fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c54f43294f2bf187e0ae340d4842763e2be4effb5c6d524f80ae0207b34fd1->enter($__internal_92c54f43294f2bf187e0ae340d4842763e2be4effb5c6d524f80ae0207b34fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_92c54f43294f2bf187e0ae340d4842763e2be4effb5c6d524f80ae0207b34fd1->leave($__internal_92c54f43294f2bf187e0ae340d4842763e2be4effb5c6d524f80ae0207b34fd1_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_f3f4c8eb223ae20fc1a959ba192cc28309bdf872130ceddfff75111b1733f397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f4c8eb223ae20fc1a959ba192cc28309bdf872130ceddfff75111b1733f397->enter($__internal_f3f4c8eb223ae20fc1a959ba192cc28309bdf872130ceddfff75111b1733f397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_f3f4c8eb223ae20fc1a959ba192cc28309bdf872130ceddfff75111b1733f397->leave($__internal_f3f4c8eb223ae20fc1a959ba192cc28309bdf872130ceddfff75111b1733f397_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_34c0b3e4a92d0514b8b97aba739660c989b83f832dfd3b02936393b5d3245b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c0b3e4a92d0514b8b97aba739660c989b83f832dfd3b02936393b5d3245b3b->enter($__internal_34c0b3e4a92d0514b8b97aba739660c989b83f832dfd3b02936393b5d3245b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_34c0b3e4a92d0514b8b97aba739660c989b83f832dfd3b02936393b5d3245b3b->leave($__internal_34c0b3e4a92d0514b8b97aba739660c989b83f832dfd3b02936393b5d3245b3b_prof);

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
