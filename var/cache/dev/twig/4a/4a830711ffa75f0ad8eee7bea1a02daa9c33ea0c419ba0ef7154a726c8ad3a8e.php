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
        $__internal_75a6ee739c2c8fa70b0313960708b532a30cf94b310264ee2dc5ccbf9032ab7c = $this->env->getExtension("native_profiler");
        $__internal_75a6ee739c2c8fa70b0313960708b532a30cf94b310264ee2dc5ccbf9032ab7c->enter($__internal_75a6ee739c2c8fa70b0313960708b532a30cf94b310264ee2dc5ccbf9032ab7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Evaluation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75a6ee739c2c8fa70b0313960708b532a30cf94b310264ee2dc5ccbf9032ab7c->leave($__internal_75a6ee739c2c8fa70b0313960708b532a30cf94b310264ee2dc5ccbf9032ab7c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_994a65e375e85d7beef837608dea213faf7cf352d706634843eac5817e8560ae = $this->env->getExtension("native_profiler");
        $__internal_994a65e375e85d7beef837608dea213faf7cf352d706634843eac5817e8560ae->enter($__internal_994a65e375e85d7beef837608dea213faf7cf352d706634843eac5817e8560ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une évaluation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_994a65e375e85d7beef837608dea213faf7cf352d706634843eac5817e8560ae->leave($__internal_994a65e375e85d7beef837608dea213faf7cf352d706634843eac5817e8560ae_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_3e8d8a907719bf00fd3845908cdd4bf2f8c3089f0f959ef752f67c860f513dbb = $this->env->getExtension("native_profiler");
        $__internal_3e8d8a907719bf00fd3845908cdd4bf2f8c3089f0f959ef752f67c860f513dbb->enter($__internal_3e8d8a907719bf00fd3845908cdd4bf2f8c3089f0f959ef752f67c860f513dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_3e8d8a907719bf00fd3845908cdd4bf2f8c3089f0f959ef752f67c860f513dbb->leave($__internal_3e8d8a907719bf00fd3845908cdd4bf2f8c3089f0f959ef752f67c860f513dbb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_45bb061ee10cb30a36498d9a6fb9a183ebf91548d6b164a3dc93f0b47f893a6a = $this->env->getExtension("native_profiler");
        $__internal_45bb061ee10cb30a36498d9a6fb9a183ebf91548d6b164a3dc93f0b47f893a6a->enter($__internal_45bb061ee10cb30a36498d9a6fb9a183ebf91548d6b164a3dc93f0b47f893a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_45bb061ee10cb30a36498d9a6fb9a183ebf91548d6b164a3dc93f0b47f893a6a->leave($__internal_45bb061ee10cb30a36498d9a6fb9a183ebf91548d6b164a3dc93f0b47f893a6a_prof);

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
