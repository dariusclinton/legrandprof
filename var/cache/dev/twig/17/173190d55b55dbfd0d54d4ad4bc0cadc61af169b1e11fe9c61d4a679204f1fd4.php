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
        $__internal_62e138866b2ced6a8bd6365226c5d43f509a73f76748a49a2ab852c63a71b053 = $this->env->getExtension("native_profiler");
        $__internal_62e138866b2ced6a8bd6365226c5d43f509a73f76748a49a2ab852c63a71b053->enter($__internal_62e138866b2ced6a8bd6365226c5d43f509a73f76748a49a2ab852c63a71b053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62e138866b2ced6a8bd6365226c5d43f509a73f76748a49a2ab852c63a71b053->leave($__internal_62e138866b2ced6a8bd6365226c5d43f509a73f76748a49a2ab852c63a71b053_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ba0af5ab263ce592301823cf59c5d9906d4c49a359494b2e1299629e1bcd6f6 = $this->env->getExtension("native_profiler");
        $__internal_4ba0af5ab263ce592301823cf59c5d9906d4c49a359494b2e1299629e1bcd6f6->enter($__internal_4ba0af5ab263ce592301823cf59c5d9906d4c49a359494b2e1299629e1bcd6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4ba0af5ab263ce592301823cf59c5d9906d4c49a359494b2e1299629e1bcd6f6->leave($__internal_4ba0af5ab263ce592301823cf59c5d9906d4c49a359494b2e1299629e1bcd6f6_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_61d7ebb7d9a8a528bc2157f990f8c1a1f54b7c2cc078e02ce6bf90a76f771f22 = $this->env->getExtension("native_profiler");
        $__internal_61d7ebb7d9a8a528bc2157f990f8c1a1f54b7c2cc078e02ce6bf90a76f771f22->enter($__internal_61d7ebb7d9a8a528bc2157f990f8c1a1f54b7c2cc078e02ce6bf90a76f771f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_61d7ebb7d9a8a528bc2157f990f8c1a1f54b7c2cc078e02ce6bf90a76f771f22->leave($__internal_61d7ebb7d9a8a528bc2157f990f8c1a1f54b7c2cc078e02ce6bf90a76f771f22_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c80d8e04afb8c876c466befa29cd24c622c2738b648aaf91991d7ec08bef5ea = $this->env->getExtension("native_profiler");
        $__internal_9c80d8e04afb8c876c466befa29cd24c622c2738b648aaf91991d7ec08bef5ea->enter($__internal_9c80d8e04afb8c876c466befa29cd24c622c2738b648aaf91991d7ec08bef5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c80d8e04afb8c876c466befa29cd24c622c2738b648aaf91991d7ec08bef5ea->leave($__internal_9c80d8e04afb8c876c466befa29cd24c622c2738b648aaf91991d7ec08bef5ea_prof);

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
