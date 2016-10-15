<?php

/* LGPUserBundle:Avis:add.html.twig */
class __TwigTemplate_4d7c8a9861e340f0ff8fba9c9a7ab62f96f8a7b9ffbba21677bf1578b21ff741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:add.html.twig", 1);
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
        $__internal_077f0a24e1c20eed8b09b1547a9954ab9a8809918ed666591dfeaca79bcb7582 = $this->env->getExtension("native_profiler");
        $__internal_077f0a24e1c20eed8b09b1547a9954ab9a8809918ed666591dfeaca79bcb7582->enter($__internal_077f0a24e1c20eed8b09b1547a9954ab9a8809918ed666591dfeaca79bcb7582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_077f0a24e1c20eed8b09b1547a9954ab9a8809918ed666591dfeaca79bcb7582->leave($__internal_077f0a24e1c20eed8b09b1547a9954ab9a8809918ed666591dfeaca79bcb7582_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00ca1a4c60dcee3c0fa6b99d83cd85126052034ccb2328579ba7df71d5984e95 = $this->env->getExtension("native_profiler");
        $__internal_00ca1a4c60dcee3c0fa6b99d83cd85126052034ccb2328579ba7df71d5984e95->enter($__internal_00ca1a4c60dcee3c0fa6b99d83cd85126052034ccb2328579ba7df71d5984e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_00ca1a4c60dcee3c0fa6b99d83cd85126052034ccb2328579ba7df71d5984e95->leave($__internal_00ca1a4c60dcee3c0fa6b99d83cd85126052034ccb2328579ba7df71d5984e95_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_9341f44e2acee59b242d5e150252c55521c91985dc242b0937703be11d3c4d79 = $this->env->getExtension("native_profiler");
        $__internal_9341f44e2acee59b242d5e150252c55521c91985dc242b0937703be11d3c4d79->enter($__internal_9341f44e2acee59b242d5e150252c55521c91985dc242b0937703be11d3c4d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_9341f44e2acee59b242d5e150252c55521c91985dc242b0937703be11d3c4d79->leave($__internal_9341f44e2acee59b242d5e150252c55521c91985dc242b0937703be11d3c4d79_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5dac617c95ec065e68bb6ced5ceb1482da2c498c3fed76f818808703b8a444b4 = $this->env->getExtension("native_profiler");
        $__internal_5dac617c95ec065e68bb6ced5ceb1482da2c498c3fed76f818808703b8a444b4->enter($__internal_5dac617c95ec065e68bb6ced5ceb1482da2c498c3fed76f818808703b8a444b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes avis</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lgp_user_avis");
        echo "\">Mes avis</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_avis_add");
        echo "\">Donner un avis</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Donner un avis</div>
                <div class=\"notifications-content\">
                    ";
        // line 28
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 28)->display($context);
        // line 29
        echo "                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
    
  
";
        
        $__internal_5dac617c95ec065e68bb6ced5ceb1482da2c498c3fed76f818808703b8a444b4->leave($__internal_5dac617c95ec065e68bb6ced5ceb1482da2c498c3fed76f818808703b8a444b4_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  99 => 28,  89 => 21,  85 => 20,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Ajout d'avis - {{ parent() }}
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
            <h3 class=\"title-block-dash\">Gérer mes avis</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_avis') }}\">Mes avis</a></li>
              <li><a href=\"{{ path('lgp_user_avis_add') }}\">Donner un avis</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Donner un avis</div>
                <div class=\"notifications-content\">
                    {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}
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
