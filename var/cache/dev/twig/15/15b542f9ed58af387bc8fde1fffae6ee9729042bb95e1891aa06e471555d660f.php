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
        $__internal_7279bb9bfa5ee442575c116e92bd56552bc4518fc0eb44d9dcfa351464823e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7279bb9bfa5ee442575c116e92bd56552bc4518fc0eb44d9dcfa351464823e74->enter($__internal_7279bb9bfa5ee442575c116e92bd56552bc4518fc0eb44d9dcfa351464823e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7279bb9bfa5ee442575c116e92bd56552bc4518fc0eb44d9dcfa351464823e74->leave($__internal_7279bb9bfa5ee442575c116e92bd56552bc4518fc0eb44d9dcfa351464823e74_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_98d2efd942ff0aec52c6b2cbc5f165b487220670d6eae27e434aab184e9359aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d2efd942ff0aec52c6b2cbc5f165b487220670d6eae27e434aab184e9359aa->enter($__internal_98d2efd942ff0aec52c6b2cbc5f165b487220670d6eae27e434aab184e9359aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_98d2efd942ff0aec52c6b2cbc5f165b487220670d6eae27e434aab184e9359aa->leave($__internal_98d2efd942ff0aec52c6b2cbc5f165b487220670d6eae27e434aab184e9359aa_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_4549aa4638a720ae0b08b244f59748f03b94240f7ee734a3737453838855eba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4549aa4638a720ae0b08b244f59748f03b94240f7ee734a3737453838855eba5->enter($__internal_4549aa4638a720ae0b08b244f59748f03b94240f7ee734a3737453838855eba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_4549aa4638a720ae0b08b244f59748f03b94240f7ee734a3737453838855eba5->leave($__internal_4549aa4638a720ae0b08b244f59748f03b94240f7ee734a3737453838855eba5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f382bf0a766710c75b9563cd9f5dc348e8a30b12bff1bd0350aa30962f4fa6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f382bf0a766710c75b9563cd9f5dc348e8a30b12bff1bd0350aa30962f4fa6dc->enter($__internal_f382bf0a766710c75b9563cd9f5dc348e8a30b12bff1bd0350aa30962f4fa6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f382bf0a766710c75b9563cd9f5dc348e8a30b12bff1bd0350aa30962f4fa6dc->leave($__internal_f382bf0a766710c75b9563cd9f5dc348e8a30b12bff1bd0350aa30962f4fa6dc_prof);

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
