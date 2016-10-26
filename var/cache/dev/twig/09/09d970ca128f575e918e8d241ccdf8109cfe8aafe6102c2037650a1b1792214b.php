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
        $__internal_cafb6973935f2ab27d2fc22d21f9a003216ef6a413f7112b4f44c8383e8a1321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cafb6973935f2ab27d2fc22d21f9a003216ef6a413f7112b4f44c8383e8a1321->enter($__internal_cafb6973935f2ab27d2fc22d21f9a003216ef6a413f7112b4f44c8383e8a1321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cafb6973935f2ab27d2fc22d21f9a003216ef6a413f7112b4f44c8383e8a1321->leave($__internal_cafb6973935f2ab27d2fc22d21f9a003216ef6a413f7112b4f44c8383e8a1321_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_55fddaddac58aa5331a6769d90dd0f0e1a57221b9551bdc1e465ad06863b11ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55fddaddac58aa5331a6769d90dd0f0e1a57221b9551bdc1e465ad06863b11ce->enter($__internal_55fddaddac58aa5331a6769d90dd0f0e1a57221b9551bdc1e465ad06863b11ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_55fddaddac58aa5331a6769d90dd0f0e1a57221b9551bdc1e465ad06863b11ce->leave($__internal_55fddaddac58aa5331a6769d90dd0f0e1a57221b9551bdc1e465ad06863b11ce_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_4a3d5955c66257827b699ac2df8c45d71e040610f58fe7530659fa21d24c6d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3d5955c66257827b699ac2df8c45d71e040610f58fe7530659fa21d24c6d12->enter($__internal_4a3d5955c66257827b699ac2df8c45d71e040610f58fe7530659fa21d24c6d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_4a3d5955c66257827b699ac2df8c45d71e040610f58fe7530659fa21d24c6d12->leave($__internal_4a3d5955c66257827b699ac2df8c45d71e040610f58fe7530659fa21d24c6d12_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cb4b5d330f54d43ae79d1a8e4d1757987a0a34e6fda4f3e3517bf28165f5267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb4b5d330f54d43ae79d1a8e4d1757987a0a34e6fda4f3e3517bf28165f5267->enter($__internal_4cb4b5d330f54d43ae79d1a8e4d1757987a0a34e6fda4f3e3517bf28165f5267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4cb4b5d330f54d43ae79d1a8e4d1757987a0a34e6fda4f3e3517bf28165f5267->leave($__internal_4cb4b5d330f54d43ae79d1a8e4d1757987a0a34e6fda4f3e3517bf28165f5267_prof);

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
