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
        $__internal_cbd08655d99d9ffb6a358df8b902fee89f28182237e74efb6b614bfd079b9cb0 = $this->env->getExtension("native_profiler");
        $__internal_cbd08655d99d9ffb6a358df8b902fee89f28182237e74efb6b614bfd079b9cb0->enter($__internal_cbd08655d99d9ffb6a358df8b902fee89f28182237e74efb6b614bfd079b9cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbd08655d99d9ffb6a358df8b902fee89f28182237e74efb6b614bfd079b9cb0->leave($__internal_cbd08655d99d9ffb6a358df8b902fee89f28182237e74efb6b614bfd079b9cb0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89d2565fbc2193f8c751e9ac3dec2b5ef63ece1591707756efe95206d37b6d9d = $this->env->getExtension("native_profiler");
        $__internal_89d2565fbc2193f8c751e9ac3dec2b5ef63ece1591707756efe95206d37b6d9d->enter($__internal_89d2565fbc2193f8c751e9ac3dec2b5ef63ece1591707756efe95206d37b6d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_89d2565fbc2193f8c751e9ac3dec2b5ef63ece1591707756efe95206d37b6d9d->leave($__internal_89d2565fbc2193f8c751e9ac3dec2b5ef63ece1591707756efe95206d37b6d9d_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_e9e888fa7d4fc78869b3804f662c3dd787b05b2fa693931db2e34da43983db78 = $this->env->getExtension("native_profiler");
        $__internal_e9e888fa7d4fc78869b3804f662c3dd787b05b2fa693931db2e34da43983db78->enter($__internal_e9e888fa7d4fc78869b3804f662c3dd787b05b2fa693931db2e34da43983db78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_e9e888fa7d4fc78869b3804f662c3dd787b05b2fa693931db2e34da43983db78->leave($__internal_e9e888fa7d4fc78869b3804f662c3dd787b05b2fa693931db2e34da43983db78_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cd1adbcffbae3d967d691c2982ad797ecce871aa00766f0a31afbdafb1064c0 = $this->env->getExtension("native_profiler");
        $__internal_8cd1adbcffbae3d967d691c2982ad797ecce871aa00766f0a31afbdafb1064c0->enter($__internal_8cd1adbcffbae3d967d691c2982ad797ecce871aa00766f0a31afbdafb1064c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8cd1adbcffbae3d967d691c2982ad797ecce871aa00766f0a31afbdafb1064c0->leave($__internal_8cd1adbcffbae3d967d691c2982ad797ecce871aa00766f0a31afbdafb1064c0_prof);

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
