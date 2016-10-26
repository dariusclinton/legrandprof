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
        $__internal_efb3b42abe9868915428ec884cdee0a676be9597ed62da11b0851e26da11ae4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb3b42abe9868915428ec884cdee0a676be9597ed62da11b0851e26da11ae4d->enter($__internal_efb3b42abe9868915428ec884cdee0a676be9597ed62da11b0851e26da11ae4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb3b42abe9868915428ec884cdee0a676be9597ed62da11b0851e26da11ae4d->leave($__internal_efb3b42abe9868915428ec884cdee0a676be9597ed62da11b0851e26da11ae4d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_428372e53448973562919cbf5064fa324c5cd1446fa81d920365ea329a81a529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428372e53448973562919cbf5064fa324c5cd1446fa81d920365ea329a81a529->enter($__internal_428372e53448973562919cbf5064fa324c5cd1446fa81d920365ea329a81a529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_428372e53448973562919cbf5064fa324c5cd1446fa81d920365ea329a81a529->leave($__internal_428372e53448973562919cbf5064fa324c5cd1446fa81d920365ea329a81a529_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_bee6c3d80e4b556be820770280234627668eae4512ffb16b89d72359e2f18388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee6c3d80e4b556be820770280234627668eae4512ffb16b89d72359e2f18388->enter($__internal_bee6c3d80e4b556be820770280234627668eae4512ffb16b89d72359e2f18388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_bee6c3d80e4b556be820770280234627668eae4512ffb16b89d72359e2f18388->leave($__internal_bee6c3d80e4b556be820770280234627668eae4512ffb16b89d72359e2f18388_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ffadc4f9ab7c7a9fc45313f705f7622dcb070306f0d64eb5b60d59565efa6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ffadc4f9ab7c7a9fc45313f705f7622dcb070306f0d64eb5b60d59565efa6d5->enter($__internal_8ffadc4f9ab7c7a9fc45313f705f7622dcb070306f0d64eb5b60d59565efa6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8ffadc4f9ab7c7a9fc45313f705f7622dcb070306f0d64eb5b60d59565efa6d5->leave($__internal_8ffadc4f9ab7c7a9fc45313f705f7622dcb070306f0d64eb5b60d59565efa6d5_prof);

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
