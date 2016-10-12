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
        $__internal_8d859b6887219a52cc9f5fb0d7dacaebd69c74b873ef8582e9043ca48a05857e = $this->env->getExtension("native_profiler");
        $__internal_8d859b6887219a52cc9f5fb0d7dacaebd69c74b873ef8582e9043ca48a05857e->enter($__internal_8d859b6887219a52cc9f5fb0d7dacaebd69c74b873ef8582e9043ca48a05857e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d859b6887219a52cc9f5fb0d7dacaebd69c74b873ef8582e9043ca48a05857e->leave($__internal_8d859b6887219a52cc9f5fb0d7dacaebd69c74b873ef8582e9043ca48a05857e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_09921529c5eef419a7447c9d6b8227a0e7520be5bd75fb0845e3410b238b7fbe = $this->env->getExtension("native_profiler");
        $__internal_09921529c5eef419a7447c9d6b8227a0e7520be5bd75fb0845e3410b238b7fbe->enter($__internal_09921529c5eef419a7447c9d6b8227a0e7520be5bd75fb0845e3410b238b7fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_09921529c5eef419a7447c9d6b8227a0e7520be5bd75fb0845e3410b238b7fbe->leave($__internal_09921529c5eef419a7447c9d6b8227a0e7520be5bd75fb0845e3410b238b7fbe_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_9f2711559da60591e1f666a060b782e8b1931dcb9076141b2cd43bc91065f0d7 = $this->env->getExtension("native_profiler");
        $__internal_9f2711559da60591e1f666a060b782e8b1931dcb9076141b2cd43bc91065f0d7->enter($__internal_9f2711559da60591e1f666a060b782e8b1931dcb9076141b2cd43bc91065f0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_9f2711559da60591e1f666a060b782e8b1931dcb9076141b2cd43bc91065f0d7->leave($__internal_9f2711559da60591e1f666a060b782e8b1931dcb9076141b2cd43bc91065f0d7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3a7ad418cba1c64e906e882a32e625f32d3742bb6c5df8ef1542f836d055bb7 = $this->env->getExtension("native_profiler");
        $__internal_f3a7ad418cba1c64e906e882a32e625f32d3742bb6c5df8ef1542f836d055bb7->enter($__internal_f3a7ad418cba1c64e906e882a32e625f32d3742bb6c5df8ef1542f836d055bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f3a7ad418cba1c64e906e882a32e625f32d3742bb6c5df8ef1542f836d055bb7->leave($__internal_f3a7ad418cba1c64e906e882a32e625f32d3742bb6c5df8ef1542f836d055bb7_prof);

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
