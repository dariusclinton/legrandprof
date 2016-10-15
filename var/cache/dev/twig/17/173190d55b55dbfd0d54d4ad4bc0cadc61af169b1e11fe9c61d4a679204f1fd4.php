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
        $__internal_d0559e0685418faa525c10a24dbda2522663e921a642d0d85d9379275488ccec = $this->env->getExtension("native_profiler");
        $__internal_d0559e0685418faa525c10a24dbda2522663e921a642d0d85d9379275488ccec->enter($__internal_d0559e0685418faa525c10a24dbda2522663e921a642d0d85d9379275488ccec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0559e0685418faa525c10a24dbda2522663e921a642d0d85d9379275488ccec->leave($__internal_d0559e0685418faa525c10a24dbda2522663e921a642d0d85d9379275488ccec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ca249fdc290ebbf7129649f54ef7f90c4dd3f470f04dae2db8e42d279c5f653 = $this->env->getExtension("native_profiler");
        $__internal_2ca249fdc290ebbf7129649f54ef7f90c4dd3f470f04dae2db8e42d279c5f653->enter($__internal_2ca249fdc290ebbf7129649f54ef7f90c4dd3f470f04dae2db8e42d279c5f653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2ca249fdc290ebbf7129649f54ef7f90c4dd3f470f04dae2db8e42d279c5f653->leave($__internal_2ca249fdc290ebbf7129649f54ef7f90c4dd3f470f04dae2db8e42d279c5f653_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_5372a153eb3e78f97e3b2d79e3be40f2c19c5e64b245d6f3fbbf73983c1a7c96 = $this->env->getExtension("native_profiler");
        $__internal_5372a153eb3e78f97e3b2d79e3be40f2c19c5e64b245d6f3fbbf73983c1a7c96->enter($__internal_5372a153eb3e78f97e3b2d79e3be40f2c19c5e64b245d6f3fbbf73983c1a7c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_5372a153eb3e78f97e3b2d79e3be40f2c19c5e64b245d6f3fbbf73983c1a7c96->leave($__internal_5372a153eb3e78f97e3b2d79e3be40f2c19c5e64b245d6f3fbbf73983c1a7c96_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd08b501e533a7e7c8311a493038e6c3c9b56d802064e710791ca90aa211b110 = $this->env->getExtension("native_profiler");
        $__internal_dd08b501e533a7e7c8311a493038e6c3c9b56d802064e710791ca90aa211b110->enter($__internal_dd08b501e533a7e7c8311a493038e6c3c9b56d802064e710791ca90aa211b110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dd08b501e533a7e7c8311a493038e6c3c9b56d802064e710791ca90aa211b110->leave($__internal_dd08b501e533a7e7c8311a493038e6c3c9b56d802064e710791ca90aa211b110_prof);

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
