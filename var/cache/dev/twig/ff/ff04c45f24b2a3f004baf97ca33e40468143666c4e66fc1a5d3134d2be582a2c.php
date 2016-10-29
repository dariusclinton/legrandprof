<?php

/* LGPUserBundle:Paiement:add.html.twig */
class __TwigTemplate_94bd12566cebe1e29a77311e1a8b290fa94810dc690ce7d2623a584b44140c98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Paiement:add.html.twig", 1);
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
        $__internal_bf8c593bdc22cf8cc5e9be1edfc3763f0bcdcf279bf965137e4d2924f4daa354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8c593bdc22cf8cc5e9be1edfc3763f0bcdcf279bf965137e4d2924f4daa354->enter($__internal_bf8c593bdc22cf8cc5e9be1edfc3763f0bcdcf279bf965137e4d2924f4daa354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Paiement:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf8c593bdc22cf8cc5e9be1edfc3763f0bcdcf279bf965137e4d2924f4daa354->leave($__internal_bf8c593bdc22cf8cc5e9be1edfc3763f0bcdcf279bf965137e4d2924f4daa354_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7225e2da8f8390a5f437616ace29777f049a068aaaa97d35a560a3394434981c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7225e2da8f8390a5f437616ace29777f049a068aaaa97d35a560a3394434981c->enter($__internal_7225e2da8f8390a5f437616ace29777f049a068aaaa97d35a560a3394434981c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    paiement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7225e2da8f8390a5f437616ace29777f049a068aaaa97d35a560a3394434981c->leave($__internal_7225e2da8f8390a5f437616ace29777f049a068aaaa97d35a560a3394434981c_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_b2879fe5d1cbecd4b8299cda94078fe112ba189e8db14bea3cc669a020419a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2879fe5d1cbecd4b8299cda94078fe112ba189e8db14bea3cc669a020419a3e->enter($__internal_b2879fe5d1cbecd4b8299cda94078fe112ba189e8db14bea3cc669a020419a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_b2879fe5d1cbecd4b8299cda94078fe112ba189e8db14bea3cc669a020419a3e->leave($__internal_b2879fe5d1cbecd4b8299cda94078fe112ba189e8db14bea3cc669a020419a3e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aeb9687bc084a783c4276d0dfdb663090609719af26f4a38940a04e9fc5be618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb9687bc084a783c4276d0dfdb663090609719af26f4a38940a04e9fc5be618->enter($__internal_aeb9687bc084a783c4276d0dfdb663090609719af26f4a38940a04e9fc5be618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">

                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_aeb9687bc084a783c4276d0dfdb663090609719af26f4a38940a04e9fc5be618->leave($__internal_aeb9687bc084a783c4276d0dfdb663090609719af26f4a38940a04e9fc5be618_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Paiement:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    paiement - {{ parent() }}
{% endblock %}

{% block header_submenu %}
    {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}

    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">

                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}";
    }
}
