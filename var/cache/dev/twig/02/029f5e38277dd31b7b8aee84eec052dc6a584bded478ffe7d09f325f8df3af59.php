<?php

/* LGPUserBundle::layout.html.twig */
class __TwigTemplate_3d46b23c7ab668b0a8926e5f5c9b67a3c77f8f0d4a104c12b39157618d9a029c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60a720fc61875e80bd6eaa95390144b5f87d54c2e2068f4b1d03952b137ef014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a720fc61875e80bd6eaa95390144b5f87d54c2e2068f4b1d03952b137ef014->enter($__internal_60a720fc61875e80bd6eaa95390144b5f87d54c2e2068f4b1d03952b137ef014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60a720fc61875e80bd6eaa95390144b5f87d54c2e2068f4b1d03952b137ef014->leave($__internal_60a720fc61875e80bd6eaa95390144b5f87d54c2e2068f4b1d03952b137ef014_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e196ed44df41861a28a02336128f5059313c77e2b0c1b60602f63694cfa04615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e196ed44df41861a28a02336128f5059313c77e2b0c1b60602f63694cfa04615->enter($__internal_e196ed44df41861a28a02336128f5059313c77e2b0c1b60602f63694cfa04615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_e196ed44df41861a28a02336128f5059313c77e2b0c1b60602f63694cfa04615->leave($__internal_e196ed44df41861a28a02336128f5059313c77e2b0c1b60602f63694cfa04615_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d074cc8c7509b0c4c26a9d09a92aa6837587eda439f39cc2e24bbf8bbeb3528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d074cc8c7509b0c4c26a9d09a92aa6837587eda439f39cc2e24bbf8bbeb3528->enter($__internal_2d074cc8c7509b0c4c26a9d09a92aa6837587eda439f39cc2e24bbf8bbeb3528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_2d074cc8c7509b0c4c26a9d09a92aa6837587eda439f39cc2e24bbf8bbeb3528->leave($__internal_2d074cc8c7509b0c4c26a9d09a92aa6837587eda439f39cc2e24bbf8bbeb3528_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'LGPCoreBundle::layout.html.twig' %}

{% block body %}

  {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}
  {% block fos_user_content %}

  {% endblock fos_user_content %}

{% endblock %}
";
    }
}
