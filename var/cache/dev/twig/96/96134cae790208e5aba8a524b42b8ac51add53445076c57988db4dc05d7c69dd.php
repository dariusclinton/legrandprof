<?php

/* LGPUserBundle:Indisponibilite:add.html.twig */
class __TwigTemplate_df4d71d2cd9c8c30c89e26642ce6b944c300b02ab19d6fd55e8265fe50ff9ade extends Twig_Template
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
        $__internal_f00bd2a9de7b499d45c744278413bdb190e8d65b6442ffd98e59cf701a6381f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00bd2a9de7b499d45c744278413bdb190e8d65b6442ffd98e59cf701a6381f1->enter($__internal_f00bd2a9de7b499d45c744278413bdb190e8d65b6442ffd98e59cf701a6381f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f00bd2a9de7b499d45c744278413bdb190e8d65b6442ffd98e59cf701a6381f1->leave($__internal_f00bd2a9de7b499d45c744278413bdb190e8d65b6442ffd98e59cf701a6381f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b834738c7cd654ff709768bc6a71014afedd16366e62e3bf9bc1161a2fce9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b834738c7cd654ff709768bc6a71014afedd16366e62e3bf9bc1161a2fce9e1->enter($__internal_3b834738c7cd654ff709768bc6a71014afedd16366e62e3bf9bc1161a2fce9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3b834738c7cd654ff709768bc6a71014afedd16366e62e3bf9bc1161a2fce9e1->leave($__internal_3b834738c7cd654ff709768bc6a71014afedd16366e62e3bf9bc1161a2fce9e1_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_5c8a8408e0966f277ba749ee1a8d0f05da359c32e4a91fe58d384a169a90920b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8a8408e0966f277ba749ee1a8d0f05da359c32e4a91fe58d384a169a90920b->enter($__internal_5c8a8408e0966f277ba749ee1a8d0f05da359c32e4a91fe58d384a169a90920b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_5c8a8408e0966f277ba749ee1a8d0f05da359c32e4a91fe58d384a169a90920b->leave($__internal_5c8a8408e0966f277ba749ee1a8d0f05da359c32e4a91fe58d384a169a90920b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_50b79beb0c690845f664d7bc72b1cfc94266aa60ced30417b95853fea8b18c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b79beb0c690845f664d7bc72b1cfc94266aa60ced30417b95853fea8b18c48->enter($__internal_50b79beb0c690845f664d7bc72b1cfc94266aa60ced30417b95853fea8b18c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_indisponibilite");
        echo "\">Mes indisponibilités</a></li>
              <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_indisponibilite_add");
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
        
        $__internal_50b79beb0c690845f664d7bc72b1cfc94266aa60ced30417b95853fea8b18c48->leave($__internal_50b79beb0c690845f664d7bc72b1cfc94266aa60ced30417b95853fea8b18c48_prof);

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
