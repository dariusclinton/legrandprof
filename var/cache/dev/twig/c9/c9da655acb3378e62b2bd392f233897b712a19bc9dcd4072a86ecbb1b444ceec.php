<?php

/* LGPUserBundle:Indisponibilite:update.html.twig */
class __TwigTemplate_a93338cbd748ce6f4688999482470fc650fc1880887c7e4e364f085839f12335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 1);
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
        $__internal_2fd30271aff732fda55867d7ffce0d9abdae7f580367e6c7bc1e7ef7a4220b7c = $this->env->getExtension("native_profiler");
        $__internal_2fd30271aff732fda55867d7ffce0d9abdae7f580367e6c7bc1e7ef7a4220b7c->enter($__internal_2fd30271aff732fda55867d7ffce0d9abdae7f580367e6c7bc1e7ef7a4220b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fd30271aff732fda55867d7ffce0d9abdae7f580367e6c7bc1e7ef7a4220b7c->leave($__internal_2fd30271aff732fda55867d7ffce0d9abdae7f580367e6c7bc1e7ef7a4220b7c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25e719259752b344fe2795f71f0ace9a677c7955c5118ebff082373cd8d5d354 = $this->env->getExtension("native_profiler");
        $__internal_25e719259752b344fe2795f71f0ace9a677c7955c5118ebff082373cd8d5d354->enter($__internal_25e719259752b344fe2795f71f0ace9a677c7955c5118ebff082373cd8d5d354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_25e719259752b344fe2795f71f0ace9a677c7955c5118ebff082373cd8d5d354->leave($__internal_25e719259752b344fe2795f71f0ace9a677c7955c5118ebff082373cd8d5d354_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_706795fe70a4cf811776ac40cb28906d677531747b230ff5ac2642aad725cd69 = $this->env->getExtension("native_profiler");
        $__internal_706795fe70a4cf811776ac40cb28906d677531747b230ff5ac2642aad725cd69->enter($__internal_706795fe70a4cf811776ac40cb28906d677531747b230ff5ac2642aad725cd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_706795fe70a4cf811776ac40cb28906d677531747b230ff5ac2642aad725cd69->leave($__internal_706795fe70a4cf811776ac40cb28906d677531747b230ff5ac2642aad725cd69_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de1918442319b370c656412d77412488b82c8bcd928349cbe3937afe06db33f7 = $this->env->getExtension("native_profiler");
        $__internal_de1918442319b370c656412d77412488b82c8bcd928349cbe3937afe06db33f7->enter($__internal_de1918442319b370c656412d77412488b82c8bcd928349cbe3937afe06db33f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 20
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite");
        echo "\">Mes indisponibilités</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite_add");
        echo "\">Signaler une indisponibilité</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mise à jour d'une indisponibilité</div>
                <div class=\"notifications-content\">
                    
                    ";
        // line 29
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 29)->display($context);
        // line 30
        echo "                </div>
              </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  
";
        
        $__internal_de1918442319b370c656412d77412488b82c8bcd928349cbe3937afe06db33f7->leave($__internal_de1918442319b370c656412d77412488b82c8bcd928349cbe3937afe06db33f7_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  100 => 29,  89 => 21,  85 => 20,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mise à jour d'une indisponibilité - {{ parent() }}
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
                <div class=\"notifications-header\">Mise à jour d'une indisponibilité</div>
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
