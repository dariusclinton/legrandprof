<?php

/* LGPUserBundle:Avis:add.html.twig */
class __TwigTemplate_4d7c8a9861e340f0ff8fba9c9a7ab62f96f8a7b9ffbba21677bf1578b21ff741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:add.html.twig", 1);
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
        $__internal_350fd98b8f87d48a8e90ba02a0d137a90c895fe1e1f15e285b9863126aeceaf8 = $this->env->getExtension("native_profiler");
        $__internal_350fd98b8f87d48a8e90ba02a0d137a90c895fe1e1f15e285b9863126aeceaf8->enter($__internal_350fd98b8f87d48a8e90ba02a0d137a90c895fe1e1f15e285b9863126aeceaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_350fd98b8f87d48a8e90ba02a0d137a90c895fe1e1f15e285b9863126aeceaf8->leave($__internal_350fd98b8f87d48a8e90ba02a0d137a90c895fe1e1f15e285b9863126aeceaf8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_683cd1f6a1b39b5ecccbbb55634a9d0265069da361ec8550892b78294ec16dd3 = $this->env->getExtension("native_profiler");
        $__internal_683cd1f6a1b39b5ecccbbb55634a9d0265069da361ec8550892b78294ec16dd3->enter($__internal_683cd1f6a1b39b5ecccbbb55634a9d0265069da361ec8550892b78294ec16dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_683cd1f6a1b39b5ecccbbb55634a9d0265069da361ec8550892b78294ec16dd3->leave($__internal_683cd1f6a1b39b5ecccbbb55634a9d0265069da361ec8550892b78294ec16dd3_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_d7e5a9ed2ca239da075e19563db845f7b2bff6961ac92a1cfb9f7aa5dbae1c4b = $this->env->getExtension("native_profiler");
        $__internal_d7e5a9ed2ca239da075e19563db845f7b2bff6961ac92a1cfb9f7aa5dbae1c4b->enter($__internal_d7e5a9ed2ca239da075e19563db845f7b2bff6961ac92a1cfb9f7aa5dbae1c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_d7e5a9ed2ca239da075e19563db845f7b2bff6961ac92a1cfb9f7aa5dbae1c4b->leave($__internal_d7e5a9ed2ca239da075e19563db845f7b2bff6961ac92a1cfb9f7aa5dbae1c4b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6a7768d3099ebaa62c0254f4b8207a7a374e118864b50c3ce9a818042c278e7 = $this->env->getExtension("native_profiler");
        $__internal_c6a7768d3099ebaa62c0254f4b8207a7a374e118864b50c3ce9a818042c278e7->enter($__internal_c6a7768d3099ebaa62c0254f4b8207a7a374e118864b50c3ce9a818042c278e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <div class=\"notifications-header\">Donner un avis</div>
                <div class=\"notifications-content\">
                    ";
        // line 28
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 28)->display($context);
        // line 29
        echo "                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
    
  
";
        
        $__internal_c6a7768d3099ebaa62c0254f4b8207a7a374e118864b50c3ce9a818042c278e7->leave($__internal_c6a7768d3099ebaa62c0254f4b8207a7a374e118864b50c3ce9a818042c278e7_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:add.html.twig";
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
  Ajout d'avis - {{ parent() }}
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
                <div class=\"notifications-header\">Donner un avis</div>
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
