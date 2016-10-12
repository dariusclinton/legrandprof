<?php

/* LGPUserBundle:Avis:add.html.twig */
class __TwigTemplate_4d7c8a9861e340f0ff8fba9c9a7ab62f96f8a7b9ffbba21677bf1578b21ff741 extends Twig_Template
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
        $__internal_24213ce5c945ba0d5aa87ec2ed4cb03b492696bd8cc9c76db340a9f9850794e4 = $this->env->getExtension("native_profiler");
        $__internal_24213ce5c945ba0d5aa87ec2ed4cb03b492696bd8cc9c76db340a9f9850794e4->enter($__internal_24213ce5c945ba0d5aa87ec2ed4cb03b492696bd8cc9c76db340a9f9850794e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24213ce5c945ba0d5aa87ec2ed4cb03b492696bd8cc9c76db340a9f9850794e4->leave($__internal_24213ce5c945ba0d5aa87ec2ed4cb03b492696bd8cc9c76db340a9f9850794e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_023bdf3a5836ef4f8dba56234ce570c1eebfaa235fc5eab3a49d15622d5f9f11 = $this->env->getExtension("native_profiler");
        $__internal_023bdf3a5836ef4f8dba56234ce570c1eebfaa235fc5eab3a49d15622d5f9f11->enter($__internal_023bdf3a5836ef4f8dba56234ce570c1eebfaa235fc5eab3a49d15622d5f9f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_023bdf3a5836ef4f8dba56234ce570c1eebfaa235fc5eab3a49d15622d5f9f11->leave($__internal_023bdf3a5836ef4f8dba56234ce570c1eebfaa235fc5eab3a49d15622d5f9f11_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_48fa93494a41bd1577595addfce05b87d5ce587d12c404a8b473ccca454cb93c = $this->env->getExtension("native_profiler");
        $__internal_48fa93494a41bd1577595addfce05b87d5ce587d12c404a8b473ccca454cb93c->enter($__internal_48fa93494a41bd1577595addfce05b87d5ce587d12c404a8b473ccca454cb93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_48fa93494a41bd1577595addfce05b87d5ce587d12c404a8b473ccca454cb93c->leave($__internal_48fa93494a41bd1577595addfce05b87d5ce587d12c404a8b473ccca454cb93c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5242f86a16b3181ddd1577e140f5401551f18fe29b5ecd846457099f1925a5e = $this->env->getExtension("native_profiler");
        $__internal_d5242f86a16b3181ddd1577e140f5401551f18fe29b5ecd846457099f1925a5e->enter($__internal_d5242f86a16b3181ddd1577e140f5401551f18fe29b5ecd846457099f1925a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d5242f86a16b3181ddd1577e140f5401551f18fe29b5ecd846457099f1925a5e->leave($__internal_d5242f86a16b3181ddd1577e140f5401551f18fe29b5ecd846457099f1925a5e_prof);

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
