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
        $__internal_128f04dd5e488ee7927bba4ca86632d5da9882526fdd323579870dc0ad4bcb5d = $this->env->getExtension("native_profiler");
        $__internal_128f04dd5e488ee7927bba4ca86632d5da9882526fdd323579870dc0ad4bcb5d->enter($__internal_128f04dd5e488ee7927bba4ca86632d5da9882526fdd323579870dc0ad4bcb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_128f04dd5e488ee7927bba4ca86632d5da9882526fdd323579870dc0ad4bcb5d->leave($__internal_128f04dd5e488ee7927bba4ca86632d5da9882526fdd323579870dc0ad4bcb5d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_949baa12aa7db8efbe15d182fe7d46b9abfd0b17f3b8aac261c818215c6a4193 = $this->env->getExtension("native_profiler");
        $__internal_949baa12aa7db8efbe15d182fe7d46b9abfd0b17f3b8aac261c818215c6a4193->enter($__internal_949baa12aa7db8efbe15d182fe7d46b9abfd0b17f3b8aac261c818215c6a4193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_949baa12aa7db8efbe15d182fe7d46b9abfd0b17f3b8aac261c818215c6a4193->leave($__internal_949baa12aa7db8efbe15d182fe7d46b9abfd0b17f3b8aac261c818215c6a4193_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_60c6c0fa41a8f0344ec9b19ef9562e0479e56ba4f95ac2824729ddfc1592af80 = $this->env->getExtension("native_profiler");
        $__internal_60c6c0fa41a8f0344ec9b19ef9562e0479e56ba4f95ac2824729ddfc1592af80->enter($__internal_60c6c0fa41a8f0344ec9b19ef9562e0479e56ba4f95ac2824729ddfc1592af80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_60c6c0fa41a8f0344ec9b19ef9562e0479e56ba4f95ac2824729ddfc1592af80->leave($__internal_60c6c0fa41a8f0344ec9b19ef9562e0479e56ba4f95ac2824729ddfc1592af80_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e1a1d04c19f102b2811db2102e24a9e35511458b9ffdeaceb1ee802186b46a5 = $this->env->getExtension("native_profiler");
        $__internal_4e1a1d04c19f102b2811db2102e24a9e35511458b9ffdeaceb1ee802186b46a5->enter($__internal_4e1a1d04c19f102b2811db2102e24a9e35511458b9ffdeaceb1ee802186b46a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4e1a1d04c19f102b2811db2102e24a9e35511458b9ffdeaceb1ee802186b46a5->leave($__internal_4e1a1d04c19f102b2811db2102e24a9e35511458b9ffdeaceb1ee802186b46a5_prof);

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
