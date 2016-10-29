<?php

/* LGPUserBundle:Anomalie:add.html.twig */
class __TwigTemplate_9cef9477f50b04e67d07d8123d478f5d5d7739cbb9ecca89b88753f5293ed096 extends Twig_Template
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
        $__internal_d6e68344e99c41034f017d4fc78a2745bd575c328e320417c305ebdaed9ef3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e68344e99c41034f017d4fc78a2745bd575c328e320417c305ebdaed9ef3bf->enter($__internal_d6e68344e99c41034f017d4fc78a2745bd575c328e320417c305ebdaed9ef3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6e68344e99c41034f017d4fc78a2745bd575c328e320417c305ebdaed9ef3bf->leave($__internal_d6e68344e99c41034f017d4fc78a2745bd575c328e320417c305ebdaed9ef3bf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_980545027400c6274205a28443dec966b57c652807ab71dd669586c225f798ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980545027400c6274205a28443dec966b57c652807ab71dd669586c225f798ca->enter($__internal_980545027400c6274205a28443dec966b57c652807ab71dd669586c225f798ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_980545027400c6274205a28443dec966b57c652807ab71dd669586c225f798ca->leave($__internal_980545027400c6274205a28443dec966b57c652807ab71dd669586c225f798ca_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_60b785e26c2948addaae9bbba610458e6d357bdcfa320a565ee90e81bfcb0bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b785e26c2948addaae9bbba610458e6d357bdcfa320a565ee90e81bfcb0bf3->enter($__internal_60b785e26c2948addaae9bbba610458e6d357bdcfa320a565ee90e81bfcb0bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_60b785e26c2948addaae9bbba610458e6d357bdcfa320a565ee90e81bfcb0bf3->leave($__internal_60b785e26c2948addaae9bbba610458e6d357bdcfa320a565ee90e81bfcb0bf3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e92d11dfc42015ed51431aa58e2722974f6920aeb86ece37826848192399679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e92d11dfc42015ed51431aa58e2722974f6920aeb86ece37826848192399679->enter($__internal_9e92d11dfc42015ed51431aa58e2722974f6920aeb86ece37826848192399679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9e92d11dfc42015ed51431aa58e2722974f6920aeb86ece37826848192399679->leave($__internal_9e92d11dfc42015ed51431aa58e2722974f6920aeb86ece37826848192399679_prof);

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
