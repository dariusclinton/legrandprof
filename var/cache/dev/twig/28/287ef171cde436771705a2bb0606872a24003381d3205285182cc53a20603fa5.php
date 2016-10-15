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
        $__internal_e9b9f9972fd79e2d7c421991ff7ce79fe7319773432e38d98a56e9dd40d87d40 = $this->env->getExtension("native_profiler");
        $__internal_e9b9f9972fd79e2d7c421991ff7ce79fe7319773432e38d98a56e9dd40d87d40->enter($__internal_e9b9f9972fd79e2d7c421991ff7ce79fe7319773432e38d98a56e9dd40d87d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9b9f9972fd79e2d7c421991ff7ce79fe7319773432e38d98a56e9dd40d87d40->leave($__internal_e9b9f9972fd79e2d7c421991ff7ce79fe7319773432e38d98a56e9dd40d87d40_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e2c738319e71f626020c9e4a387deaaaa37af44d9fd9c43bf81763dc9869441 = $this->env->getExtension("native_profiler");
        $__internal_6e2c738319e71f626020c9e4a387deaaaa37af44d9fd9c43bf81763dc9869441->enter($__internal_6e2c738319e71f626020c9e4a387deaaaa37af44d9fd9c43bf81763dc9869441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6e2c738319e71f626020c9e4a387deaaaa37af44d9fd9c43bf81763dc9869441->leave($__internal_6e2c738319e71f626020c9e4a387deaaaa37af44d9fd9c43bf81763dc9869441_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_5605056649785b677be529003a07703a3d257357a403f79e05fa8837230140a6 = $this->env->getExtension("native_profiler");
        $__internal_5605056649785b677be529003a07703a3d257357a403f79e05fa8837230140a6->enter($__internal_5605056649785b677be529003a07703a3d257357a403f79e05fa8837230140a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_5605056649785b677be529003a07703a3d257357a403f79e05fa8837230140a6->leave($__internal_5605056649785b677be529003a07703a3d257357a403f79e05fa8837230140a6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9414c6775dcd3688ac7d41e093d66783da1a2c958f5f153b67d36f100a6064f = $this->env->getExtension("native_profiler");
        $__internal_d9414c6775dcd3688ac7d41e093d66783da1a2c958f5f153b67d36f100a6064f->enter($__internal_d9414c6775dcd3688ac7d41e093d66783da1a2c958f5f153b67d36f100a6064f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d9414c6775dcd3688ac7d41e093d66783da1a2c958f5f153b67d36f100a6064f->leave($__internal_d9414c6775dcd3688ac7d41e093d66783da1a2c958f5f153b67d36f100a6064f_prof);

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
