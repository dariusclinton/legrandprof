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
        $__internal_0427a0f5037aebb26434fa39605186ddbd85a84c12fa379d40b9e5479315c0e8 = $this->env->getExtension("native_profiler");
        $__internal_0427a0f5037aebb26434fa39605186ddbd85a84c12fa379d40b9e5479315c0e8->enter($__internal_0427a0f5037aebb26434fa39605186ddbd85a84c12fa379d40b9e5479315c0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0427a0f5037aebb26434fa39605186ddbd85a84c12fa379d40b9e5479315c0e8->leave($__internal_0427a0f5037aebb26434fa39605186ddbd85a84c12fa379d40b9e5479315c0e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cea3c86fd0b8bf7ff95bb47d1d3f50c880b4b0e6e04399a796a25256d0c4bc0 = $this->env->getExtension("native_profiler");
        $__internal_0cea3c86fd0b8bf7ff95bb47d1d3f50c880b4b0e6e04399a796a25256d0c4bc0->enter($__internal_0cea3c86fd0b8bf7ff95bb47d1d3f50c880b4b0e6e04399a796a25256d0c4bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0cea3c86fd0b8bf7ff95bb47d1d3f50c880b4b0e6e04399a796a25256d0c4bc0->leave($__internal_0cea3c86fd0b8bf7ff95bb47d1d3f50c880b4b0e6e04399a796a25256d0c4bc0_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_53f68d85065db584f00cfdc7cb2b91bed7108b7be202b81fdc8ffcb1ae13bbee = $this->env->getExtension("native_profiler");
        $__internal_53f68d85065db584f00cfdc7cb2b91bed7108b7be202b81fdc8ffcb1ae13bbee->enter($__internal_53f68d85065db584f00cfdc7cb2b91bed7108b7be202b81fdc8ffcb1ae13bbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_53f68d85065db584f00cfdc7cb2b91bed7108b7be202b81fdc8ffcb1ae13bbee->leave($__internal_53f68d85065db584f00cfdc7cb2b91bed7108b7be202b81fdc8ffcb1ae13bbee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_895c434e96766a1a95947223ba98a4a51037cb8d3e0f859bfa31c2338eeaeea7 = $this->env->getExtension("native_profiler");
        $__internal_895c434e96766a1a95947223ba98a4a51037cb8d3e0f859bfa31c2338eeaeea7->enter($__internal_895c434e96766a1a95947223ba98a4a51037cb8d3e0f859bfa31c2338eeaeea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_895c434e96766a1a95947223ba98a4a51037cb8d3e0f859bfa31c2338eeaeea7->leave($__internal_895c434e96766a1a95947223ba98a4a51037cb8d3e0f859bfa31c2338eeaeea7_prof);

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
