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
        $__internal_2fa4c8b6789c4450bc996d286c858dbd4c85c585b93d956d3b26871ba820dd8c = $this->env->getExtension("native_profiler");
        $__internal_2fa4c8b6789c4450bc996d286c858dbd4c85c585b93d956d3b26871ba820dd8c->enter($__internal_2fa4c8b6789c4450bc996d286c858dbd4c85c585b93d956d3b26871ba820dd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Evaluation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fa4c8b6789c4450bc996d286c858dbd4c85c585b93d956d3b26871ba820dd8c->leave($__internal_2fa4c8b6789c4450bc996d286c858dbd4c85c585b93d956d3b26871ba820dd8c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a5d42a030b788e99688f69b5733295328915a940d59e145931afe41c1b4be72 = $this->env->getExtension("native_profiler");
        $__internal_6a5d42a030b788e99688f69b5733295328915a940d59e145931afe41c1b4be72->enter($__internal_6a5d42a030b788e99688f69b5733295328915a940d59e145931afe41c1b4be72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une évaluation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6a5d42a030b788e99688f69b5733295328915a940d59e145931afe41c1b4be72->leave($__internal_6a5d42a030b788e99688f69b5733295328915a940d59e145931afe41c1b4be72_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_0f7493c7b0e0133775c3d24dacffe309ecb10cd1005a5c9ba009c4277a87b93a = $this->env->getExtension("native_profiler");
        $__internal_0f7493c7b0e0133775c3d24dacffe309ecb10cd1005a5c9ba009c4277a87b93a->enter($__internal_0f7493c7b0e0133775c3d24dacffe309ecb10cd1005a5c9ba009c4277a87b93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_0f7493c7b0e0133775c3d24dacffe309ecb10cd1005a5c9ba009c4277a87b93a->leave($__internal_0f7493c7b0e0133775c3d24dacffe309ecb10cd1005a5c9ba009c4277a87b93a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_361db84850e2692a8dc540dac9e5969f9254636309b2cc118fcffc9877cf0038 = $this->env->getExtension("native_profiler");
        $__internal_361db84850e2692a8dc540dac9e5969f9254636309b2cc118fcffc9877cf0038->enter($__internal_361db84850e2692a8dc540dac9e5969f9254636309b2cc118fcffc9877cf0038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_361db84850e2692a8dc540dac9e5969f9254636309b2cc118fcffc9877cf0038->leave($__internal_361db84850e2692a8dc540dac9e5969f9254636309b2cc118fcffc9877cf0038_prof);

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
