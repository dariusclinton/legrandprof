<?php

/* LGPUserBundle:NouvelleCategorieCours:add.html.twig */
class __TwigTemplate_71999b132578628f8d4e1c2c094331800c290a9ceb98d63f9850f0d609e5242a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:NouvelleCategorieCours:add.html.twig", 1);
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
        $__internal_dd88cf554fa271daae9ba54c427951034851ca1fb041437715698e65e60b0c96 = $this->env->getExtension("native_profiler");
        $__internal_dd88cf554fa271daae9ba54c427951034851ca1fb041437715698e65e60b0c96->enter($__internal_dd88cf554fa271daae9ba54c427951034851ca1fb041437715698e65e60b0c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd88cf554fa271daae9ba54c427951034851ca1fb041437715698e65e60b0c96->leave($__internal_dd88cf554fa271daae9ba54c427951034851ca1fb041437715698e65e60b0c96_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_84ba28ab52d484c5e6959b9b26eac1050c8054ba4bcfa5e6a7169c3b830dac1c = $this->env->getExtension("native_profiler");
        $__internal_84ba28ab52d484c5e6959b9b26eac1050c8054ba4bcfa5e6a7169c3b830dac1c->enter($__internal_84ba28ab52d484c5e6959b9b26eac1050c8054ba4bcfa5e6a7169c3b830dac1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Proposition d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_84ba28ab52d484c5e6959b9b26eac1050c8054ba4bcfa5e6a7169c3b830dac1c->leave($__internal_84ba28ab52d484c5e6959b9b26eac1050c8054ba4bcfa5e6a7169c3b830dac1c_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_6ce58288ce53792a85953c953231c30cab53f60b6205c1b511e39dfa5680c4b8 = $this->env->getExtension("native_profiler");
        $__internal_6ce58288ce53792a85953c953231c30cab53f60b6205c1b511e39dfa5680c4b8->enter($__internal_6ce58288ce53792a85953c953231c30cab53f60b6205c1b511e39dfa5680c4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_6ce58288ce53792a85953c953231c30cab53f60b6205c1b511e39dfa5680c4b8->leave($__internal_6ce58288ce53792a85953c953231c30cab53f60b6205c1b511e39dfa5680c4b8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_013ee77add377b47416d88ee87d244e9b0b707a3abdce0512bcaa0d02f1a4003 = $this->env->getExtension("native_profiler");
        $__internal_013ee77add377b47416d88ee87d244e9b0b707a3abdce0512bcaa0d02f1a4003->enter($__internal_013ee77add377b47416d88ee87d244e9b0b707a3abdce0512bcaa0d02f1a4003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Categories de cours</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lgp_user_nouvelles_categories_cours");
        echo "\">Catégories de cours</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_nouvelle_categorie_cours_add");
        echo "\">Ajouter une catégorie</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Ajouter une catégorie</div>
                <div class=\"notifications-content\">
                    ";
        // line 28
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:add.html.twig", 28)->display($context);
        // line 29
        echo "                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
  
  
";
        
        $__internal_013ee77add377b47416d88ee87d244e9b0b707a3abdce0512bcaa0d02f1a4003->leave($__internal_013ee77add377b47416d88ee87d244e9b0b707a3abdce0512bcaa0d02f1a4003_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:NouvelleCategorieCours:add.html.twig";
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
  Proposition d'une nouvelle catégorie de cours - {{ parent() }}
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
            <h3 class=\"title-block-dash\">Categories de cours</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_nouvelles_categories_cours') }}\">Catégories de cours</a></li>
              <li><a href=\"{{ path('lgp_user_nouvelle_categorie_cours_add') }}\">Ajouter une catégorie</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Ajouter une catégorie</div>
                <div class=\"notifications-content\">
                    {% include 'LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig' %}
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
