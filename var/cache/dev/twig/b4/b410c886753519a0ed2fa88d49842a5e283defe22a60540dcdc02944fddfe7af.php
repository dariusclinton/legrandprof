<?php

/* LGPUserBundle:Avis:update.html.twig */
class __TwigTemplate_201fa1a72332bdde9f3fe0ca8e829b417d38717419c46cb25bc94b877bf55eb4 extends Twig_Template
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
        $__internal_25073a71dbce772e9cd9ebae3a0c12f2e75a12345855491bcaa0e13715f9c44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25073a71dbce772e9cd9ebae3a0c12f2e75a12345855491bcaa0e13715f9c44f->enter($__internal_25073a71dbce772e9cd9ebae3a0c12f2e75a12345855491bcaa0e13715f9c44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25073a71dbce772e9cd9ebae3a0c12f2e75a12345855491bcaa0e13715f9c44f->leave($__internal_25073a71dbce772e9cd9ebae3a0c12f2e75a12345855491bcaa0e13715f9c44f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c46710eddcf883ab0398a78fb6c6389f2cb79a518b0a4438501cda93f2df248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c46710eddcf883ab0398a78fb6c6389f2cb79a518b0a4438501cda93f2df248->enter($__internal_0c46710eddcf883ab0398a78fb6c6389f2cb79a518b0a4438501cda93f2df248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0c46710eddcf883ab0398a78fb6c6389f2cb79a518b0a4438501cda93f2df248->leave($__internal_0c46710eddcf883ab0398a78fb6c6389f2cb79a518b0a4438501cda93f2df248_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_f75947025396e392f8de6d1b086b25d746f2956758a2cebc45d77fc151aa0f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75947025396e392f8de6d1b086b25d746f2956758a2cebc45d77fc151aa0f7e->enter($__internal_f75947025396e392f8de6d1b086b25d746f2956758a2cebc45d77fc151aa0f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_f75947025396e392f8de6d1b086b25d746f2956758a2cebc45d77fc151aa0f7e->leave($__internal_f75947025396e392f8de6d1b086b25d746f2956758a2cebc45d77fc151aa0f7e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f2b440ffce53a6f961a144cafa86d3e8a79ab1c283f73901ff1861b434dc943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2b440ffce53a6f961a144cafa86d3e8a79ab1c283f73901ff1861b434dc943->enter($__internal_9f2b440ffce53a6f961a144cafa86d3e8a79ab1c283f73901ff1861b434dc943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_avis");
        echo "\">Mes avis</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_avis_add");
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
        
        $__internal_9f2b440ffce53a6f961a144cafa86d3e8a79ab1c283f73901ff1861b434dc943->leave($__internal_9f2b440ffce53a6f961a144cafa86d3e8a79ab1c283f73901ff1861b434dc943_prof);

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
