<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ee86c1b812daa1b8919bc96f64bd46b59ee60439d571371340153864df40814b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_4b7202d14bc1bcc22d3696fa523571d8c76f5a5f23ee138ca1a508b418d0358a = $this->env->getExtension("native_profiler");
        $__internal_4b7202d14bc1bcc22d3696fa523571d8c76f5a5f23ee138ca1a508b418d0358a->enter($__internal_4b7202d14bc1bcc22d3696fa523571d8c76f5a5f23ee138ca1a508b418d0358a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b7202d14bc1bcc22d3696fa523571d8c76f5a5f23ee138ca1a508b418d0358a->leave($__internal_4b7202d14bc1bcc22d3696fa523571d8c76f5a5f23ee138ca1a508b418d0358a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1571564e6a200b9b04c3d7479ca3577875d69951667d24c26e5056f0980ad4ae = $this->env->getExtension("native_profiler");
        $__internal_1571564e6a200b9b04c3d7479ca3577875d69951667d24c26e5056f0980ad4ae->enter($__internal_1571564e6a200b9b04c3d7479ca3577875d69951667d24c26e5056f0980ad4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_1571564e6a200b9b04c3d7479ca3577875d69951667d24c26e5056f0980ad4ae->leave($__internal_1571564e6a200b9b04c3d7479ca3577875d69951667d24c26e5056f0980ad4ae_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_baeac85b9371260a427a3e6c965352e82a38d4fe827c5061babacaf37cc0434f = $this->env->getExtension("native_profiler");
        $__internal_baeac85b9371260a427a3e6c965352e82a38d4fe827c5061babacaf37cc0434f->enter($__internal_baeac85b9371260a427a3e6c965352e82a38d4fe827c5061babacaf37cc0434f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_baeac85b9371260a427a3e6c965352e82a38d4fe827c5061babacaf37cc0434f->leave($__internal_baeac85b9371260a427a3e6c965352e82a38d4fe827c5061babacaf37cc0434f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
