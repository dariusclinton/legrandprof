<?php

/* LGPUserBundle:Cours:add.html.twig */
class __TwigTemplate_be758b6cd042679e4b590d7d45920eb788fb7ffb79ad12364d878f4bba6b525e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Cours:add.html.twig", 1);
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
        $__internal_2866e8493f488aac2262684eab7dfa1d71ada4d936d94273cc607a77b0416a1d = $this->env->getExtension("native_profiler");
        $__internal_2866e8493f488aac2262684eab7dfa1d71ada4d936d94273cc607a77b0416a1d->enter($__internal_2866e8493f488aac2262684eab7dfa1d71ada4d936d94273cc607a77b0416a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2866e8493f488aac2262684eab7dfa1d71ada4d936d94273cc607a77b0416a1d->leave($__internal_2866e8493f488aac2262684eab7dfa1d71ada4d936d94273cc607a77b0416a1d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_edb3b2dae010eb42cdd04fc044109975926b8a44bbe8bb3a358ea69027c6cb99 = $this->env->getExtension("native_profiler");
        $__internal_edb3b2dae010eb42cdd04fc044109975926b8a44bbe8bb3a358ea69027c6cb99->enter($__internal_edb3b2dae010eb42cdd04fc044109975926b8a44bbe8bb3a358ea69027c6cb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_edb3b2dae010eb42cdd04fc044109975926b8a44bbe8bb3a358ea69027c6cb99->leave($__internal_edb3b2dae010eb42cdd04fc044109975926b8a44bbe8bb3a358ea69027c6cb99_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_1d47a9d37d6f4a43ab9ce288f8a47866687c52030722ceab1d0af34a907d414b = $this->env->getExtension("native_profiler");
        $__internal_1d47a9d37d6f4a43ab9ce288f8a47866687c52030722ceab1d0af34a907d414b->enter($__internal_1d47a9d37d6f4a43ab9ce288f8a47866687c52030722ceab1d0af34a907d414b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_1d47a9d37d6f4a43ab9ce288f8a47866687c52030722ceab1d0af34a907d414b->leave($__internal_1d47a9d37d6f4a43ab9ce288f8a47866687c52030722ceab1d0af34a907d414b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bde9f31f77a88a9b9384399b038fd08c8b9bc7d9b6802bb7274451bfaf0e7ae = $this->env->getExtension("native_profiler");
        $__internal_0bde9f31f77a88a9b9384399b038fd08c8b9bc7d9b6802bb7274451bfaf0e7ae->enter($__internal_0bde9f31f77a88a9b9384399b038fd08c8b9bc7d9b6802bb7274451bfaf0e7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                            <div class=\"notifications-header\">Ajouter un cours</div>
                                            <div class=\"notifications-content\">
                                                ";
        // line 29
        $this->loadTemplate("LGPUserBundle:Cours:formulaire.html.twig", "LGPUserBundle:Cours:add.html.twig", 29)->display($context);
        // line 30
        echo "                                            </div>
                                    </div>
                                
                            </div>
                    </div>
            </div>
        </div>
    </div>
  
";
        
        $__internal_0bde9f31f77a88a9b9384399b038fd08c8b9bc7d9b6802bb7274451bfaf0e7ae->leave($__internal_0bde9f31f77a88a9b9384399b038fd08c8b9bc7d9b6802bb7274451bfaf0e7ae_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Cours:add.html.twig";
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
  Ajout d'un cours - {{ parent() }}
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
                                            <div class=\"notifications-header\">Ajouter un cours</div>
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
