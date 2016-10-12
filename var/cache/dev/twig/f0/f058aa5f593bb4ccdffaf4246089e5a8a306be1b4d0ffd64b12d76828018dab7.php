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
        $__internal_2192ea4affae015ec0d62a48af46b5156893f3ca8263a822556b2a0d99cc29c6 = $this->env->getExtension("native_profiler");
        $__internal_2192ea4affae015ec0d62a48af46b5156893f3ca8263a822556b2a0d99cc29c6->enter($__internal_2192ea4affae015ec0d62a48af46b5156893f3ca8263a822556b2a0d99cc29c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2192ea4affae015ec0d62a48af46b5156893f3ca8263a822556b2a0d99cc29c6->leave($__internal_2192ea4affae015ec0d62a48af46b5156893f3ca8263a822556b2a0d99cc29c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0404cc412d5956f5306789536863a02a21136135a90bfcc0c3ea82d282e322f = $this->env->getExtension("native_profiler");
        $__internal_a0404cc412d5956f5306789536863a02a21136135a90bfcc0c3ea82d282e322f->enter($__internal_a0404cc412d5956f5306789536863a02a21136135a90bfcc0c3ea82d282e322f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a0404cc412d5956f5306789536863a02a21136135a90bfcc0c3ea82d282e322f->leave($__internal_a0404cc412d5956f5306789536863a02a21136135a90bfcc0c3ea82d282e322f_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_4af2dd05630baa73ee36964d8988a9f3b7df7769a30ceb5f0cb714a306aa5245 = $this->env->getExtension("native_profiler");
        $__internal_4af2dd05630baa73ee36964d8988a9f3b7df7769a30ceb5f0cb714a306aa5245->enter($__internal_4af2dd05630baa73ee36964d8988a9f3b7df7769a30ceb5f0cb714a306aa5245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_4af2dd05630baa73ee36964d8988a9f3b7df7769a30ceb5f0cb714a306aa5245->leave($__internal_4af2dd05630baa73ee36964d8988a9f3b7df7769a30ceb5f0cb714a306aa5245_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b3d073fb141e22a0559aa46b6f957af99f052bae27d354791adac50b7b846d2 = $this->env->getExtension("native_profiler");
        $__internal_9b3d073fb141e22a0559aa46b6f957af99f052bae27d354791adac50b7b846d2->enter($__internal_9b3d073fb141e22a0559aa46b6f957af99f052bae27d354791adac50b7b846d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9b3d073fb141e22a0559aa46b6f957af99f052bae27d354791adac50b7b846d2->leave($__internal_9b3d073fb141e22a0559aa46b6f957af99f052bae27d354791adac50b7b846d2_prof);

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
