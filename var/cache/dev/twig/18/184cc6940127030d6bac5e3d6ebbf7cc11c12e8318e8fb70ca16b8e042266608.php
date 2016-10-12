<?php

/* LGPUserBundle:Avis:update.html.twig */
class __TwigTemplate_441dc54e3edf3c254a14e708c88678c33b58742741d6c45f5f56afb80f44cdb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:update.html.twig", 1);
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
        $__internal_fa5ef2dc2c09c6a66bbae9f0c6c9ab2457a86dbbe5be157ce22ba31b39215f71 = $this->env->getExtension("native_profiler");
        $__internal_fa5ef2dc2c09c6a66bbae9f0c6c9ab2457a86dbbe5be157ce22ba31b39215f71->enter($__internal_fa5ef2dc2c09c6a66bbae9f0c6c9ab2457a86dbbe5be157ce22ba31b39215f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa5ef2dc2c09c6a66bbae9f0c6c9ab2457a86dbbe5be157ce22ba31b39215f71->leave($__internal_fa5ef2dc2c09c6a66bbae9f0c6c9ab2457a86dbbe5be157ce22ba31b39215f71_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_71e98d6409d3599fdc3fb365e57ea83b46b778b701b1bebeb52e406bf323774b = $this->env->getExtension("native_profiler");
        $__internal_71e98d6409d3599fdc3fb365e57ea83b46b778b701b1bebeb52e406bf323774b->enter($__internal_71e98d6409d3599fdc3fb365e57ea83b46b778b701b1bebeb52e406bf323774b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_71e98d6409d3599fdc3fb365e57ea83b46b778b701b1bebeb52e406bf323774b->leave($__internal_71e98d6409d3599fdc3fb365e57ea83b46b778b701b1bebeb52e406bf323774b_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_5d5933b9e1328883c180e0c6e9a6f208bcbba774a16af95fdb9ea1e7db52f69a = $this->env->getExtension("native_profiler");
        $__internal_5d5933b9e1328883c180e0c6e9a6f208bcbba774a16af95fdb9ea1e7db52f69a->enter($__internal_5d5933b9e1328883c180e0c6e9a6f208bcbba774a16af95fdb9ea1e7db52f69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_5d5933b9e1328883c180e0c6e9a6f208bcbba774a16af95fdb9ea1e7db52f69a->leave($__internal_5d5933b9e1328883c180e0c6e9a6f208bcbba774a16af95fdb9ea1e7db52f69a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb6c6c64cfa4e825487dc756776d719ecdb3f09885aa834d262dc02ec0c8fc05 = $this->env->getExtension("native_profiler");
        $__internal_cb6c6c64cfa4e825487dc756776d719ecdb3f09885aa834d262dc02ec0c8fc05->enter($__internal_cb6c6c64cfa4e825487dc756776d719ecdb3f09885aa834d262dc02ec0c8fc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <div class=\"notifications-header\">Modifier un avis</div>
                <div class=\"notifications-content\">
                    ";
        // line 28
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 28)->display($context);
        // line 29
        echo "                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  
";
        
        $__internal_cb6c6c64cfa4e825487dc756776d719ecdb3f09885aa834d262dc02ec0c8fc05->leave($__internal_cb6c6c64cfa4e825487dc756776d719ecdb3f09885aa834d262dc02ec0c8fc05_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:update.html.twig";
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
  Modification d'un avis - {{ parent() }}
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
                <div class=\"notifications-header\">Modifier un avis</div>
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
