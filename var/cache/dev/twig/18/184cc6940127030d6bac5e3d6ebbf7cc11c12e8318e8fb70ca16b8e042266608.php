<?php

/* LGPUserBundle:Avis:update.html.twig */
class __TwigTemplate_441dc54e3edf3c254a14e708c88678c33b58742741d6c45f5f56afb80f44cdb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:update.html.twig", 1);
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
        $__internal_f87d4fee4a62489f1c6ac890c32b6b9f414a485f96043a54fa226f46c3924e92 = $this->env->getExtension("native_profiler");
        $__internal_f87d4fee4a62489f1c6ac890c32b6b9f414a485f96043a54fa226f46c3924e92->enter($__internal_f87d4fee4a62489f1c6ac890c32b6b9f414a485f96043a54fa226f46c3924e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f87d4fee4a62489f1c6ac890c32b6b9f414a485f96043a54fa226f46c3924e92->leave($__internal_f87d4fee4a62489f1c6ac890c32b6b9f414a485f96043a54fa226f46c3924e92_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a78f08f5657768cce7b1fa16ad5e0fbd805cd9fafa15b8527779b1abed1cd2d9 = $this->env->getExtension("native_profiler");
        $__internal_a78f08f5657768cce7b1fa16ad5e0fbd805cd9fafa15b8527779b1abed1cd2d9->enter($__internal_a78f08f5657768cce7b1fa16ad5e0fbd805cd9fafa15b8527779b1abed1cd2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a78f08f5657768cce7b1fa16ad5e0fbd805cd9fafa15b8527779b1abed1cd2d9->leave($__internal_a78f08f5657768cce7b1fa16ad5e0fbd805cd9fafa15b8527779b1abed1cd2d9_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_22e231316f309af0b5e60ef5170bd68ab40f82b10f6056a73d18b4453b8cf9cd = $this->env->getExtension("native_profiler");
        $__internal_22e231316f309af0b5e60ef5170bd68ab40f82b10f6056a73d18b4453b8cf9cd->enter($__internal_22e231316f309af0b5e60ef5170bd68ab40f82b10f6056a73d18b4453b8cf9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_22e231316f309af0b5e60ef5170bd68ab40f82b10f6056a73d18b4453b8cf9cd->leave($__internal_22e231316f309af0b5e60ef5170bd68ab40f82b10f6056a73d18b4453b8cf9cd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_662bd295fb8cdb464587c65a6eba44b1c50d56ad086fc3bce4585eb494b35769 = $this->env->getExtension("native_profiler");
        $__internal_662bd295fb8cdb464587c65a6eba44b1c50d56ad086fc3bce4585eb494b35769->enter($__internal_662bd295fb8cdb464587c65a6eba44b1c50d56ad086fc3bce4585eb494b35769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes avis</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lgp_user_avis");
        echo "\">Mes avis</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_avis_add");
        echo "\">Donner un avis</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Modifier un avis</div>
                <div class=\"notifications-content\">
                    ";
        // line 28
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 28)->display($context);
        // line 29
        echo "                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  
";
        
        $__internal_662bd295fb8cdb464587c65a6eba44b1c50d56ad086fc3bce4585eb494b35769->leave($__internal_662bd295fb8cdb464587c65a6eba44b1c50d56ad086fc3bce4585eb494b35769_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  99 => 28,  89 => 21,  85 => 20,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Modification d'un avis - {{ parent() }}
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
            <h3 class=\"title-block-dash\">Gérer mes avis</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_avis') }}\">Mes avis</a></li>
              <li><a href=\"{{ path('lgp_user_avis_add') }}\">Donner un avis</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Modifier un avis</div>
                <div class=\"notifications-content\">
                    {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}
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
