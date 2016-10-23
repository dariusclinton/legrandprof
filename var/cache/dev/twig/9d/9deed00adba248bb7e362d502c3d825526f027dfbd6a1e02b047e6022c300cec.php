<?php

/* LGPUserBundle:Cours:update.html.twig */
class __TwigTemplate_29c8667ecb8ddde55e0251a04ff2f7399af7da435ad0bb53fcb16b58c87308c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Cours:update.html.twig", 1);
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
        $__internal_144aa93a0e8f4a1a7e5e837dac9ecd2510fcabb69b545ef228c4fa60a11541fa = $this->env->getExtension("native_profiler");
        $__internal_144aa93a0e8f4a1a7e5e837dac9ecd2510fcabb69b545ef228c4fa60a11541fa->enter($__internal_144aa93a0e8f4a1a7e5e837dac9ecd2510fcabb69b545ef228c4fa60a11541fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_144aa93a0e8f4a1a7e5e837dac9ecd2510fcabb69b545ef228c4fa60a11541fa->leave($__internal_144aa93a0e8f4a1a7e5e837dac9ecd2510fcabb69b545ef228c4fa60a11541fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_412bb7f0aca195ac6bf8ccd404c493f96719c0049269ccb21def8e45f928d797 = $this->env->getExtension("native_profiler");
        $__internal_412bb7f0aca195ac6bf8ccd404c493f96719c0049269ccb21def8e45f928d797->enter($__internal_412bb7f0aca195ac6bf8ccd404c493f96719c0049269ccb21def8e45f928d797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_412bb7f0aca195ac6bf8ccd404c493f96719c0049269ccb21def8e45f928d797->leave($__internal_412bb7f0aca195ac6bf8ccd404c493f96719c0049269ccb21def8e45f928d797_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_30208bbd0b33fd88d6fc3a5625e1eecdedb3e9893153578149ff0d3cdd854c20 = $this->env->getExtension("native_profiler");
        $__internal_30208bbd0b33fd88d6fc3a5625e1eecdedb3e9893153578149ff0d3cdd854c20->enter($__internal_30208bbd0b33fd88d6fc3a5625e1eecdedb3e9893153578149ff0d3cdd854c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_30208bbd0b33fd88d6fc3a5625e1eecdedb3e9893153578149ff0d3cdd854c20->leave($__internal_30208bbd0b33fd88d6fc3a5625e1eecdedb3e9893153578149ff0d3cdd854c20_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c557da407fca78635f6f978340f1842ca57e6923168d021f84d6209cb3674380 = $this->env->getExtension("native_profiler");
        $__internal_c557da407fca78635f6f978340f1842ca57e6923168d021f84d6209cb3674380->enter($__internal_c557da407fca78635f6f978340f1842ca57e6923168d021f84d6209cb3674380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                    <div class=\"row\">
                            <div class=\"col-md-3\">
                                    <h3 class=\"title-block-dash\">Gérer mes cours</h3>
                                    <ul class=\"menu-dash\">
                                            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_cours");
        echo "\">Ma liste de cours</a></li>
                                            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_cours_add");
        echo "\">Ajouter un cours</a></li>
                                    </ul>
                            </div>
                            <div class=\"col-md-9\">
                                
                                    <div class=\"notifications-block\">
                                            <div class=\"notifications-header\">Modifier un cours</div>
                                            <div class=\"notifications-content\">
                                                ";
        // line 29
        $this->loadTemplate("LGPUserBundle:Cours:formulaire.html.twig", "LGPUserBundle:Cours:update.html.twig", 29)->display($context);
        // line 30
        echo "                                            </div>
                                    </div>
                                
                            </div>
                    </div>
            </div>
        </div>
    </div>
                                            
  
";
        
        $__internal_c557da407fca78635f6f978340f1842ca57e6923168d021f84d6209cb3674380->leave($__internal_c557da407fca78635f6f978340f1842ca57e6923168d021f84d6209cb3674380_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Cours:update.html.twig";
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
  Modification d'un cours - {{ parent() }}
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
                                    <h3 class=\"title-block-dash\">Gérer mes cours</h3>
                                    <ul class=\"menu-dash\">
                                            <li><a href=\"{{ path('lgp_user_prof_cours') }}\">Ma liste de cours</a></li>
                                            <li><a href=\"{{ path('lgp_user_prof_cours_add') }}\">Ajouter un cours</a></li>
                                    </ul>
                            </div>
                            <div class=\"col-md-9\">
                                
                                    <div class=\"notifications-block\">
                                            <div class=\"notifications-header\">Modifier un cours</div>
                                            <div class=\"notifications-content\">
                                                {% include 'LGPUserBundle:Cours:formulaire.html.twig' %}
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
