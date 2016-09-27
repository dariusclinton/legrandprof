<?php

/* LGPUserBundle:Evaluation:update.html.twig */
class __TwigTemplate_546a86fc4678e00c02c85f5ff17fdbe1dcb842da5bcafafb5070ed167385a2d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Evaluation:update.html.twig", 1);
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
        $__internal_c03148f28151a70a8912c70773eab91d4a70f00501a669f813854a1969460bed = $this->env->getExtension("native_profiler");
        $__internal_c03148f28151a70a8912c70773eab91d4a70f00501a669f813854a1969460bed->enter($__internal_c03148f28151a70a8912c70773eab91d4a70f00501a669f813854a1969460bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Evaluation:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c03148f28151a70a8912c70773eab91d4a70f00501a669f813854a1969460bed->leave($__internal_c03148f28151a70a8912c70773eab91d4a70f00501a669f813854a1969460bed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3acb38a034d3ba3091f5b9c20a992d1ff5af619755dbf71bcb5595f8508cc6e7 = $this->env->getExtension("native_profiler");
        $__internal_3acb38a034d3ba3091f5b9c20a992d1ff5af619755dbf71bcb5595f8508cc6e7->enter($__internal_3acb38a034d3ba3091f5b9c20a992d1ff5af619755dbf71bcb5595f8508cc6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'une évaluation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3acb38a034d3ba3091f5b9c20a992d1ff5af619755dbf71bcb5595f8508cc6e7->leave($__internal_3acb38a034d3ba3091f5b9c20a992d1ff5af619755dbf71bcb5595f8508cc6e7_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_74fc6242929d59c8c510237f7947f65727efcc5a6408df9b22d31cc57d5fc031 = $this->env->getExtension("native_profiler");
        $__internal_74fc6242929d59c8c510237f7947f65727efcc5a6408df9b22d31cc57d5fc031->enter($__internal_74fc6242929d59c8c510237f7947f65727efcc5a6408df9b22d31cc57d5fc031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_74fc6242929d59c8c510237f7947f65727efcc5a6408df9b22d31cc57d5fc031->leave($__internal_74fc6242929d59c8c510237f7947f65727efcc5a6408df9b22d31cc57d5fc031_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_41350959c74749570cb2145824d6de1b91cfc61f0839c07899e955b308855c2c = $this->env->getExtension("native_profiler");
        $__internal_41350959c74749570cb2145824d6de1b91cfc61f0839c07899e955b308855c2c->enter($__internal_41350959c74749570cb2145824d6de1b91cfc61f0839c07899e955b308855c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("LGPUserBundle:Evaluation:formulaire.html.twig", "LGPUserBundle:Evaluation:update.html.twig", 30)->display($context);
        echo " 
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  
";
        
        $__internal_41350959c74749570cb2145824d6de1b91cfc61f0839c07899e955b308855c2c->leave($__internal_41350959c74749570cb2145824d6de1b91cfc61f0839c07899e955b308855c2c_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Evaluation:update.html.twig";
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
  Modification d'une évaluation - {{ parent() }}
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
