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
        $__internal_9c5617da6108602e08bf0d072155dacf8f5cc269903e8d6fc54ea910139af44a = $this->env->getExtension("native_profiler");
        $__internal_9c5617da6108602e08bf0d072155dacf8f5cc269903e8d6fc54ea910139af44a->enter($__internal_9c5617da6108602e08bf0d072155dacf8f5cc269903e8d6fc54ea910139af44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c5617da6108602e08bf0d072155dacf8f5cc269903e8d6fc54ea910139af44a->leave($__internal_9c5617da6108602e08bf0d072155dacf8f5cc269903e8d6fc54ea910139af44a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1b8d667d378b3098947324e8ead867cf37f765d784b0849c7bbcf23b245299c = $this->env->getExtension("native_profiler");
        $__internal_a1b8d667d378b3098947324e8ead867cf37f765d784b0849c7bbcf23b245299c->enter($__internal_a1b8d667d378b3098947324e8ead867cf37f765d784b0849c7bbcf23b245299c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_a1b8d667d378b3098947324e8ead867cf37f765d784b0849c7bbcf23b245299c->leave($__internal_a1b8d667d378b3098947324e8ead867cf37f765d784b0849c7bbcf23b245299c_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55151e9be14d805ec533621423b9151fba23f8345628d9110a984bbbeaa8805c = $this->env->getExtension("native_profiler");
        $__internal_55151e9be14d805ec533621423b9151fba23f8345628d9110a984bbbeaa8805c->enter($__internal_55151e9be14d805ec533621423b9151fba23f8345628d9110a984bbbeaa8805c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_55151e9be14d805ec533621423b9151fba23f8345628d9110a984bbbeaa8805c->leave($__internal_55151e9be14d805ec533621423b9151fba23f8345628d9110a984bbbeaa8805c_prof);

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
