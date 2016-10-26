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
        $__internal_e6692751bfffd37cd137434aaddff1575b0f557b6d69024120dba70ff9d85b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6692751bfffd37cd137434aaddff1575b0f557b6d69024120dba70ff9d85b6c->enter($__internal_e6692751bfffd37cd137434aaddff1575b0f557b6d69024120dba70ff9d85b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6692751bfffd37cd137434aaddff1575b0f557b6d69024120dba70ff9d85b6c->leave($__internal_e6692751bfffd37cd137434aaddff1575b0f557b6d69024120dba70ff9d85b6c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fb91ae53a9045d61373395a2705077b9e5657dcb4e5b4c92e59c1d3c41e0751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb91ae53a9045d61373395a2705077b9e5657dcb4e5b4c92e59c1d3c41e0751->enter($__internal_7fb91ae53a9045d61373395a2705077b9e5657dcb4e5b4c92e59c1d3c41e0751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Proposition d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7fb91ae53a9045d61373395a2705077b9e5657dcb4e5b4c92e59c1d3c41e0751->leave($__internal_7fb91ae53a9045d61373395a2705077b9e5657dcb4e5b4c92e59c1d3c41e0751_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_225bbdc832b1c3c605ef147a7f406fefd944d8e646f1053f994429af488578b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225bbdc832b1c3c605ef147a7f406fefd944d8e646f1053f994429af488578b2->enter($__internal_225bbdc832b1c3c605ef147a7f406fefd944d8e646f1053f994429af488578b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_225bbdc832b1c3c605ef147a7f406fefd944d8e646f1053f994429af488578b2->leave($__internal_225bbdc832b1c3c605ef147a7f406fefd944d8e646f1053f994429af488578b2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b417dfea0450e44775e2981ab25081007fb772ea85c69a99074e43e549575cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b417dfea0450e44775e2981ab25081007fb772ea85c69a99074e43e549575cc2->enter($__internal_b417dfea0450e44775e2981ab25081007fb772ea85c69a99074e43e549575cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b417dfea0450e44775e2981ab25081007fb772ea85c69a99074e43e549575cc2->leave($__internal_b417dfea0450e44775e2981ab25081007fb772ea85c69a99074e43e549575cc2_prof);

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
