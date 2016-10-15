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
        $__internal_d13e33de1de256984f84c99dae4d4e9b10fdd1b6e6b9e498c318e5c9a3b3cbf8 = $this->env->getExtension("native_profiler");
        $__internal_d13e33de1de256984f84c99dae4d4e9b10fdd1b6e6b9e498c318e5c9a3b3cbf8->enter($__internal_d13e33de1de256984f84c99dae4d4e9b10fdd1b6e6b9e498c318e5c9a3b3cbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d13e33de1de256984f84c99dae4d4e9b10fdd1b6e6b9e498c318e5c9a3b3cbf8->leave($__internal_d13e33de1de256984f84c99dae4d4e9b10fdd1b6e6b9e498c318e5c9a3b3cbf8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68f2daaabcc114692181a555f22aceca32245ea4df0d418e471f64bb728fbd1e = $this->env->getExtension("native_profiler");
        $__internal_68f2daaabcc114692181a555f22aceca32245ea4df0d418e471f64bb728fbd1e->enter($__internal_68f2daaabcc114692181a555f22aceca32245ea4df0d418e471f64bb728fbd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Proposition d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_68f2daaabcc114692181a555f22aceca32245ea4df0d418e471f64bb728fbd1e->leave($__internal_68f2daaabcc114692181a555f22aceca32245ea4df0d418e471f64bb728fbd1e_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_f79aabd5ea0b9bb9967824d778fc12039706a39d0d4efce3c1684db5e8b51d28 = $this->env->getExtension("native_profiler");
        $__internal_f79aabd5ea0b9bb9967824d778fc12039706a39d0d4efce3c1684db5e8b51d28->enter($__internal_f79aabd5ea0b9bb9967824d778fc12039706a39d0d4efce3c1684db5e8b51d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_f79aabd5ea0b9bb9967824d778fc12039706a39d0d4efce3c1684db5e8b51d28->leave($__internal_f79aabd5ea0b9bb9967824d778fc12039706a39d0d4efce3c1684db5e8b51d28_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_27c47a1450ac5bc9dc48ebc90ec26a1ae2e57821cc7064418331b9b1dc752c85 = $this->env->getExtension("native_profiler");
        $__internal_27c47a1450ac5bc9dc48ebc90ec26a1ae2e57821cc7064418331b9b1dc752c85->enter($__internal_27c47a1450ac5bc9dc48ebc90ec26a1ae2e57821cc7064418331b9b1dc752c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_27c47a1450ac5bc9dc48ebc90ec26a1ae2e57821cc7064418331b9b1dc752c85->leave($__internal_27c47a1450ac5bc9dc48ebc90ec26a1ae2e57821cc7064418331b9b1dc752c85_prof);

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
