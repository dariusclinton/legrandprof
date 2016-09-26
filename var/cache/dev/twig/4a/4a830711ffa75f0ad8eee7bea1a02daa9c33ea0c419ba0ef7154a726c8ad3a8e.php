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
        $__internal_ec8962e69a40587d75703c3ff7ac3a23e80c73b1ef935485898404787b66d2fa = $this->env->getExtension("native_profiler");
        $__internal_ec8962e69a40587d75703c3ff7ac3a23e80c73b1ef935485898404787b66d2fa->enter($__internal_ec8962e69a40587d75703c3ff7ac3a23e80c73b1ef935485898404787b66d2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Evaluation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec8962e69a40587d75703c3ff7ac3a23e80c73b1ef935485898404787b66d2fa->leave($__internal_ec8962e69a40587d75703c3ff7ac3a23e80c73b1ef935485898404787b66d2fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15ff7c31f96fcec425c8861cd30906f4562a9fd88926a038db8846576b3f9e3c = $this->env->getExtension("native_profiler");
        $__internal_15ff7c31f96fcec425c8861cd30906f4562a9fd88926a038db8846576b3f9e3c->enter($__internal_15ff7c31f96fcec425c8861cd30906f4562a9fd88926a038db8846576b3f9e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une évaluation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_15ff7c31f96fcec425c8861cd30906f4562a9fd88926a038db8846576b3f9e3c->leave($__internal_15ff7c31f96fcec425c8861cd30906f4562a9fd88926a038db8846576b3f9e3c_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_48e16da845f2d7b5ef116a63d99c11bc59e2e421c44fff9323fe4a2304d81f9a = $this->env->getExtension("native_profiler");
        $__internal_48e16da845f2d7b5ef116a63d99c11bc59e2e421c44fff9323fe4a2304d81f9a->enter($__internal_48e16da845f2d7b5ef116a63d99c11bc59e2e421c44fff9323fe4a2304d81f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_48e16da845f2d7b5ef116a63d99c11bc59e2e421c44fff9323fe4a2304d81f9a->leave($__internal_48e16da845f2d7b5ef116a63d99c11bc59e2e421c44fff9323fe4a2304d81f9a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0636103bbbd3307296f11e26cc330a88a0ea4e99a9325efe874ba99ac1eec35 = $this->env->getExtension("native_profiler");
        $__internal_b0636103bbbd3307296f11e26cc330a88a0ea4e99a9325efe874ba99ac1eec35->enter($__internal_b0636103bbbd3307296f11e26cc330a88a0ea4e99a9325efe874ba99ac1eec35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b0636103bbbd3307296f11e26cc330a88a0ea4e99a9325efe874ba99ac1eec35->leave($__internal_b0636103bbbd3307296f11e26cc330a88a0ea4e99a9325efe874ba99ac1eec35_prof);

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
