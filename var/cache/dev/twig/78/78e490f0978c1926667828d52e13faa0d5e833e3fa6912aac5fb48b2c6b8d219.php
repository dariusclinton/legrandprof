<?php

/* LGPUserBundle:SeanceDeCours:add.html.twig */
class __TwigTemplate_91aee680f0739ad76bfaeb626e222ddba9b6da6ffc5f5cca50e02ab871574562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:SeanceDeCours:add.html.twig", 1);
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
        $__internal_cd343a7122868655562d69bae215d9c5ee8cc18d78151e66b897c118cbafa817 = $this->env->getExtension("native_profiler");
        $__internal_cd343a7122868655562d69bae215d9c5ee8cc18d78151e66b897c118cbafa817->enter($__internal_cd343a7122868655562d69bae215d9c5ee8cc18d78151e66b897c118cbafa817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd343a7122868655562d69bae215d9c5ee8cc18d78151e66b897c118cbafa817->leave($__internal_cd343a7122868655562d69bae215d9c5ee8cc18d78151e66b897c118cbafa817_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bf8e857205b4b90d45b362b78c574b5b2f7522e6325340a9224a95afc5c31e0 = $this->env->getExtension("native_profiler");
        $__internal_2bf8e857205b4b90d45b362b78c574b5b2f7522e6325340a9224a95afc5c31e0->enter($__internal_2bf8e857205b4b90d45b362b78c574b5b2f7522e6325340a9224a95afc5c31e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une séance de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2bf8e857205b4b90d45b362b78c574b5b2f7522e6325340a9224a95afc5c31e0->leave($__internal_2bf8e857205b4b90d45b362b78c574b5b2f7522e6325340a9224a95afc5c31e0_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_81f0f9bb67f534ff2d41a003c9f6f3b31df3ee4a396067027d18a63e62968cfd = $this->env->getExtension("native_profiler");
        $__internal_81f0f9bb67f534ff2d41a003c9f6f3b31df3ee4a396067027d18a63e62968cfd->enter($__internal_81f0f9bb67f534ff2d41a003c9f6f3b31df3ee4a396067027d18a63e62968cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_81f0f9bb67f534ff2d41a003c9f6f3b31df3ee4a396067027d18a63e62968cfd->leave($__internal_81f0f9bb67f534ff2d41a003c9f6f3b31df3ee4a396067027d18a63e62968cfd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_86dc95fc872b56ae07088208b90232737951e029bf3a83aab5a8ab401fc8100a = $this->env->getExtension("native_profiler");
        $__internal_86dc95fc872b56ae07088208b90232737951e029bf3a83aab5a8ab401fc8100a->enter($__internal_86dc95fc872b56ae07088208b90232737951e029bf3a83aab5a8ab401fc8100a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes séances de cours</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_seance_de_cours");
        echo "\">Mes séances de cours</a></li>
              <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_seance_de_cours_add");
        echo "\">Ajouter une séance de cours</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Ajouter une séance de cours</div>
                <div class=\"notifications-content\">
                    
                    ";
        // line 30
        $this->loadTemplate("LGPUserBundle:SeanceDeCours:formulaire.html.twig", "LGPUserBundle:SeanceDeCours:add.html.twig", 30)->display($context);
        // line 31
        echo "                </div>
              </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  
";
        
        $__internal_86dc95fc872b56ae07088208b90232737951e029bf3a83aab5a8ab401fc8100a->leave($__internal_86dc95fc872b56ae07088208b90232737951e029bf3a83aab5a8ab401fc8100a_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:SeanceDeCours:add.html.twig";
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
  Ajout d'une séance de cours - {{ parent() }}
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
            <h3 class=\"title-block-dash\">Gérer mes séances de cours</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_prof_seance_de_cours') }}\">Mes séances de cours</a></li>
              <li><a href=\"{{ path('lgp_user_prof_seance_de_cours_add') }}\">Ajouter une séance de cours</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Ajouter une séance de cours</div>
                <div class=\"notifications-content\">
                    
                    {% include 'LGPUserBundle:SeanceDeCours:formulaire.html.twig' %}
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
