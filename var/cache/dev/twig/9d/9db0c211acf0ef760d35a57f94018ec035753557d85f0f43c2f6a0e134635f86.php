<?php

/* LGPUserBundle:NouvelleCategorieCours:add.html.twig */
class __TwigTemplate_231cb8bead36a48d7dbd8af854db3c56c83419a14e3b5752e2b0065eb032d6ca extends Twig_Template
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
        $__internal_8ec4f2136d08123417992a16b628105bb657db809e89fbdc59bd39425c195bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec4f2136d08123417992a16b628105bb657db809e89fbdc59bd39425c195bd2->enter($__internal_8ec4f2136d08123417992a16b628105bb657db809e89fbdc59bd39425c195bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ec4f2136d08123417992a16b628105bb657db809e89fbdc59bd39425c195bd2->leave($__internal_8ec4f2136d08123417992a16b628105bb657db809e89fbdc59bd39425c195bd2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_34fd00f9c2b898aa2e9979074280ea71df587d867c1250b1ceb77aab64f5ed13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fd00f9c2b898aa2e9979074280ea71df587d867c1250b1ceb77aab64f5ed13->enter($__internal_34fd00f9c2b898aa2e9979074280ea71df587d867c1250b1ceb77aab64f5ed13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Proposition d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_34fd00f9c2b898aa2e9979074280ea71df587d867c1250b1ceb77aab64f5ed13->leave($__internal_34fd00f9c2b898aa2e9979074280ea71df587d867c1250b1ceb77aab64f5ed13_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_c51cb1bc879dfd8aac7692979122d773a93fa1a9bd6345a9c42fd6bd7c93912b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51cb1bc879dfd8aac7692979122d773a93fa1a9bd6345a9c42fd6bd7c93912b->enter($__internal_c51cb1bc879dfd8aac7692979122d773a93fa1a9bd6345a9c42fd6bd7c93912b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_c51cb1bc879dfd8aac7692979122d773a93fa1a9bd6345a9c42fd6bd7c93912b->leave($__internal_c51cb1bc879dfd8aac7692979122d773a93fa1a9bd6345a9c42fd6bd7c93912b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f810f8b97eabe513d0389d7a26e0473175e14674dce25c390e908d97d483743d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f810f8b97eabe513d0389d7a26e0473175e14674dce25c390e908d97d483743d->enter($__internal_f810f8b97eabe513d0389d7a26e0473175e14674dce25c390e908d97d483743d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_nouvelles_categories_cours");
        echo "\">Catégories de cours</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_nouvelle_categorie_cours_add");
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
        
        $__internal_f810f8b97eabe513d0389d7a26e0473175e14674dce25c390e908d97d483743d->leave($__internal_f810f8b97eabe513d0389d7a26e0473175e14674dce25c390e908d97d483743d_prof);

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
