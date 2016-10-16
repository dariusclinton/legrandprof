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
        $__internal_51d850c008ccbbc1eb3b9ca72b7ab6b0a89e8ecb5b312b7f204efd6bc9743aec = $this->env->getExtension("native_profiler");
        $__internal_51d850c008ccbbc1eb3b9ca72b7ab6b0a89e8ecb5b312b7f204efd6bc9743aec->enter($__internal_51d850c008ccbbc1eb3b9ca72b7ab6b0a89e8ecb5b312b7f204efd6bc9743aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51d850c008ccbbc1eb3b9ca72b7ab6b0a89e8ecb5b312b7f204efd6bc9743aec->leave($__internal_51d850c008ccbbc1eb3b9ca72b7ab6b0a89e8ecb5b312b7f204efd6bc9743aec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e7ba1459712c38d8207c094d949e442ee74ca3e8d8e75b813beaaa60b5f3924 = $this->env->getExtension("native_profiler");
        $__internal_8e7ba1459712c38d8207c094d949e442ee74ca3e8d8e75b813beaaa60b5f3924->enter($__internal_8e7ba1459712c38d8207c094d949e442ee74ca3e8d8e75b813beaaa60b5f3924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8e7ba1459712c38d8207c094d949e442ee74ca3e8d8e75b813beaaa60b5f3924->leave($__internal_8e7ba1459712c38d8207c094d949e442ee74ca3e8d8e75b813beaaa60b5f3924_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_6565ae8693ea08b615e23e01f282268795b5ea20bfc7fe5c499a0a151e0ced1c = $this->env->getExtension("native_profiler");
        $__internal_6565ae8693ea08b615e23e01f282268795b5ea20bfc7fe5c499a0a151e0ced1c->enter($__internal_6565ae8693ea08b615e23e01f282268795b5ea20bfc7fe5c499a0a151e0ced1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_6565ae8693ea08b615e23e01f282268795b5ea20bfc7fe5c499a0a151e0ced1c->leave($__internal_6565ae8693ea08b615e23e01f282268795b5ea20bfc7fe5c499a0a151e0ced1c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4fa46a336fc542aad4591b832d5c283794d976c63d6ffd083d9b01e5d8777e5 = $this->env->getExtension("native_profiler");
        $__internal_c4fa46a336fc542aad4591b832d5c283794d976c63d6ffd083d9b01e5d8777e5->enter($__internal_c4fa46a336fc542aad4591b832d5c283794d976c63d6ffd083d9b01e5d8777e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4fa46a336fc542aad4591b832d5c283794d976c63d6ffd083d9b01e5d8777e5->leave($__internal_c4fa46a336fc542aad4591b832d5c283794d976c63d6ffd083d9b01e5d8777e5_prof);

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
