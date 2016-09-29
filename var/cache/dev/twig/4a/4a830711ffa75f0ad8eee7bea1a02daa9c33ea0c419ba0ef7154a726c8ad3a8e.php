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
        $__internal_9490a51c7856f7ef2f59896b35e48a0320da81d25400f619d3ca86becaef8dff = $this->env->getExtension("native_profiler");
        $__internal_9490a51c7856f7ef2f59896b35e48a0320da81d25400f619d3ca86becaef8dff->enter($__internal_9490a51c7856f7ef2f59896b35e48a0320da81d25400f619d3ca86becaef8dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Evaluation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9490a51c7856f7ef2f59896b35e48a0320da81d25400f619d3ca86becaef8dff->leave($__internal_9490a51c7856f7ef2f59896b35e48a0320da81d25400f619d3ca86becaef8dff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8391d39e93d64b7d09242914f1e5e497a4af9c7fed59ddb55ece19159fc8be4e = $this->env->getExtension("native_profiler");
        $__internal_8391d39e93d64b7d09242914f1e5e497a4af9c7fed59ddb55ece19159fc8be4e->enter($__internal_8391d39e93d64b7d09242914f1e5e497a4af9c7fed59ddb55ece19159fc8be4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une évaluation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8391d39e93d64b7d09242914f1e5e497a4af9c7fed59ddb55ece19159fc8be4e->leave($__internal_8391d39e93d64b7d09242914f1e5e497a4af9c7fed59ddb55ece19159fc8be4e_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_b6d6ca6aab803bc9f89802b16b8acb75c099b41a62d718dff2f2733eb505d858 = $this->env->getExtension("native_profiler");
        $__internal_b6d6ca6aab803bc9f89802b16b8acb75c099b41a62d718dff2f2733eb505d858->enter($__internal_b6d6ca6aab803bc9f89802b16b8acb75c099b41a62d718dff2f2733eb505d858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_b6d6ca6aab803bc9f89802b16b8acb75c099b41a62d718dff2f2733eb505d858->leave($__internal_b6d6ca6aab803bc9f89802b16b8acb75c099b41a62d718dff2f2733eb505d858_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_601032bc94d732113a19f52c2d057740cc13d5bf3b6b9d926d6b202008f76dac = $this->env->getExtension("native_profiler");
        $__internal_601032bc94d732113a19f52c2d057740cc13d5bf3b6b9d926d6b202008f76dac->enter($__internal_601032bc94d732113a19f52c2d057740cc13d5bf3b6b9d926d6b202008f76dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_601032bc94d732113a19f52c2d057740cc13d5bf3b6b9d926d6b202008f76dac->leave($__internal_601032bc94d732113a19f52c2d057740cc13d5bf3b6b9d926d6b202008f76dac_prof);

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
