<?php

/* LGPUserBundle:Indisponibilite:update.html.twig */
class __TwigTemplate_1ff4b89ce8e9c7f38a1d1ef94cc99b38448c5e2fdc584b147a837d4a1901fd7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 1);
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
        $__internal_17c0642353e83252af46bbdc635f4639438e56b3d65ecc2d54a30fece17304d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c0642353e83252af46bbdc635f4639438e56b3d65ecc2d54a30fece17304d0->enter($__internal_17c0642353e83252af46bbdc635f4639438e56b3d65ecc2d54a30fece17304d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17c0642353e83252af46bbdc635f4639438e56b3d65ecc2d54a30fece17304d0->leave($__internal_17c0642353e83252af46bbdc635f4639438e56b3d65ecc2d54a30fece17304d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a64c1ac70947071cecdbd8e0b51b186e68fb0c35fff3d657752ab64072697c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64c1ac70947071cecdbd8e0b51b186e68fb0c35fff3d657752ab64072697c66->enter($__internal_a64c1ac70947071cecdbd8e0b51b186e68fb0c35fff3d657752ab64072697c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a64c1ac70947071cecdbd8e0b51b186e68fb0c35fff3d657752ab64072697c66->leave($__internal_a64c1ac70947071cecdbd8e0b51b186e68fb0c35fff3d657752ab64072697c66_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_5b2617f1c82bfde255faa3aa33c9ec687ca8440853f2d5d2f3acb98a3d0b83f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2617f1c82bfde255faa3aa33c9ec687ca8440853f2d5d2f3acb98a3d0b83f4->enter($__internal_5b2617f1c82bfde255faa3aa33c9ec687ca8440853f2d5d2f3acb98a3d0b83f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_5b2617f1c82bfde255faa3aa33c9ec687ca8440853f2d5d2f3acb98a3d0b83f4->leave($__internal_5b2617f1c82bfde255faa3aa33c9ec687ca8440853f2d5d2f3acb98a3d0b83f4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f14bffe13fccd6b1cfd6bc6af3b920fe9795530866ac9ed0fbafb216145ab7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14bffe13fccd6b1cfd6bc6af3b920fe9795530866ac9ed0fbafb216145ab7ad->enter($__internal_f14bffe13fccd6b1cfd6bc6af3b920fe9795530866ac9ed0fbafb216145ab7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes indisponibilités</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_indisponibilite");
        echo "\">Mes indisponibilités</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_indisponibilite_add");
        echo "\">Signaler une indisponibilité</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mise à jour d'une indisponibilité</div>
                <div class=\"notifications-content\">
                    
                    ";
        // line 29
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 29)->display($context);
        // line 30
        echo "                </div>
              </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  
";
        
        $__internal_f14bffe13fccd6b1cfd6bc6af3b920fe9795530866ac9ed0fbafb216145ab7ad->leave($__internal_f14bffe13fccd6b1cfd6bc6af3b920fe9795530866ac9ed0fbafb216145ab7ad_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:update.html.twig";
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
  Mise à jour d'une indisponibilité - {{ parent() }}
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
            <h3 class=\"title-block-dash\">Gérer mes indisponibilités</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_prof_indisponibilite') }}\">Mes indisponibilités</a></li>
              <li><a href=\"{{ path('lgp_user_prof_indisponibilite_add') }}\">Signaler une indisponibilité</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mise à jour d'une indisponibilité</div>
                <div class=\"notifications-content\">
                    
                    {% include 'LGPUserBundle:Indisponibilite:formulaire.html.twig' %}
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
