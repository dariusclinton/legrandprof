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
        $__internal_d8581f2acb77781f35f527f7b2b64b03410f9d49dca7dc1681c78a9f9758063a = $this->env->getExtension("native_profiler");
        $__internal_d8581f2acb77781f35f527f7b2b64b03410f9d49dca7dc1681c78a9f9758063a->enter($__internal_d8581f2acb77781f35f527f7b2b64b03410f9d49dca7dc1681c78a9f9758063a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Evaluation:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8581f2acb77781f35f527f7b2b64b03410f9d49dca7dc1681c78a9f9758063a->leave($__internal_d8581f2acb77781f35f527f7b2b64b03410f9d49dca7dc1681c78a9f9758063a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_98beaaef97202ae43dac2da3150f911728b71e0c5da1ce35b998430551b0379c = $this->env->getExtension("native_profiler");
        $__internal_98beaaef97202ae43dac2da3150f911728b71e0c5da1ce35b998430551b0379c->enter($__internal_98beaaef97202ae43dac2da3150f911728b71e0c5da1ce35b998430551b0379c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'une évaluation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_98beaaef97202ae43dac2da3150f911728b71e0c5da1ce35b998430551b0379c->leave($__internal_98beaaef97202ae43dac2da3150f911728b71e0c5da1ce35b998430551b0379c_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_f9867eda93d00b380d1c392d115dfaa0188cefb1f52299fa8cd4dfd5fe151a04 = $this->env->getExtension("native_profiler");
        $__internal_f9867eda93d00b380d1c392d115dfaa0188cefb1f52299fa8cd4dfd5fe151a04->enter($__internal_f9867eda93d00b380d1c392d115dfaa0188cefb1f52299fa8cd4dfd5fe151a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_f9867eda93d00b380d1c392d115dfaa0188cefb1f52299fa8cd4dfd5fe151a04->leave($__internal_f9867eda93d00b380d1c392d115dfaa0188cefb1f52299fa8cd4dfd5fe151a04_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b19dc9be61072add708023bdf952b52b52e75047d1f9624f9b86449fe83e3b5b = $this->env->getExtension("native_profiler");
        $__internal_b19dc9be61072add708023bdf952b52b52e75047d1f9624f9b86449fe83e3b5b->enter($__internal_b19dc9be61072add708023bdf952b52b52e75047d1f9624f9b86449fe83e3b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b19dc9be61072add708023bdf952b52b52e75047d1f9624f9b86449fe83e3b5b->leave($__internal_b19dc9be61072add708023bdf952b52b52e75047d1f9624f9b86449fe83e3b5b_prof);

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
