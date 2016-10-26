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
        $__internal_dc97cd0cac2ae45e65ac2ab5a39512852957ab8a9d2ec708bfde424551259e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc97cd0cac2ae45e65ac2ab5a39512852957ab8a9d2ec708bfde424551259e7f->enter($__internal_dc97cd0cac2ae45e65ac2ab5a39512852957ab8a9d2ec708bfde424551259e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc97cd0cac2ae45e65ac2ab5a39512852957ab8a9d2ec708bfde424551259e7f->leave($__internal_dc97cd0cac2ae45e65ac2ab5a39512852957ab8a9d2ec708bfde424551259e7f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32f3741535934631d801444b19a352ae7460e307c64dfb14ecd1d3705eb5d3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f3741535934631d801444b19a352ae7460e307c64dfb14ecd1d3705eb5d3dd->enter($__internal_32f3741535934631d801444b19a352ae7460e307c64dfb14ecd1d3705eb5d3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_32f3741535934631d801444b19a352ae7460e307c64dfb14ecd1d3705eb5d3dd->leave($__internal_32f3741535934631d801444b19a352ae7460e307c64dfb14ecd1d3705eb5d3dd_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1569e9e6e70433bf4484147bebd35b8ee88460ad57948d0e2502ced82edd2d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1569e9e6e70433bf4484147bebd35b8ee88460ad57948d0e2502ced82edd2d23->enter($__internal_1569e9e6e70433bf4484147bebd35b8ee88460ad57948d0e2502ced82edd2d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_1569e9e6e70433bf4484147bebd35b8ee88460ad57948d0e2502ced82edd2d23->leave($__internal_1569e9e6e70433bf4484147bebd35b8ee88460ad57948d0e2502ced82edd2d23_prof);

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
