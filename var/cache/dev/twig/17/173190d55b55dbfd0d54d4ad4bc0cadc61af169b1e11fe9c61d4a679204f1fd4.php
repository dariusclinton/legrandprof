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
        $__internal_ff2de893b0ad89b7aee57f1d22ce80f7a47f210fed1cf16a8f598db58ea7d252 = $this->env->getExtension("native_profiler");
        $__internal_ff2de893b0ad89b7aee57f1d22ce80f7a47f210fed1cf16a8f598db58ea7d252->enter($__internal_ff2de893b0ad89b7aee57f1d22ce80f7a47f210fed1cf16a8f598db58ea7d252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff2de893b0ad89b7aee57f1d22ce80f7a47f210fed1cf16a8f598db58ea7d252->leave($__internal_ff2de893b0ad89b7aee57f1d22ce80f7a47f210fed1cf16a8f598db58ea7d252_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb5355e1c16fe8a0702ac93525dce281c2a612750f7ca5b3ea8c41e23ae7bf6c = $this->env->getExtension("native_profiler");
        $__internal_eb5355e1c16fe8a0702ac93525dce281c2a612750f7ca5b3ea8c41e23ae7bf6c->enter($__internal_eb5355e1c16fe8a0702ac93525dce281c2a612750f7ca5b3ea8c41e23ae7bf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_eb5355e1c16fe8a0702ac93525dce281c2a612750f7ca5b3ea8c41e23ae7bf6c->leave($__internal_eb5355e1c16fe8a0702ac93525dce281c2a612750f7ca5b3ea8c41e23ae7bf6c_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_0b4465a3d7d05b8359a9f12092e754ecaec4a181ea8addd4e8f3b2d4443cf862 = $this->env->getExtension("native_profiler");
        $__internal_0b4465a3d7d05b8359a9f12092e754ecaec4a181ea8addd4e8f3b2d4443cf862->enter($__internal_0b4465a3d7d05b8359a9f12092e754ecaec4a181ea8addd4e8f3b2d4443cf862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_0b4465a3d7d05b8359a9f12092e754ecaec4a181ea8addd4e8f3b2d4443cf862->leave($__internal_0b4465a3d7d05b8359a9f12092e754ecaec4a181ea8addd4e8f3b2d4443cf862_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_159d1f553d9fac99bdc48256e4a2539421c6e7c3ba1ed34ea158dea869c8bdf8 = $this->env->getExtension("native_profiler");
        $__internal_159d1f553d9fac99bdc48256e4a2539421c6e7c3ba1ed34ea158dea869c8bdf8->enter($__internal_159d1f553d9fac99bdc48256e4a2539421c6e7c3ba1ed34ea158dea869c8bdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_159d1f553d9fac99bdc48256e4a2539421c6e7c3ba1ed34ea158dea869c8bdf8->leave($__internal_159d1f553d9fac99bdc48256e4a2539421c6e7c3ba1ed34ea158dea869c8bdf8_prof);

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
