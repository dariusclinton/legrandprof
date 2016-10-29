<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d9b9399575216c1afe7e03521cf79f2f433207c32c1fa691555ad9baff499b7a extends Twig_Template
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
        $__internal_cac27b55a9de4e48d7ba913cdaff70a641e92e3eaba7e9d95cdc272b156b261a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac27b55a9de4e48d7ba913cdaff70a641e92e3eaba7e9d95cdc272b156b261a->enter($__internal_cac27b55a9de4e48d7ba913cdaff70a641e92e3eaba7e9d95cdc272b156b261a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cac27b55a9de4e48d7ba913cdaff70a641e92e3eaba7e9d95cdc272b156b261a->leave($__internal_cac27b55a9de4e48d7ba913cdaff70a641e92e3eaba7e9d95cdc272b156b261a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_82e4c7bcd85ff26c9937ed169c96d685efcdeedcc66314bbeb95e0c996be2ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e4c7bcd85ff26c9937ed169c96d685efcdeedcc66314bbeb95e0c996be2ed8->enter($__internal_82e4c7bcd85ff26c9937ed169c96d685efcdeedcc66314bbeb95e0c996be2ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_82e4c7bcd85ff26c9937ed169c96d685efcdeedcc66314bbeb95e0c996be2ed8->leave($__internal_82e4c7bcd85ff26c9937ed169c96d685efcdeedcc66314bbeb95e0c996be2ed8_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_fb37f5fc52f9b48b5bc91b033c6cf0a77cdafba05f47ae5217ca9ce9eb48c569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb37f5fc52f9b48b5bc91b033c6cf0a77cdafba05f47ae5217ca9ce9eb48c569->enter($__internal_fb37f5fc52f9b48b5bc91b033c6cf0a77cdafba05f47ae5217ca9ce9eb48c569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_fb37f5fc52f9b48b5bc91b033c6cf0a77cdafba05f47ae5217ca9ce9eb48c569->leave($__internal_fb37f5fc52f9b48b5bc91b033c6cf0a77cdafba05f47ae5217ca9ce9eb48c569_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d2247a148aee7b6a3529be868caeb86235872a7c0b272dc01f2e3ce384561c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2247a148aee7b6a3529be868caeb86235872a7c0b272dc01f2e3ce384561c1->enter($__internal_4d2247a148aee7b6a3529be868caeb86235872a7c0b272dc01f2e3ce384561c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_4d2247a148aee7b6a3529be868caeb86235872a7c0b272dc01f2e3ce384561c1->leave($__internal_4d2247a148aee7b6a3529be868caeb86235872a7c0b272dc01f2e3ce384561c1_prof);

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
