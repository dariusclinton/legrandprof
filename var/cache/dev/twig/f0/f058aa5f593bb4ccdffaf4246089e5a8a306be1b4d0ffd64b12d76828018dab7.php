<?php

/* LGPUserBundle:Anomalie:add.html.twig */
class __TwigTemplate_8226bb4a341e33704bba92cd1ebd60e2eb441189895a91ad1898c56030977bdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Anomalie:add.html.twig", 1);
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
        $__internal_eb2e625e74539d84e9d46370907d5be4b9aad65126e5936adcda40865ffe061d = $this->env->getExtension("native_profiler");
        $__internal_eb2e625e74539d84e9d46370907d5be4b9aad65126e5936adcda40865ffe061d->enter($__internal_eb2e625e74539d84e9d46370907d5be4b9aad65126e5936adcda40865ffe061d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb2e625e74539d84e9d46370907d5be4b9aad65126e5936adcda40865ffe061d->leave($__internal_eb2e625e74539d84e9d46370907d5be4b9aad65126e5936adcda40865ffe061d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c32151d5acb46ad230ac9ace623f7de0d28eca31076c8fec98836252a887f626 = $this->env->getExtension("native_profiler");
        $__internal_c32151d5acb46ad230ac9ace623f7de0d28eca31076c8fec98836252a887f626->enter($__internal_c32151d5acb46ad230ac9ace623f7de0d28eca31076c8fec98836252a887f626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c32151d5acb46ad230ac9ace623f7de0d28eca31076c8fec98836252a887f626->leave($__internal_c32151d5acb46ad230ac9ace623f7de0d28eca31076c8fec98836252a887f626_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_d45cf4e63e36fbaa49c915d6949830ff52002919bfdbc102250df81aaa3670c8 = $this->env->getExtension("native_profiler");
        $__internal_d45cf4e63e36fbaa49c915d6949830ff52002919bfdbc102250df81aaa3670c8->enter($__internal_d45cf4e63e36fbaa49c915d6949830ff52002919bfdbc102250df81aaa3670c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_d45cf4e63e36fbaa49c915d6949830ff52002919bfdbc102250df81aaa3670c8->leave($__internal_d45cf4e63e36fbaa49c915d6949830ff52002919bfdbc102250df81aaa3670c8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e452bc4d9122225e6e80f60a48098d6debf9fb090abca1c2a23747a3bd276b10 = $this->env->getExtension("native_profiler");
        $__internal_e452bc4d9122225e6e80f60a48098d6debf9fb090abca1c2a23747a3bd276b10->enter($__internal_e452bc4d9122225e6e80f60a48098d6debf9fb090abca1c2a23747a3bd276b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("lgp_user_anomalies");
        echo "\">Anomalies signalées</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_anomalie_add");
        echo "\">Signaler une anomalie</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            <div class=\"notifications-block\">
              <div class=\"notifications-header\">Signaler une anomalie</div>
              <div class=\"notifications-content\">
                ";
        // line 29
        echo "                ";
        $this->loadTemplate("LGPUserBundle:Anomalie:formulaire.html.twig", "LGPUserBundle:Anomalie:add.html.twig", 29)->display($context);
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
        
        $__internal_e452bc4d9122225e6e80f60a48098d6debf9fb090abca1c2a23747a3bd276b10->leave($__internal_e452bc4d9122225e6e80f60a48098d6debf9fb090abca1c2a23747a3bd276b10_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Anomalie:add.html.twig";
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
  Ajout d'une anomalie - {{ parent() }}
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
              <div class=\"notifications-header\">Signaler une anomalie</div>
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
