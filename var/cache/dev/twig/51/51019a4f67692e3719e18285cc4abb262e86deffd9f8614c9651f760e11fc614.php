<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_ab015c2434f1bed1687ae18a495826190d00d5d28af0b9e09881786ed065ca05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f0b64e0ecff2e70f7a44bdbb0d617b15f8962823bf9f7b94662a36a4eb15944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0b64e0ecff2e70f7a44bdbb0d617b15f8962823bf9f7b94662a36a4eb15944->enter($__internal_4f0b64e0ecff2e70f7a44bdbb0d617b15f8962823bf9f7b94662a36a4eb15944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f0b64e0ecff2e70f7a44bdbb0d617b15f8962823bf9f7b94662a36a4eb15944->leave($__internal_4f0b64e0ecff2e70f7a44bdbb0d617b15f8962823bf9f7b94662a36a4eb15944_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c83993e51a1249d1ebef2bdc4a9c8ecf21d61e47c3096c03b12acc639f765a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83993e51a1249d1ebef2bdc4a9c8ecf21d61e47c3096c03b12acc639f765a21->enter($__internal_c83993e51a1249d1ebef2bdc4a9c8ecf21d61e47c3096c03b12acc639f765a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c83993e51a1249d1ebef2bdc4a9c8ecf21d61e47c3096c03b12acc639f765a21->leave($__internal_c83993e51a1249d1ebef2bdc4a9c8ecf21d61e47c3096c03b12acc639f765a21_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
