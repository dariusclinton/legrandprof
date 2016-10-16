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
        $__internal_b6a7564dd617b70741ab9f879e44c720265b38c17e5c5294a0c1e9005b873dc3 = $this->env->getExtension("native_profiler");
        $__internal_b6a7564dd617b70741ab9f879e44c720265b38c17e5c5294a0c1e9005b873dc3->enter($__internal_b6a7564dd617b70741ab9f879e44c720265b38c17e5c5294a0c1e9005b873dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6a7564dd617b70741ab9f879e44c720265b38c17e5c5294a0c1e9005b873dc3->leave($__internal_b6a7564dd617b70741ab9f879e44c720265b38c17e5c5294a0c1e9005b873dc3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_055eca4ba97cb76f812d6c3b9b59d1210598b44a41b152e9cdba0a44216356fb = $this->env->getExtension("native_profiler");
        $__internal_055eca4ba97cb76f812d6c3b9b59d1210598b44a41b152e9cdba0a44216356fb->enter($__internal_055eca4ba97cb76f812d6c3b9b59d1210598b44a41b152e9cdba0a44216356fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Proposition d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_055eca4ba97cb76f812d6c3b9b59d1210598b44a41b152e9cdba0a44216356fb->leave($__internal_055eca4ba97cb76f812d6c3b9b59d1210598b44a41b152e9cdba0a44216356fb_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_b17866b881eaeef21b76d32d47e9987c60f4f30fb536838f6d7cfa49cb7005d9 = $this->env->getExtension("native_profiler");
        $__internal_b17866b881eaeef21b76d32d47e9987c60f4f30fb536838f6d7cfa49cb7005d9->enter($__internal_b17866b881eaeef21b76d32d47e9987c60f4f30fb536838f6d7cfa49cb7005d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_b17866b881eaeef21b76d32d47e9987c60f4f30fb536838f6d7cfa49cb7005d9->leave($__internal_b17866b881eaeef21b76d32d47e9987c60f4f30fb536838f6d7cfa49cb7005d9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_59f5c46d6d5ad8dd64f65b474eba11a19ba4cafdaa986dd1ad2806fe761c1f6e = $this->env->getExtension("native_profiler");
        $__internal_59f5c46d6d5ad8dd64f65b474eba11a19ba4cafdaa986dd1ad2806fe761c1f6e->enter($__internal_59f5c46d6d5ad8dd64f65b474eba11a19ba4cafdaa986dd1ad2806fe761c1f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_59f5c46d6d5ad8dd64f65b474eba11a19ba4cafdaa986dd1ad2806fe761c1f6e->leave($__internal_59f5c46d6d5ad8dd64f65b474eba11a19ba4cafdaa986dd1ad2806fe761c1f6e_prof);

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
