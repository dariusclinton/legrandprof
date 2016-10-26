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
        $__internal_752976ad873bb970bc394b0b06118b6df99a830298826581248e321accade19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752976ad873bb970bc394b0b06118b6df99a830298826581248e321accade19b->enter($__internal_752976ad873bb970bc394b0b06118b6df99a830298826581248e321accade19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_752976ad873bb970bc394b0b06118b6df99a830298826581248e321accade19b->leave($__internal_752976ad873bb970bc394b0b06118b6df99a830298826581248e321accade19b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_feabc7718db9aed7a9a8e6129e7cf88c4bd6de74d1516163810483d4dab85941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feabc7718db9aed7a9a8e6129e7cf88c4bd6de74d1516163810483d4dab85941->enter($__internal_feabc7718db9aed7a9a8e6129e7cf88c4bd6de74d1516163810483d4dab85941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_feabc7718db9aed7a9a8e6129e7cf88c4bd6de74d1516163810483d4dab85941->leave($__internal_feabc7718db9aed7a9a8e6129e7cf88c4bd6de74d1516163810483d4dab85941_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_85c51cc5107dafb04f94e7c20e6d007266de1265300c74f4118d2cde57780c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c51cc5107dafb04f94e7c20e6d007266de1265300c74f4118d2cde57780c8e->enter($__internal_85c51cc5107dafb04f94e7c20e6d007266de1265300c74f4118d2cde57780c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_85c51cc5107dafb04f94e7c20e6d007266de1265300c74f4118d2cde57780c8e->leave($__internal_85c51cc5107dafb04f94e7c20e6d007266de1265300c74f4118d2cde57780c8e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_21a154ba8fb24cb567e955678dcdf96a6a2fa856e82452b3d362b5f6501792bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a154ba8fb24cb567e955678dcdf96a6a2fa856e82452b3d362b5f6501792bb->enter($__internal_21a154ba8fb24cb567e955678dcdf96a6a2fa856e82452b3d362b5f6501792bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_21a154ba8fb24cb567e955678dcdf96a6a2fa856e82452b3d362b5f6501792bb->leave($__internal_21a154ba8fb24cb567e955678dcdf96a6a2fa856e82452b3d362b5f6501792bb_prof);

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
