<?php

/* LGPUserBundle:Avis:add.html.twig */
class __TwigTemplate_cc644ffb9c7fb7ce96c9b90ebe643661824a1ca8c2836189197806ce35ef569e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:add.html.twig", 1);
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
        $__internal_59e0cd45e06056bcf58f5e09b4df81a0d155c6e60536a0d4dbd082a89af27a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e0cd45e06056bcf58f5e09b4df81a0d155c6e60536a0d4dbd082a89af27a59->enter($__internal_59e0cd45e06056bcf58f5e09b4df81a0d155c6e60536a0d4dbd082a89af27a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59e0cd45e06056bcf58f5e09b4df81a0d155c6e60536a0d4dbd082a89af27a59->leave($__internal_59e0cd45e06056bcf58f5e09b4df81a0d155c6e60536a0d4dbd082a89af27a59_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_31bc6de5c29f87d39596941a881778a6503ca3ea6bfcd7f19ed154dbaf48f76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31bc6de5c29f87d39596941a881778a6503ca3ea6bfcd7f19ed154dbaf48f76f->enter($__internal_31bc6de5c29f87d39596941a881778a6503ca3ea6bfcd7f19ed154dbaf48f76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_31bc6de5c29f87d39596941a881778a6503ca3ea6bfcd7f19ed154dbaf48f76f->leave($__internal_31bc6de5c29f87d39596941a881778a6503ca3ea6bfcd7f19ed154dbaf48f76f_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_0b0a8499aa8eb4516877572ad63ddbaace5a31f3995741d08f87b96ee227423a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0a8499aa8eb4516877572ad63ddbaace5a31f3995741d08f87b96ee227423a->enter($__internal_0b0a8499aa8eb4516877572ad63ddbaace5a31f3995741d08f87b96ee227423a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_0b0a8499aa8eb4516877572ad63ddbaace5a31f3995741d08f87b96ee227423a->leave($__internal_0b0a8499aa8eb4516877572ad63ddbaace5a31f3995741d08f87b96ee227423a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_02e95d396bb39b0226779b0f03cd0fd2eafdc16439bab6a62128f512cf53fe5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e95d396bb39b0226779b0f03cd0fd2eafdc16439bab6a62128f512cf53fe5f->enter($__internal_02e95d396bb39b0226779b0f03cd0fd2eafdc16439bab6a62128f512cf53fe5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <div class=\"notifications-header\">Donner un avis</div>
                <div class=\"notifications-content\">
                    ";
        // line 28
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 28)->display($context);
        // line 29
        echo "                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
    
  
";
        
        $__internal_02e95d396bb39b0226779b0f03cd0fd2eafdc16439bab6a62128f512cf53fe5f->leave($__internal_02e95d396bb39b0226779b0f03cd0fd2eafdc16439bab6a62128f512cf53fe5f_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:add.html.twig";
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
  Ajout d'avis - {{ parent() }}
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
                <div class=\"notifications-header\">Donner un avis</div>
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
