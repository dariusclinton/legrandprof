<?php

/* LGPUserBundle:Anomalie:update.html.twig */
class __TwigTemplate_14d3ec17c7aa6eb887a362c3cd122d2351197646d482082c262d343bf9112afa extends Twig_Template
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
        $__internal_738bca7c09cead28516dcc208509aae94bba4041f96ec5ab042000e15dbba875 = $this->env->getExtension("native_profiler");
        $__internal_738bca7c09cead28516dcc208509aae94bba4041f96ec5ab042000e15dbba875->enter($__internal_738bca7c09cead28516dcc208509aae94bba4041f96ec5ab042000e15dbba875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_738bca7c09cead28516dcc208509aae94bba4041f96ec5ab042000e15dbba875->leave($__internal_738bca7c09cead28516dcc208509aae94bba4041f96ec5ab042000e15dbba875_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_767615e5370193caf7157786c5feab9de802365a59cd2238789de0aee4f6a80d = $this->env->getExtension("native_profiler");
        $__internal_767615e5370193caf7157786c5feab9de802365a59cd2238789de0aee4f6a80d->enter($__internal_767615e5370193caf7157786c5feab9de802365a59cd2238789de0aee4f6a80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_767615e5370193caf7157786c5feab9de802365a59cd2238789de0aee4f6a80d->leave($__internal_767615e5370193caf7157786c5feab9de802365a59cd2238789de0aee4f6a80d_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_476abc64a67aa4d1e2e38fff948c5d4aa88a1c7c7ed62b9985f38c645a0ffae7 = $this->env->getExtension("native_profiler");
        $__internal_476abc64a67aa4d1e2e38fff948c5d4aa88a1c7c7ed62b9985f38c645a0ffae7->enter($__internal_476abc64a67aa4d1e2e38fff948c5d4aa88a1c7c7ed62b9985f38c645a0ffae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_476abc64a67aa4d1e2e38fff948c5d4aa88a1c7c7ed62b9985f38c645a0ffae7->leave($__internal_476abc64a67aa4d1e2e38fff948c5d4aa88a1c7c7ed62b9985f38c645a0ffae7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_65ab006d1787bb35d3b574d83cad372f48142cad2657613db3fb1c2f955038a9 = $this->env->getExtension("native_profiler");
        $__internal_65ab006d1787bb35d3b574d83cad372f48142cad2657613db3fb1c2f955038a9->enter($__internal_65ab006d1787bb35d3b574d83cad372f48142cad2657613db3fb1c2f955038a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_65ab006d1787bb35d3b574d83cad372f48142cad2657613db3fb1c2f955038a9->leave($__internal_65ab006d1787bb35d3b574d83cad372f48142cad2657613db3fb1c2f955038a9_prof);

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
