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
        $__internal_496e0ec11882f60c45aec4e55bf3480756a51d14e76fbef2f9806315b2b66a18 = $this->env->getExtension("native_profiler");
        $__internal_496e0ec11882f60c45aec4e55bf3480756a51d14e76fbef2f9806315b2b66a18->enter($__internal_496e0ec11882f60c45aec4e55bf3480756a51d14e76fbef2f9806315b2b66a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_496e0ec11882f60c45aec4e55bf3480756a51d14e76fbef2f9806315b2b66a18->leave($__internal_496e0ec11882f60c45aec4e55bf3480756a51d14e76fbef2f9806315b2b66a18_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4648c65f613b10533f1ab13ac3970740fafad8ece40c1c0bf4c1e704956b4613 = $this->env->getExtension("native_profiler");
        $__internal_4648c65f613b10533f1ab13ac3970740fafad8ece40c1c0bf4c1e704956b4613->enter($__internal_4648c65f613b10533f1ab13ac3970740fafad8ece40c1c0bf4c1e704956b4613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4648c65f613b10533f1ab13ac3970740fafad8ece40c1c0bf4c1e704956b4613->leave($__internal_4648c65f613b10533f1ab13ac3970740fafad8ece40c1c0bf4c1e704956b4613_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_c64a5d8a1e01e06b214af77671b2a0af6ffd344e31e5afa1260cd047b34e2abe = $this->env->getExtension("native_profiler");
        $__internal_c64a5d8a1e01e06b214af77671b2a0af6ffd344e31e5afa1260cd047b34e2abe->enter($__internal_c64a5d8a1e01e06b214af77671b2a0af6ffd344e31e5afa1260cd047b34e2abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_c64a5d8a1e01e06b214af77671b2a0af6ffd344e31e5afa1260cd047b34e2abe->leave($__internal_c64a5d8a1e01e06b214af77671b2a0af6ffd344e31e5afa1260cd047b34e2abe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_600c73c3c2d46acc19c575798d3087a3b2267829ec1f9c4f683622fc2ccebb10 = $this->env->getExtension("native_profiler");
        $__internal_600c73c3c2d46acc19c575798d3087a3b2267829ec1f9c4f683622fc2ccebb10->enter($__internal_600c73c3c2d46acc19c575798d3087a3b2267829ec1f9c4f683622fc2ccebb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_600c73c3c2d46acc19c575798d3087a3b2267829ec1f9c4f683622fc2ccebb10->leave($__internal_600c73c3c2d46acc19c575798d3087a3b2267829ec1f9c4f683622fc2ccebb10_prof);

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
