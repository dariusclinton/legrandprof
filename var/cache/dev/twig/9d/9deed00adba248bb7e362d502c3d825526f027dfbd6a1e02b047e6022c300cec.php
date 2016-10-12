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
        $__internal_a62d75032d33f1e504d1fd2fc8d6c2f960e493c7227fa995d09a192466eb7272 = $this->env->getExtension("native_profiler");
        $__internal_a62d75032d33f1e504d1fd2fc8d6c2f960e493c7227fa995d09a192466eb7272->enter($__internal_a62d75032d33f1e504d1fd2fc8d6c2f960e493c7227fa995d09a192466eb7272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a62d75032d33f1e504d1fd2fc8d6c2f960e493c7227fa995d09a192466eb7272->leave($__internal_a62d75032d33f1e504d1fd2fc8d6c2f960e493c7227fa995d09a192466eb7272_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d009bef6b3a2d9757371354942a35bb69c74e74bfa5adee304afdf377e795ea = $this->env->getExtension("native_profiler");
        $__internal_3d009bef6b3a2d9757371354942a35bb69c74e74bfa5adee304afdf377e795ea->enter($__internal_3d009bef6b3a2d9757371354942a35bb69c74e74bfa5adee304afdf377e795ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3d009bef6b3a2d9757371354942a35bb69c74e74bfa5adee304afdf377e795ea->leave($__internal_3d009bef6b3a2d9757371354942a35bb69c74e74bfa5adee304afdf377e795ea_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_67b9bede6442867ba152df0f3ef23b02822933a392840d8c096e1428ebfb9e3a = $this->env->getExtension("native_profiler");
        $__internal_67b9bede6442867ba152df0f3ef23b02822933a392840d8c096e1428ebfb9e3a->enter($__internal_67b9bede6442867ba152df0f3ef23b02822933a392840d8c096e1428ebfb9e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_67b9bede6442867ba152df0f3ef23b02822933a392840d8c096e1428ebfb9e3a->leave($__internal_67b9bede6442867ba152df0f3ef23b02822933a392840d8c096e1428ebfb9e3a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c198ff8a8c6401161c4bb1668970a8c80a29035920a48c04b8e5137627a6d71 = $this->env->getExtension("native_profiler");
        $__internal_9c198ff8a8c6401161c4bb1668970a8c80a29035920a48c04b8e5137627a6d71->enter($__internal_9c198ff8a8c6401161c4bb1668970a8c80a29035920a48c04b8e5137627a6d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c198ff8a8c6401161c4bb1668970a8c80a29035920a48c04b8e5137627a6d71->leave($__internal_9c198ff8a8c6401161c4bb1668970a8c80a29035920a48c04b8e5137627a6d71_prof);

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
