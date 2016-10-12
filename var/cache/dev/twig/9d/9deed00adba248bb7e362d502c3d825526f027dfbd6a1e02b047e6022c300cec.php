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
        $__internal_18497540bd53e4ec929eeb8a5d590ff22aa48b171780d43121640353146e116f = $this->env->getExtension("native_profiler");
        $__internal_18497540bd53e4ec929eeb8a5d590ff22aa48b171780d43121640353146e116f->enter($__internal_18497540bd53e4ec929eeb8a5d590ff22aa48b171780d43121640353146e116f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18497540bd53e4ec929eeb8a5d590ff22aa48b171780d43121640353146e116f->leave($__internal_18497540bd53e4ec929eeb8a5d590ff22aa48b171780d43121640353146e116f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d947d0ded9dd9e63346af2e6da86c7446854d1d344f05449e3151f79802c7ce = $this->env->getExtension("native_profiler");
        $__internal_6d947d0ded9dd9e63346af2e6da86c7446854d1d344f05449e3151f79802c7ce->enter($__internal_6d947d0ded9dd9e63346af2e6da86c7446854d1d344f05449e3151f79802c7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6d947d0ded9dd9e63346af2e6da86c7446854d1d344f05449e3151f79802c7ce->leave($__internal_6d947d0ded9dd9e63346af2e6da86c7446854d1d344f05449e3151f79802c7ce_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_7c87924123e53af06cb8a260215d297498dd8321208381a56bdb369d29d6e265 = $this->env->getExtension("native_profiler");
        $__internal_7c87924123e53af06cb8a260215d297498dd8321208381a56bdb369d29d6e265->enter($__internal_7c87924123e53af06cb8a260215d297498dd8321208381a56bdb369d29d6e265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_7c87924123e53af06cb8a260215d297498dd8321208381a56bdb369d29d6e265->leave($__internal_7c87924123e53af06cb8a260215d297498dd8321208381a56bdb369d29d6e265_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c35b60e339ebb25f267f3d8ef61ef2f8bd2a836f9369e05c2046fc2a493fbcbf = $this->env->getExtension("native_profiler");
        $__internal_c35b60e339ebb25f267f3d8ef61ef2f8bd2a836f9369e05c2046fc2a493fbcbf->enter($__internal_c35b60e339ebb25f267f3d8ef61ef2f8bd2a836f9369e05c2046fc2a493fbcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c35b60e339ebb25f267f3d8ef61ef2f8bd2a836f9369e05c2046fc2a493fbcbf->leave($__internal_c35b60e339ebb25f267f3d8ef61ef2f8bd2a836f9369e05c2046fc2a493fbcbf_prof);

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
