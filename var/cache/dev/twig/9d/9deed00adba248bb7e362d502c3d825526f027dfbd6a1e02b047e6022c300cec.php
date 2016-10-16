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
        $__internal_d99b5720b124c6a944661ee80bfddff1c8a5e68e6af49ff2292dcdf500bd375e = $this->env->getExtension("native_profiler");
        $__internal_d99b5720b124c6a944661ee80bfddff1c8a5e68e6af49ff2292dcdf500bd375e->enter($__internal_d99b5720b124c6a944661ee80bfddff1c8a5e68e6af49ff2292dcdf500bd375e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d99b5720b124c6a944661ee80bfddff1c8a5e68e6af49ff2292dcdf500bd375e->leave($__internal_d99b5720b124c6a944661ee80bfddff1c8a5e68e6af49ff2292dcdf500bd375e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_400afe1b67083d7fc318289d5caf63520a2bc8b7cec826ae148878035b3778a9 = $this->env->getExtension("native_profiler");
        $__internal_400afe1b67083d7fc318289d5caf63520a2bc8b7cec826ae148878035b3778a9->enter($__internal_400afe1b67083d7fc318289d5caf63520a2bc8b7cec826ae148878035b3778a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_400afe1b67083d7fc318289d5caf63520a2bc8b7cec826ae148878035b3778a9->leave($__internal_400afe1b67083d7fc318289d5caf63520a2bc8b7cec826ae148878035b3778a9_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_39b14937b5e78ea7743a8e6a8f6a5abc5773d2f36b62ce89b488999672c62ab1 = $this->env->getExtension("native_profiler");
        $__internal_39b14937b5e78ea7743a8e6a8f6a5abc5773d2f36b62ce89b488999672c62ab1->enter($__internal_39b14937b5e78ea7743a8e6a8f6a5abc5773d2f36b62ce89b488999672c62ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_39b14937b5e78ea7743a8e6a8f6a5abc5773d2f36b62ce89b488999672c62ab1->leave($__internal_39b14937b5e78ea7743a8e6a8f6a5abc5773d2f36b62ce89b488999672c62ab1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ca703ca4abb145ec0f0464eb2923b280930448472b53efefab56daded000f2c = $this->env->getExtension("native_profiler");
        $__internal_5ca703ca4abb145ec0f0464eb2923b280930448472b53efefab56daded000f2c->enter($__internal_5ca703ca4abb145ec0f0464eb2923b280930448472b53efefab56daded000f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5ca703ca4abb145ec0f0464eb2923b280930448472b53efefab56daded000f2c->leave($__internal_5ca703ca4abb145ec0f0464eb2923b280930448472b53efefab56daded000f2c_prof);

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
