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
        $__internal_c5d4e6f5052fe96dd75cc60d4febfba25e928c2bcae2c030138ceffb6ff9a8bb = $this->env->getExtension("native_profiler");
        $__internal_c5d4e6f5052fe96dd75cc60d4febfba25e928c2bcae2c030138ceffb6ff9a8bb->enter($__internal_c5d4e6f5052fe96dd75cc60d4febfba25e928c2bcae2c030138ceffb6ff9a8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5d4e6f5052fe96dd75cc60d4febfba25e928c2bcae2c030138ceffb6ff9a8bb->leave($__internal_c5d4e6f5052fe96dd75cc60d4febfba25e928c2bcae2c030138ceffb6ff9a8bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7488d95a637d969f2f0a9b248639b78f8d4f23f8e607f03671885771bdf5385d = $this->env->getExtension("native_profiler");
        $__internal_7488d95a637d969f2f0a9b248639b78f8d4f23f8e607f03671885771bdf5385d->enter($__internal_7488d95a637d969f2f0a9b248639b78f8d4f23f8e607f03671885771bdf5385d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7488d95a637d969f2f0a9b248639b78f8d4f23f8e607f03671885771bdf5385d->leave($__internal_7488d95a637d969f2f0a9b248639b78f8d4f23f8e607f03671885771bdf5385d_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_ce3b1867a86bd221ce515a1ff461d31fa52bb37137ea4b3e05532c45c162cd28 = $this->env->getExtension("native_profiler");
        $__internal_ce3b1867a86bd221ce515a1ff461d31fa52bb37137ea4b3e05532c45c162cd28->enter($__internal_ce3b1867a86bd221ce515a1ff461d31fa52bb37137ea4b3e05532c45c162cd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_ce3b1867a86bd221ce515a1ff461d31fa52bb37137ea4b3e05532c45c162cd28->leave($__internal_ce3b1867a86bd221ce515a1ff461d31fa52bb37137ea4b3e05532c45c162cd28_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_11a5dde85f854a404825dfe32fd7f64b85a5cc53ca512fcc9fdd6dcbe8938e61 = $this->env->getExtension("native_profiler");
        $__internal_11a5dde85f854a404825dfe32fd7f64b85a5cc53ca512fcc9fdd6dcbe8938e61->enter($__internal_11a5dde85f854a404825dfe32fd7f64b85a5cc53ca512fcc9fdd6dcbe8938e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_11a5dde85f854a404825dfe32fd7f64b85a5cc53ca512fcc9fdd6dcbe8938e61->leave($__internal_11a5dde85f854a404825dfe32fd7f64b85a5cc53ca512fcc9fdd6dcbe8938e61_prof);

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
