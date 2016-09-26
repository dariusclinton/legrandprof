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
        $__internal_83719dcce13254754322e7d7fda7998f4dee305004e45fde45df7833cbccb04b = $this->env->getExtension("native_profiler");
        $__internal_83719dcce13254754322e7d7fda7998f4dee305004e45fde45df7833cbccb04b->enter($__internal_83719dcce13254754322e7d7fda7998f4dee305004e45fde45df7833cbccb04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Evaluation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83719dcce13254754322e7d7fda7998f4dee305004e45fde45df7833cbccb04b->leave($__internal_83719dcce13254754322e7d7fda7998f4dee305004e45fde45df7833cbccb04b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd82b296eb080398e9049da414d004a134425a156f2c655454da008b4b0af469 = $this->env->getExtension("native_profiler");
        $__internal_fd82b296eb080398e9049da414d004a134425a156f2c655454da008b4b0af469->enter($__internal_fd82b296eb080398e9049da414d004a134425a156f2c655454da008b4b0af469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une évaluation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fd82b296eb080398e9049da414d004a134425a156f2c655454da008b4b0af469->leave($__internal_fd82b296eb080398e9049da414d004a134425a156f2c655454da008b4b0af469_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_1053a9deb07f5a8de09923527cb7480f656c1bde3d09e8a62098fee87839cd0a = $this->env->getExtension("native_profiler");
        $__internal_1053a9deb07f5a8de09923527cb7480f656c1bde3d09e8a62098fee87839cd0a->enter($__internal_1053a9deb07f5a8de09923527cb7480f656c1bde3d09e8a62098fee87839cd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_1053a9deb07f5a8de09923527cb7480f656c1bde3d09e8a62098fee87839cd0a->leave($__internal_1053a9deb07f5a8de09923527cb7480f656c1bde3d09e8a62098fee87839cd0a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a59bda3f52e9a372b6165bdb15a73660e09bdc9892cd144b08506cf17d65631 = $this->env->getExtension("native_profiler");
        $__internal_4a59bda3f52e9a372b6165bdb15a73660e09bdc9892cd144b08506cf17d65631->enter($__internal_4a59bda3f52e9a372b6165bdb15a73660e09bdc9892cd144b08506cf17d65631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4a59bda3f52e9a372b6165bdb15a73660e09bdc9892cd144b08506cf17d65631->leave($__internal_4a59bda3f52e9a372b6165bdb15a73660e09bdc9892cd144b08506cf17d65631_prof);

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
