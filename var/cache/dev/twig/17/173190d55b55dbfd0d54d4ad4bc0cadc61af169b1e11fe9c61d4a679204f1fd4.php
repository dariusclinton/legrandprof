<?php

/* LGPUserBundle:Indisponibilite:add.html.twig */
class __TwigTemplate_b4a2ae18125a64658497fbdb2d94eb4e05eb90c267bfb764bb42e05258864eef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 1);
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
        $__internal_33d5572e7599811309b918e1e624e25841e9f1137ee42352d7ad5b666984e449 = $this->env->getExtension("native_profiler");
        $__internal_33d5572e7599811309b918e1e624e25841e9f1137ee42352d7ad5b666984e449->enter($__internal_33d5572e7599811309b918e1e624e25841e9f1137ee42352d7ad5b666984e449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33d5572e7599811309b918e1e624e25841e9f1137ee42352d7ad5b666984e449->leave($__internal_33d5572e7599811309b918e1e624e25841e9f1137ee42352d7ad5b666984e449_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2c70478041ff22bb58b561eec7180a421157805352895d2ae14ffeff52afa7f = $this->env->getExtension("native_profiler");
        $__internal_e2c70478041ff22bb58b561eec7180a421157805352895d2ae14ffeff52afa7f->enter($__internal_e2c70478041ff22bb58b561eec7180a421157805352895d2ae14ffeff52afa7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e2c70478041ff22bb58b561eec7180a421157805352895d2ae14ffeff52afa7f->leave($__internal_e2c70478041ff22bb58b561eec7180a421157805352895d2ae14ffeff52afa7f_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_1423db9b1b0ea4aa8cd45dd1b9ad4edaa15de8b7b0b7c877e81091cb5f366234 = $this->env->getExtension("native_profiler");
        $__internal_1423db9b1b0ea4aa8cd45dd1b9ad4edaa15de8b7b0b7c877e81091cb5f366234->enter($__internal_1423db9b1b0ea4aa8cd45dd1b9ad4edaa15de8b7b0b7c877e81091cb5f366234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_1423db9b1b0ea4aa8cd45dd1b9ad4edaa15de8b7b0b7c877e81091cb5f366234->leave($__internal_1423db9b1b0ea4aa8cd45dd1b9ad4edaa15de8b7b0b7c877e81091cb5f366234_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a006808377a43efa09c30cd7df792d97021b7016f12de3f1a4269f0537665e0 = $this->env->getExtension("native_profiler");
        $__internal_1a006808377a43efa09c30cd7df792d97021b7016f12de3f1a4269f0537665e0->enter($__internal_1a006808377a43efa09c30cd7df792d97021b7016f12de3f1a4269f0537665e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes indisponibilités</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite");
        echo "\">Mes indisponibilités</a></li>
              <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite_add");
        echo "\">Signaler une indisponibilité</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Signaler une indisponibilité</div>
                <div class=\"notifications-content\">
                    
                    ";
        // line 30
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 30)->display($context);
        // line 31
        echo "                </div>
              </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  
  
";
        
        $__internal_1a006808377a43efa09c30cd7df792d97021b7016f12de3f1a4269f0537665e0->leave($__internal_1a006808377a43efa09c30cd7df792d97021b7016f12de3f1a4269f0537665e0_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  101 => 30,  90 => 22,  86 => 21,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Ajout d'une indisponibilité - {{ parent() }}
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
            <h3 class=\"title-block-dash\">Gérer mes indisponibilités</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_prof_indisponibilite') }}\">Mes indisponibilités</a></li>
              <li><a href=\"{{ path('lgp_user_prof_indisponibilite_add') }}\">Signaler une indisponibilité</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Signaler une indisponibilité</div>
                <div class=\"notifications-content\">
                    
                    {% include 'LGPUserBundle:Indisponibilite:formulaire.html.twig' %}
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
