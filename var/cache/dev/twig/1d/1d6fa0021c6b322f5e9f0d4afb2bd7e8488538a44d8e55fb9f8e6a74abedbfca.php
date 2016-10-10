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
        $__internal_5ef37b613bf4986598416d6d3f5f6f238947bf8896ec2f9408601095ca7b0e8d = $this->env->getExtension("native_profiler");
        $__internal_5ef37b613bf4986598416d6d3f5f6f238947bf8896ec2f9408601095ca7b0e8d->enter($__internal_5ef37b613bf4986598416d6d3f5f6f238947bf8896ec2f9408601095ca7b0e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ef37b613bf4986598416d6d3f5f6f238947bf8896ec2f9408601095ca7b0e8d->leave($__internal_5ef37b613bf4986598416d6d3f5f6f238947bf8896ec2f9408601095ca7b0e8d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7fb4a8dfd5211349fd7b4e775e93b282335d6fd3dc2062f5a67b9a811014a9e = $this->env->getExtension("native_profiler");
        $__internal_b7fb4a8dfd5211349fd7b4e775e93b282335d6fd3dc2062f5a67b9a811014a9e->enter($__internal_b7fb4a8dfd5211349fd7b4e775e93b282335d6fd3dc2062f5a67b9a811014a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b7fb4a8dfd5211349fd7b4e775e93b282335d6fd3dc2062f5a67b9a811014a9e->leave($__internal_b7fb4a8dfd5211349fd7b4e775e93b282335d6fd3dc2062f5a67b9a811014a9e_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_b0582459567c4b1265fd2037cc32dea8cea680ba3acc14f256ea6f37c22dea06 = $this->env->getExtension("native_profiler");
        $__internal_b0582459567c4b1265fd2037cc32dea8cea680ba3acc14f256ea6f37c22dea06->enter($__internal_b0582459567c4b1265fd2037cc32dea8cea680ba3acc14f256ea6f37c22dea06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_b0582459567c4b1265fd2037cc32dea8cea680ba3acc14f256ea6f37c22dea06->leave($__internal_b0582459567c4b1265fd2037cc32dea8cea680ba3acc14f256ea6f37c22dea06_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_29a7e7616d8d36ee07b8918b152b635f4dab94ed09d7253e7a26e475f3094bb5 = $this->env->getExtension("native_profiler");
        $__internal_29a7e7616d8d36ee07b8918b152b635f4dab94ed09d7253e7a26e475f3094bb5->enter($__internal_29a7e7616d8d36ee07b8918b152b635f4dab94ed09d7253e7a26e475f3094bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_29a7e7616d8d36ee07b8918b152b635f4dab94ed09d7253e7a26e475f3094bb5->leave($__internal_29a7e7616d8d36ee07b8918b152b635f4dab94ed09d7253e7a26e475f3094bb5_prof);

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
