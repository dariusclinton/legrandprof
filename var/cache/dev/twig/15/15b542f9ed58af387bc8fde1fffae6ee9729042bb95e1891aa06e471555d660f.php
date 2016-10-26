<?php

/* LGPUserBundle:Anomalie:update.html.twig */
class __TwigTemplate_ddca01aa02831a0d4b7845d07c905e57dd13eb899bc5f1917812d518857104dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Anomalie:update.html.twig", 1);
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
        $__internal_45440d5d3475cda109175dd15124332c4dc8e58f78bf3a0ebdfa450f2c03a11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45440d5d3475cda109175dd15124332c4dc8e58f78bf3a0ebdfa450f2c03a11a->enter($__internal_45440d5d3475cda109175dd15124332c4dc8e58f78bf3a0ebdfa450f2c03a11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45440d5d3475cda109175dd15124332c4dc8e58f78bf3a0ebdfa450f2c03a11a->leave($__internal_45440d5d3475cda109175dd15124332c4dc8e58f78bf3a0ebdfa450f2c03a11a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a748c1992460511de9c6867bcd1fb0b576e3d34c67376bfd865232721459ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a748c1992460511de9c6867bcd1fb0b576e3d34c67376bfd865232721459ce7->enter($__internal_2a748c1992460511de9c6867bcd1fb0b576e3d34c67376bfd865232721459ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2a748c1992460511de9c6867bcd1fb0b576e3d34c67376bfd865232721459ce7->leave($__internal_2a748c1992460511de9c6867bcd1fb0b576e3d34c67376bfd865232721459ce7_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_787cf56d0cb144163c1100624974ab1fe220b8cfccb7c8bc45b3af549008ad7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787cf56d0cb144163c1100624974ab1fe220b8cfccb7c8bc45b3af549008ad7f->enter($__internal_787cf56d0cb144163c1100624974ab1fe220b8cfccb7c8bc45b3af549008ad7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_787cf56d0cb144163c1100624974ab1fe220b8cfccb7c8bc45b3af549008ad7f->leave($__internal_787cf56d0cb144163c1100624974ab1fe220b8cfccb7c8bc45b3af549008ad7f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_45522cc3d14f1a7cbc367172b3b472106ed4f88174ccf74a1bac0db00739ea23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45522cc3d14f1a7cbc367172b3b472106ed4f88174ccf74a1bac0db00739ea23->enter($__internal_45522cc3d14f1a7cbc367172b3b472106ed4f88174ccf74a1bac0db00739ea23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_anomalies");
        echo "\">Anomalies signalées</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_anomalie_add");
        echo "\">Signaler une anomalie</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            <div class=\"notifications-block\">
              <div class=\"notifications-header\">Mise à jour d'une anomalie</div>
              <div class=\"notifications-content\">
                ";
        // line 29
        echo "                ";
        $this->loadTemplate("LGPUserBundle:Anomalie:formulaire.html.twig", "LGPUserBundle:Anomalie:update.html.twig", 29)->display($context);
        // line 30
        echo "                  
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  
";
        
        $__internal_45522cc3d14f1a7cbc367172b3b472106ed4f88174ccf74a1bac0db00739ea23->leave($__internal_45522cc3d14f1a7cbc367172b3b472106ed4f88174ccf74a1bac0db00739ea23_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Anomalie:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  99 => 29,  89 => 21,  85 => 20,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mise à jour d'une anomalie - {{ parent() }}
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
              <li><a href=\"{{ path('lgp_user_anomalies') }}\">Anomalies signalées</a></li>
              <li><a href=\"{{ path('lgp_user_anomalie_add') }}\">Signaler une anomalie</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            <div class=\"notifications-block\">
              <div class=\"notifications-header\">Mise à jour d'une anomalie</div>
              <div class=\"notifications-content\">
                {#  Inclusion du formulaire #}
                {% include 'LGPUserBundle:Anomalie:formulaire.html.twig' %}
                  
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
