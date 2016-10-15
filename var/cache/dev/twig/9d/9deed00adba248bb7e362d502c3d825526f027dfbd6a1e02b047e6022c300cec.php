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
        $__internal_a5fd5e0ecd590a8f63a145dcd9ebb8ec4d745f839ff8b5b436ec61fa06d94491 = $this->env->getExtension("native_profiler");
        $__internal_a5fd5e0ecd590a8f63a145dcd9ebb8ec4d745f839ff8b5b436ec61fa06d94491->enter($__internal_a5fd5e0ecd590a8f63a145dcd9ebb8ec4d745f839ff8b5b436ec61fa06d94491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5fd5e0ecd590a8f63a145dcd9ebb8ec4d745f839ff8b5b436ec61fa06d94491->leave($__internal_a5fd5e0ecd590a8f63a145dcd9ebb8ec4d745f839ff8b5b436ec61fa06d94491_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e90e8340310e89b84dec7b42013a6e1c35e748d709e363a9e57e0aa63af1535 = $this->env->getExtension("native_profiler");
        $__internal_6e90e8340310e89b84dec7b42013a6e1c35e748d709e363a9e57e0aa63af1535->enter($__internal_6e90e8340310e89b84dec7b42013a6e1c35e748d709e363a9e57e0aa63af1535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6e90e8340310e89b84dec7b42013a6e1c35e748d709e363a9e57e0aa63af1535->leave($__internal_6e90e8340310e89b84dec7b42013a6e1c35e748d709e363a9e57e0aa63af1535_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_f555ea92e0ba6e29ec02184cbbf68134a06596262dd865df5c2290aff2a68935 = $this->env->getExtension("native_profiler");
        $__internal_f555ea92e0ba6e29ec02184cbbf68134a06596262dd865df5c2290aff2a68935->enter($__internal_f555ea92e0ba6e29ec02184cbbf68134a06596262dd865df5c2290aff2a68935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_f555ea92e0ba6e29ec02184cbbf68134a06596262dd865df5c2290aff2a68935->leave($__internal_f555ea92e0ba6e29ec02184cbbf68134a06596262dd865df5c2290aff2a68935_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_12e9c129b4073cd47de2bca85f860d95ef9dda475287d5f7ead431cbb9ccf990 = $this->env->getExtension("native_profiler");
        $__internal_12e9c129b4073cd47de2bca85f860d95ef9dda475287d5f7ead431cbb9ccf990->enter($__internal_12e9c129b4073cd47de2bca85f860d95ef9dda475287d5f7ead431cbb9ccf990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_12e9c129b4073cd47de2bca85f860d95ef9dda475287d5f7ead431cbb9ccf990->leave($__internal_12e9c129b4073cd47de2bca85f860d95ef9dda475287d5f7ead431cbb9ccf990_prof);

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
