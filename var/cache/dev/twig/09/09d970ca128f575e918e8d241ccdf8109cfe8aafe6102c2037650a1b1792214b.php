<?php

/* LGPUserBundle:Indisponibilite:update.html.twig */
class __TwigTemplate_1ff4b89ce8e9c7f38a1d1ef94cc99b38448c5e2fdc584b147a837d4a1901fd7d extends Twig_Template
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
        $__internal_269a54065ac26aaf1875919a39ed0ad4dadb65589d2871a96c3508706c317357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269a54065ac26aaf1875919a39ed0ad4dadb65589d2871a96c3508706c317357->enter($__internal_269a54065ac26aaf1875919a39ed0ad4dadb65589d2871a96c3508706c317357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_269a54065ac26aaf1875919a39ed0ad4dadb65589d2871a96c3508706c317357->leave($__internal_269a54065ac26aaf1875919a39ed0ad4dadb65589d2871a96c3508706c317357_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_303ec9198170c934ea2384c63ac45eac2c4a4a1d6b3030b2c46e55040f588ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303ec9198170c934ea2384c63ac45eac2c4a4a1d6b3030b2c46e55040f588ed2->enter($__internal_303ec9198170c934ea2384c63ac45eac2c4a4a1d6b3030b2c46e55040f588ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_303ec9198170c934ea2384c63ac45eac2c4a4a1d6b3030b2c46e55040f588ed2->leave($__internal_303ec9198170c934ea2384c63ac45eac2c4a4a1d6b3030b2c46e55040f588ed2_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_90a365903827c889ce1940e30f29c895057864cafb6197e08eeee282e3f0e4ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a365903827c889ce1940e30f29c895057864cafb6197e08eeee282e3f0e4ba->enter($__internal_90a365903827c889ce1940e30f29c895057864cafb6197e08eeee282e3f0e4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_90a365903827c889ce1940e30f29c895057864cafb6197e08eeee282e3f0e4ba->leave($__internal_90a365903827c889ce1940e30f29c895057864cafb6197e08eeee282e3f0e4ba_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc032cb7692722cbbe2c82fccd44c98668a2147433983a5bf7d973a0af3cd052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc032cb7692722cbbe2c82fccd44c98668a2147433983a5bf7d973a0af3cd052->enter($__internal_dc032cb7692722cbbe2c82fccd44c98668a2147433983a5bf7d973a0af3cd052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_indisponibilite");
        echo "\">Mes indisponibilités</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_indisponibilite_add");
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
        
        $__internal_dc032cb7692722cbbe2c82fccd44c98668a2147433983a5bf7d973a0af3cd052->leave($__internal_dc032cb7692722cbbe2c82fccd44c98668a2147433983a5bf7d973a0af3cd052_prof);

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
