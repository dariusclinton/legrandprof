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
        $__internal_b11cf5450999cef0b2589a74514c0ebb22c87ed5916e335c03771183c4a38338 = $this->env->getExtension("native_profiler");
        $__internal_b11cf5450999cef0b2589a74514c0ebb22c87ed5916e335c03771183c4a38338->enter($__internal_b11cf5450999cef0b2589a74514c0ebb22c87ed5916e335c03771183c4a38338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b11cf5450999cef0b2589a74514c0ebb22c87ed5916e335c03771183c4a38338->leave($__internal_b11cf5450999cef0b2589a74514c0ebb22c87ed5916e335c03771183c4a38338_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_514a03304ffa28046228f6e37233bf295853999240fa825836a5432b9c7c21d9 = $this->env->getExtension("native_profiler");
        $__internal_514a03304ffa28046228f6e37233bf295853999240fa825836a5432b9c7c21d9->enter($__internal_514a03304ffa28046228f6e37233bf295853999240fa825836a5432b9c7c21d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_514a03304ffa28046228f6e37233bf295853999240fa825836a5432b9c7c21d9->leave($__internal_514a03304ffa28046228f6e37233bf295853999240fa825836a5432b9c7c21d9_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_10a291f0a2c7f9e87f3d61d4a452d261c26ed654939c17dac92a129bbbcaf729 = $this->env->getExtension("native_profiler");
        $__internal_10a291f0a2c7f9e87f3d61d4a452d261c26ed654939c17dac92a129bbbcaf729->enter($__internal_10a291f0a2c7f9e87f3d61d4a452d261c26ed654939c17dac92a129bbbcaf729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_10a291f0a2c7f9e87f3d61d4a452d261c26ed654939c17dac92a129bbbcaf729->leave($__internal_10a291f0a2c7f9e87f3d61d4a452d261c26ed654939c17dac92a129bbbcaf729_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_575a0cdbd2dde57949d2c8ffeb51a5d76dadbe48413e94471a221f8b7142cfae = $this->env->getExtension("native_profiler");
        $__internal_575a0cdbd2dde57949d2c8ffeb51a5d76dadbe48413e94471a221f8b7142cfae->enter($__internal_575a0cdbd2dde57949d2c8ffeb51a5d76dadbe48413e94471a221f8b7142cfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_575a0cdbd2dde57949d2c8ffeb51a5d76dadbe48413e94471a221f8b7142cfae->leave($__internal_575a0cdbd2dde57949d2c8ffeb51a5d76dadbe48413e94471a221f8b7142cfae_prof);

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
