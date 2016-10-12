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
        $__internal_82172e18ed6e474349530ea3786d78ed1f8d4ef1d663b0b32bdc3a20f73e6ac4 = $this->env->getExtension("native_profiler");
        $__internal_82172e18ed6e474349530ea3786d78ed1f8d4ef1d663b0b32bdc3a20f73e6ac4->enter($__internal_82172e18ed6e474349530ea3786d78ed1f8d4ef1d663b0b32bdc3a20f73e6ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82172e18ed6e474349530ea3786d78ed1f8d4ef1d663b0b32bdc3a20f73e6ac4->leave($__internal_82172e18ed6e474349530ea3786d78ed1f8d4ef1d663b0b32bdc3a20f73e6ac4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b80a62510fa03f8a7ab68c00bc6cb7f27c6a4b5021870df51c15bba7629f173 = $this->env->getExtension("native_profiler");
        $__internal_9b80a62510fa03f8a7ab68c00bc6cb7f27c6a4b5021870df51c15bba7629f173->enter($__internal_9b80a62510fa03f8a7ab68c00bc6cb7f27c6a4b5021870df51c15bba7629f173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_9b80a62510fa03f8a7ab68c00bc6cb7f27c6a4b5021870df51c15bba7629f173->leave($__internal_9b80a62510fa03f8a7ab68c00bc6cb7f27c6a4b5021870df51c15bba7629f173_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5deabb6aad41e8c41196dfd3db4b95b63c9efe647737e5871fbb4e28811e770f = $this->env->getExtension("native_profiler");
        $__internal_5deabb6aad41e8c41196dfd3db4b95b63c9efe647737e5871fbb4e28811e770f->enter($__internal_5deabb6aad41e8c41196dfd3db4b95b63c9efe647737e5871fbb4e28811e770f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_5deabb6aad41e8c41196dfd3db4b95b63c9efe647737e5871fbb4e28811e770f->leave($__internal_5deabb6aad41e8c41196dfd3db4b95b63c9efe647737e5871fbb4e28811e770f_prof);

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
