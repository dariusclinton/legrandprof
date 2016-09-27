<?php

/* LGPUserBundle:Evaluation:add.html.twig */
class __TwigTemplate_7af27930c10e0e18fa24a33e73f1992a70663682e967b9b475f9b2f8d8a826d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Evaluation:add.html.twig", 1);
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
        $__internal_968a92849b44c7f84a134e23666de6c1388d52187bd2c9c12e5dd0f9e701053a = $this->env->getExtension("native_profiler");
        $__internal_968a92849b44c7f84a134e23666de6c1388d52187bd2c9c12e5dd0f9e701053a->enter($__internal_968a92849b44c7f84a134e23666de6c1388d52187bd2c9c12e5dd0f9e701053a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Evaluation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_968a92849b44c7f84a134e23666de6c1388d52187bd2c9c12e5dd0f9e701053a->leave($__internal_968a92849b44c7f84a134e23666de6c1388d52187bd2c9c12e5dd0f9e701053a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c68810a5e55f41167a564dc896d032fcb69121a0d9825818c2deb9d0f4de87e = $this->env->getExtension("native_profiler");
        $__internal_6c68810a5e55f41167a564dc896d032fcb69121a0d9825818c2deb9d0f4de87e->enter($__internal_6c68810a5e55f41167a564dc896d032fcb69121a0d9825818c2deb9d0f4de87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une évaluation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6c68810a5e55f41167a564dc896d032fcb69121a0d9825818c2deb9d0f4de87e->leave($__internal_6c68810a5e55f41167a564dc896d032fcb69121a0d9825818c2deb9d0f4de87e_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_a091a56cd4f025136dad2ee2fb06950c5ef082d412a7ea1be06c3e428b4fb87b = $this->env->getExtension("native_profiler");
        $__internal_a091a56cd4f025136dad2ee2fb06950c5ef082d412a7ea1be06c3e428b4fb87b->enter($__internal_a091a56cd4f025136dad2ee2fb06950c5ef082d412a7ea1be06c3e428b4fb87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_a091a56cd4f025136dad2ee2fb06950c5ef082d412a7ea1be06c3e428b4fb87b->leave($__internal_a091a56cd4f025136dad2ee2fb06950c5ef082d412a7ea1be06c3e428b4fb87b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_af2228a777a52f9d41411be01ba9bdfb54109131bc9e1e0cf97a023c7209ea83 = $this->env->getExtension("native_profiler");
        $__internal_af2228a777a52f9d41411be01ba9bdfb54109131bc9e1e0cf97a023c7209ea83->enter($__internal_af2228a777a52f9d41411be01ba9bdfb54109131bc9e1e0cf97a023c7209ea83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes évaluations</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_evaluation");
        echo "\">Ma liste d'évaluations</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_evaluation_add");
        echo "\">Faire une évaluation</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            
            <div class=\"notifications-block\">
              <div class=\"notifications-header\">Faire une évaluation</div>
              <div class=\"notifications-content\">
                  
                    ";
        // line 30
        $this->loadTemplate("LGPUserBundle:Evaluation:formulaire.html.twig", "LGPUserBundle:Evaluation:add.html.twig", 30)->display($context);
        echo " 
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  
";
        
        $__internal_af2228a777a52f9d41411be01ba9bdfb54109131bc9e1e0cf97a023c7209ea83->leave($__internal_af2228a777a52f9d41411be01ba9bdfb54109131bc9e1e0cf97a023c7209ea83_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Evaluation:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  89 => 21,  85 => 20,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Ajout d'une évaluation - {{ parent() }}
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
            <h3 class=\"title-block-dash\">Gérer mes évaluations</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_prof_evaluation') }}\">Ma liste d'évaluations</a></li>
              <li><a href=\"{{ path('lgp_user_prof_evaluation_add') }}\">Faire une évaluation</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            
            <div class=\"notifications-block\">
              <div class=\"notifications-header\">Faire une évaluation</div>
              <div class=\"notifications-content\">
                  
                    {% include 'LGPUserBundle:Evaluation:formulaire.html.twig' %} 
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
