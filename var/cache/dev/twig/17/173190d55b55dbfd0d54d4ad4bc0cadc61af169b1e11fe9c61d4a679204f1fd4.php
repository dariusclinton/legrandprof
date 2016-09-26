<?php

/* LGPUserBundle:Indisponibilite:add.html.twig */
class __TwigTemplate_b4a2ae18125a64658497fbdb2d94eb4e05eb90c267bfb764bb42e05258864eef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 1);
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
        $__internal_e791a78e3f5c8b9ee807023874c29c8026a871968a77e9def173d3ccc6a4fff1 = $this->env->getExtension("native_profiler");
        $__internal_e791a78e3f5c8b9ee807023874c29c8026a871968a77e9def173d3ccc6a4fff1->enter($__internal_e791a78e3f5c8b9ee807023874c29c8026a871968a77e9def173d3ccc6a4fff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e791a78e3f5c8b9ee807023874c29c8026a871968a77e9def173d3ccc6a4fff1->leave($__internal_e791a78e3f5c8b9ee807023874c29c8026a871968a77e9def173d3ccc6a4fff1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f769e3a0a59ff19083c6ae409f1622e40d145a956ceb667e46cb5cd03209888a = $this->env->getExtension("native_profiler");
        $__internal_f769e3a0a59ff19083c6ae409f1622e40d145a956ceb667e46cb5cd03209888a->enter($__internal_f769e3a0a59ff19083c6ae409f1622e40d145a956ceb667e46cb5cd03209888a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f769e3a0a59ff19083c6ae409f1622e40d145a956ceb667e46cb5cd03209888a->leave($__internal_f769e3a0a59ff19083c6ae409f1622e40d145a956ceb667e46cb5cd03209888a_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_91be8bfff867736843514327f5542fe1639300eede297cd38865123770189a31 = $this->env->getExtension("native_profiler");
        $__internal_91be8bfff867736843514327f5542fe1639300eede297cd38865123770189a31->enter($__internal_91be8bfff867736843514327f5542fe1639300eede297cd38865123770189a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_91be8bfff867736843514327f5542fe1639300eede297cd38865123770189a31->leave($__internal_91be8bfff867736843514327f5542fe1639300eede297cd38865123770189a31_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d4c0d115e6138633ccbcda3f97a2acf2492b19404c1d7695b0a91fb75a0e385 = $this->env->getExtension("native_profiler");
        $__internal_8d4c0d115e6138633ccbcda3f97a2acf2492b19404c1d7695b0a91fb75a0e385->enter($__internal_8d4c0d115e6138633ccbcda3f97a2acf2492b19404c1d7695b0a91fb75a0e385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite");
        echo "\">Mes indisponibilités</a></li>
              <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite_add");
        echo "\">Signaler une indisponibilité</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Signaler une indisponibilité</div>
                <div class=\"notifications-content\">
                    
                    ";
        // line 30
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 30)->display($context);
        // line 31
        echo "                </div>
              </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  
  
";
        
        $__internal_8d4c0d115e6138633ccbcda3f97a2acf2492b19404c1d7695b0a91fb75a0e385->leave($__internal_8d4c0d115e6138633ccbcda3f97a2acf2492b19404c1d7695b0a91fb75a0e385_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  101 => 30,  90 => 22,  86 => 21,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Ajout d'une indisponibilité - {{ parent() }}
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
                <div class=\"notifications-header\">Signaler une indisponibilité</div>
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
