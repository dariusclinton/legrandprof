<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_51ab9805b8091f065e4d7514a5d6b1f7e98186476f1409be8aec14f2662c93ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae7ff922271ece0b0ee2cddbd919680b2bfe5e5550b616564df4ce0d447aeca8 = $this->env->getExtension("native_profiler");
        $__internal_ae7ff922271ece0b0ee2cddbd919680b2bfe5e5550b616564df4ce0d447aeca8->enter($__internal_ae7ff922271ece0b0ee2cddbd919680b2bfe5e5550b616564df4ce0d447aeca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae7ff922271ece0b0ee2cddbd919680b2bfe5e5550b616564df4ce0d447aeca8->leave($__internal_ae7ff922271ece0b0ee2cddbd919680b2bfe5e5550b616564df4ce0d447aeca8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d77ca0c0d89c46465af0145360ab286e36f8d4ed6e0a672e15c544ea765ee23 = $this->env->getExtension("native_profiler");
        $__internal_0d77ca0c0d89c46465af0145360ab286e36f8d4ed6e0a672e15c544ea765ee23->enter($__internal_0d77ca0c0d89c46465af0145360ab286e36f8d4ed6e0a672e15c544ea765ee23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0d77ca0c0d89c46465af0145360ab286e36f8d4ed6e0a672e15c544ea765ee23->leave($__internal_0d77ca0c0d89c46465af0145360ab286e36f8d4ed6e0a672e15c544ea765ee23_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_283581202bb0da9e9e31312fba292d324e06d342055e682e0e50130345c8cb64 = $this->env->getExtension("native_profiler");
        $__internal_283581202bb0da9e9e31312fba292d324e06d342055e682e0e50130345c8cb64->enter($__internal_283581202bb0da9e9e31312fba292d324e06d342055e682e0e50130345c8cb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_283581202bb0da9e9e31312fba292d324e06d342055e682e0e50130345c8cb64->leave($__internal_283581202bb0da9e9e31312fba292d324e06d342055e682e0e50130345c8cb64_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_996511949b85310f5c0e5f7592eecbce92ebc94ae11b40e4844b4dcc84fdedc5 = $this->env->getExtension("native_profiler");
        $__internal_996511949b85310f5c0e5f7592eecbce92ebc94ae11b40e4844b4dcc84fdedc5->enter($__internal_996511949b85310f5c0e5f7592eecbce92ebc94ae11b40e4844b4dcc84fdedc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_996511949b85310f5c0e5f7592eecbce92ebc94ae11b40e4844b4dcc84fdedc5->leave($__internal_996511949b85310f5c0e5f7592eecbce92ebc94ae11b40e4844b4dcc84fdedc5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  82 => 13,  79 => 12,  73 => 11,  64 => 8,  56 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block title %}
    {{ app.user.prenoms }} {{ app.user.nom }} - Edit profile - {{ parent() }}
{% endblock %}

{% block header_submenu %} 
    {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block fos_user_content %}
    <div class=\"bg-grey dashboard\">
        {% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
    </div>
{% endblock fos_user_content %}
";
    }
}
