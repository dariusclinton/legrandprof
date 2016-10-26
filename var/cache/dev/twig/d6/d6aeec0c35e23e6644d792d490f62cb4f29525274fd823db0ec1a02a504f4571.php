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
        $__internal_f66e4c7ef2d2ed8f2c6bdc13653eddf897e0b8e11ab4401d9a19a65c42d3fc35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66e4c7ef2d2ed8f2c6bdc13653eddf897e0b8e11ab4401d9a19a65c42d3fc35->enter($__internal_f66e4c7ef2d2ed8f2c6bdc13653eddf897e0b8e11ab4401d9a19a65c42d3fc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f66e4c7ef2d2ed8f2c6bdc13653eddf897e0b8e11ab4401d9a19a65c42d3fc35->leave($__internal_f66e4c7ef2d2ed8f2c6bdc13653eddf897e0b8e11ab4401d9a19a65c42d3fc35_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5294b776f16ffcff953a945932eb8a191823d6f1498238f5181d4eb95b3d73c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5294b776f16ffcff953a945932eb8a191823d6f1498238f5181d4eb95b3d73c->enter($__internal_b5294b776f16ffcff953a945932eb8a191823d6f1498238f5181d4eb95b3d73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b5294b776f16ffcff953a945932eb8a191823d6f1498238f5181d4eb95b3d73c->leave($__internal_b5294b776f16ffcff953a945932eb8a191823d6f1498238f5181d4eb95b3d73c_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_d3324be4aa6cc2b4683987700a8001b9f789b4dabeb310e7a1f1aded2fc02025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3324be4aa6cc2b4683987700a8001b9f789b4dabeb310e7a1f1aded2fc02025->enter($__internal_d3324be4aa6cc2b4683987700a8001b9f789b4dabeb310e7a1f1aded2fc02025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_d3324be4aa6cc2b4683987700a8001b9f789b4dabeb310e7a1f1aded2fc02025->leave($__internal_d3324be4aa6cc2b4683987700a8001b9f789b4dabeb310e7a1f1aded2fc02025_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b587dc1e7241a9977578e0c75b4b96406a16bccc79d45b5daab59ab86315913f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b587dc1e7241a9977578e0c75b4b96406a16bccc79d45b5daab59ab86315913f->enter($__internal_b587dc1e7241a9977578e0c75b4b96406a16bccc79d45b5daab59ab86315913f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b587dc1e7241a9977578e0c75b4b96406a16bccc79d45b5daab59ab86315913f->leave($__internal_b587dc1e7241a9977578e0c75b4b96406a16bccc79d45b5daab59ab86315913f_prof);

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
