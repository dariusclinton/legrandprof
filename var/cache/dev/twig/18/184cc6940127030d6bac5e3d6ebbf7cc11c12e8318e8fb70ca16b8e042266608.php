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
        $__internal_ec84747e2ab3b4b13bd816e4a835a1c35807d858d2904a1940bd4b5ebc3bcad6 = $this->env->getExtension("native_profiler");
        $__internal_ec84747e2ab3b4b13bd816e4a835a1c35807d858d2904a1940bd4b5ebc3bcad6->enter($__internal_ec84747e2ab3b4b13bd816e4a835a1c35807d858d2904a1940bd4b5ebc3bcad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec84747e2ab3b4b13bd816e4a835a1c35807d858d2904a1940bd4b5ebc3bcad6->leave($__internal_ec84747e2ab3b4b13bd816e4a835a1c35807d858d2904a1940bd4b5ebc3bcad6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d057a6cce30549fcb9024c32c5be5b18fbad488873997fde8770a11a8b579c3 = $this->env->getExtension("native_profiler");
        $__internal_7d057a6cce30549fcb9024c32c5be5b18fbad488873997fde8770a11a8b579c3->enter($__internal_7d057a6cce30549fcb9024c32c5be5b18fbad488873997fde8770a11a8b579c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7d057a6cce30549fcb9024c32c5be5b18fbad488873997fde8770a11a8b579c3->leave($__internal_7d057a6cce30549fcb9024c32c5be5b18fbad488873997fde8770a11a8b579c3_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_c01a66ff361d76dd4a324af60f38eea0d171e7cc262e8e2bf8fafe79df424b37 = $this->env->getExtension("native_profiler");
        $__internal_c01a66ff361d76dd4a324af60f38eea0d171e7cc262e8e2bf8fafe79df424b37->enter($__internal_c01a66ff361d76dd4a324af60f38eea0d171e7cc262e8e2bf8fafe79df424b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_c01a66ff361d76dd4a324af60f38eea0d171e7cc262e8e2bf8fafe79df424b37->leave($__internal_c01a66ff361d76dd4a324af60f38eea0d171e7cc262e8e2bf8fafe79df424b37_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_015557f8120bb5f42ec292ccd8e1405b8df3cc64ee2b91c1db9f51f9a0b44a1b = $this->env->getExtension("native_profiler");
        $__internal_015557f8120bb5f42ec292ccd8e1405b8df3cc64ee2b91c1db9f51f9a0b44a1b->enter($__internal_015557f8120bb5f42ec292ccd8e1405b8df3cc64ee2b91c1db9f51f9a0b44a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_015557f8120bb5f42ec292ccd8e1405b8df3cc64ee2b91c1db9f51f9a0b44a1b->leave($__internal_015557f8120bb5f42ec292ccd8e1405b8df3cc64ee2b91c1db9f51f9a0b44a1b_prof);

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
