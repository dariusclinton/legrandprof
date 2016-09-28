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
        $__internal_d1cf27ff7d4744f513f2a796ceea3f43297f80d86a943fc5fe6fb010cba6a07e = $this->env->getExtension("native_profiler");
        $__internal_d1cf27ff7d4744f513f2a796ceea3f43297f80d86a943fc5fe6fb010cba6a07e->enter($__internal_d1cf27ff7d4744f513f2a796ceea3f43297f80d86a943fc5fe6fb010cba6a07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Evaluation:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1cf27ff7d4744f513f2a796ceea3f43297f80d86a943fc5fe6fb010cba6a07e->leave($__internal_d1cf27ff7d4744f513f2a796ceea3f43297f80d86a943fc5fe6fb010cba6a07e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_77816211abe1acef509a5163b9dcbeb30dc38dd7325568381648612548bbf2d6 = $this->env->getExtension("native_profiler");
        $__internal_77816211abe1acef509a5163b9dcbeb30dc38dd7325568381648612548bbf2d6->enter($__internal_77816211abe1acef509a5163b9dcbeb30dc38dd7325568381648612548bbf2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'une évaluation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_77816211abe1acef509a5163b9dcbeb30dc38dd7325568381648612548bbf2d6->leave($__internal_77816211abe1acef509a5163b9dcbeb30dc38dd7325568381648612548bbf2d6_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_820b6db12032157123f5b2afee180c28a1847c3ead38f92389d62f50d2d2b7b6 = $this->env->getExtension("native_profiler");
        $__internal_820b6db12032157123f5b2afee180c28a1847c3ead38f92389d62f50d2d2b7b6->enter($__internal_820b6db12032157123f5b2afee180c28a1847c3ead38f92389d62f50d2d2b7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_820b6db12032157123f5b2afee180c28a1847c3ead38f92389d62f50d2d2b7b6->leave($__internal_820b6db12032157123f5b2afee180c28a1847c3ead38f92389d62f50d2d2b7b6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f419cc1d38cba36275b6f51a0e811108f683de0abb73d3d9309ab35587f5594 = $this->env->getExtension("native_profiler");
        $__internal_9f419cc1d38cba36275b6f51a0e811108f683de0abb73d3d9309ab35587f5594->enter($__internal_9f419cc1d38cba36275b6f51a0e811108f683de0abb73d3d9309ab35587f5594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9f419cc1d38cba36275b6f51a0e811108f683de0abb73d3d9309ab35587f5594->leave($__internal_9f419cc1d38cba36275b6f51a0e811108f683de0abb73d3d9309ab35587f5594_prof);

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
