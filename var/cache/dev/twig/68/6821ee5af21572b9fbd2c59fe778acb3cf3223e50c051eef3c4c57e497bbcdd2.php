<?php

/* LGPUserBundle:Cours:add.html.twig */
class __TwigTemplate_12085cb6968f596faee87a6edd0e98d33ad19a4c3eefef8c2bb9dbe7edd9874b extends Twig_Template
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
        $__internal_f7f90f8ab6bba69714dca85221c8b398eb205cd1c708471ce2646ab6754f4e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f90f8ab6bba69714dca85221c8b398eb205cd1c708471ce2646ab6754f4e07->enter($__internal_f7f90f8ab6bba69714dca85221c8b398eb205cd1c708471ce2646ab6754f4e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7f90f8ab6bba69714dca85221c8b398eb205cd1c708471ce2646ab6754f4e07->leave($__internal_f7f90f8ab6bba69714dca85221c8b398eb205cd1c708471ce2646ab6754f4e07_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b9dd8583b664200316e53ab69984ed03b4a0ec63d69b845b68d06fb274e96fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9dd8583b664200316e53ab69984ed03b4a0ec63d69b845b68d06fb274e96fd->enter($__internal_4b9dd8583b664200316e53ab69984ed03b4a0ec63d69b845b68d06fb274e96fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4b9dd8583b664200316e53ab69984ed03b4a0ec63d69b845b68d06fb274e96fd->leave($__internal_4b9dd8583b664200316e53ab69984ed03b4a0ec63d69b845b68d06fb274e96fd_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_823bdff146cc130a7be30a9e50a612e42663ed774d7f94869463ee286753d527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823bdff146cc130a7be30a9e50a612e42663ed774d7f94869463ee286753d527->enter($__internal_823bdff146cc130a7be30a9e50a612e42663ed774d7f94869463ee286753d527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_823bdff146cc130a7be30a9e50a612e42663ed774d7f94869463ee286753d527->leave($__internal_823bdff146cc130a7be30a9e50a612e42663ed774d7f94869463ee286753d527_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef2eee985c13b3a4a3926bb04acbfe327d1e68990c2edbd2c005c89a784a2829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2eee985c13b3a4a3926bb04acbfe327d1e68990c2edbd2c005c89a784a2829->enter($__internal_ef2eee985c13b3a4a3926bb04acbfe327d1e68990c2edbd2c005c89a784a2829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef2eee985c13b3a4a3926bb04acbfe327d1e68990c2edbd2c005c89a784a2829->leave($__internal_ef2eee985c13b3a4a3926bb04acbfe327d1e68990c2edbd2c005c89a784a2829_prof);

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
  
{% endblock %}

";
    }
}
