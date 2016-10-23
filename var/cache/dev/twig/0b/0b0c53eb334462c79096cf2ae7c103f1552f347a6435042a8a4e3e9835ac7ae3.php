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
        $__internal_a82443456826063644858a3c81f6d2fadd438529f1689ff5666514a143db9990 = $this->env->getExtension("native_profiler");
        $__internal_a82443456826063644858a3c81f6d2fadd438529f1689ff5666514a143db9990->enter($__internal_a82443456826063644858a3c81f6d2fadd438529f1689ff5666514a143db9990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a82443456826063644858a3c81f6d2fadd438529f1689ff5666514a143db9990->leave($__internal_a82443456826063644858a3c81f6d2fadd438529f1689ff5666514a143db9990_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2246b4cb82fa820be3fb621b13f4a1e0bdbdc71d655ec4d74f15c853839edb98 = $this->env->getExtension("native_profiler");
        $__internal_2246b4cb82fa820be3fb621b13f4a1e0bdbdc71d655ec4d74f15c853839edb98->enter($__internal_2246b4cb82fa820be3fb621b13f4a1e0bdbdc71d655ec4d74f15c853839edb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2246b4cb82fa820be3fb621b13f4a1e0bdbdc71d655ec4d74f15c853839edb98->leave($__internal_2246b4cb82fa820be3fb621b13f4a1e0bdbdc71d655ec4d74f15c853839edb98_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_0f0da87c126f094436fe0cd937694a38f91c8a413708fdbc0feefcb9ddcb290a = $this->env->getExtension("native_profiler");
        $__internal_0f0da87c126f094436fe0cd937694a38f91c8a413708fdbc0feefcb9ddcb290a->enter($__internal_0f0da87c126f094436fe0cd937694a38f91c8a413708fdbc0feefcb9ddcb290a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_0f0da87c126f094436fe0cd937694a38f91c8a413708fdbc0feefcb9ddcb290a->leave($__internal_0f0da87c126f094436fe0cd937694a38f91c8a413708fdbc0feefcb9ddcb290a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_601f610f1037b76b552c7b80eea636c19365cbcceaca30744dd9c44d1ded3db4 = $this->env->getExtension("native_profiler");
        $__internal_601f610f1037b76b552c7b80eea636c19365cbcceaca30744dd9c44d1ded3db4->enter($__internal_601f610f1037b76b552c7b80eea636c19365cbcceaca30744dd9c44d1ded3db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_601f610f1037b76b552c7b80eea636c19365cbcceaca30744dd9c44d1ded3db4->leave($__internal_601f610f1037b76b552c7b80eea636c19365cbcceaca30744dd9c44d1ded3db4_prof);

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
