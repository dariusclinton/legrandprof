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
        $__internal_9cce3920e623631defd01d833121f7e45aa608d75cd9424ea92ddd5ae3e951e2 = $this->env->getExtension("native_profiler");
        $__internal_9cce3920e623631defd01d833121f7e45aa608d75cd9424ea92ddd5ae3e951e2->enter($__internal_9cce3920e623631defd01d833121f7e45aa608d75cd9424ea92ddd5ae3e951e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Evaluation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cce3920e623631defd01d833121f7e45aa608d75cd9424ea92ddd5ae3e951e2->leave($__internal_9cce3920e623631defd01d833121f7e45aa608d75cd9424ea92ddd5ae3e951e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8c192475eaf9fb5d0e6e4db4db794ade6a61bb3f2f2f6f1ddc429a7b1b63771 = $this->env->getExtension("native_profiler");
        $__internal_c8c192475eaf9fb5d0e6e4db4db794ade6a61bb3f2f2f6f1ddc429a7b1b63771->enter($__internal_c8c192475eaf9fb5d0e6e4db4db794ade6a61bb3f2f2f6f1ddc429a7b1b63771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une évaluation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c8c192475eaf9fb5d0e6e4db4db794ade6a61bb3f2f2f6f1ddc429a7b1b63771->leave($__internal_c8c192475eaf9fb5d0e6e4db4db794ade6a61bb3f2f2f6f1ddc429a7b1b63771_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_dc501f22a95ca4eea06246c914bc245b4f7417e9f613e88c71dd2d0eb95c414d = $this->env->getExtension("native_profiler");
        $__internal_dc501f22a95ca4eea06246c914bc245b4f7417e9f613e88c71dd2d0eb95c414d->enter($__internal_dc501f22a95ca4eea06246c914bc245b4f7417e9f613e88c71dd2d0eb95c414d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_dc501f22a95ca4eea06246c914bc245b4f7417e9f613e88c71dd2d0eb95c414d->leave($__internal_dc501f22a95ca4eea06246c914bc245b4f7417e9f613e88c71dd2d0eb95c414d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6527363381dc7d65d1f87c446f91ca7799e1eadc41c1a5e99493a1f82557134 = $this->env->getExtension("native_profiler");
        $__internal_e6527363381dc7d65d1f87c446f91ca7799e1eadc41c1a5e99493a1f82557134->enter($__internal_e6527363381dc7d65d1f87c446f91ca7799e1eadc41c1a5e99493a1f82557134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e6527363381dc7d65d1f87c446f91ca7799e1eadc41c1a5e99493a1f82557134->leave($__internal_e6527363381dc7d65d1f87c446f91ca7799e1eadc41c1a5e99493a1f82557134_prof);

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
