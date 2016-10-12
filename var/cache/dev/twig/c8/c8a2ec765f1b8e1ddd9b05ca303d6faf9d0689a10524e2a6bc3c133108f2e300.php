<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_79ea177a4101e9774a6c3251f91353cbdc41aa67861dbaad2dd5c921a1bcba5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_41dc27577fbec7773b0a816a5fbbcf3c007bbd0448f73b8ed9c7c489daea5648 = $this->env->getExtension("native_profiler");
        $__internal_41dc27577fbec7773b0a816a5fbbcf3c007bbd0448f73b8ed9c7c489daea5648->enter($__internal_41dc27577fbec7773b0a816a5fbbcf3c007bbd0448f73b8ed9c7c489daea5648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41dc27577fbec7773b0a816a5fbbcf3c007bbd0448f73b8ed9c7c489daea5648->leave($__internal_41dc27577fbec7773b0a816a5fbbcf3c007bbd0448f73b8ed9c7c489daea5648_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ddea4730ce5a2c92577d79fea3391ba22d3ae9e1a2113b21d5cfc8fc3534b2c = $this->env->getExtension("native_profiler");
        $__internal_0ddea4730ce5a2c92577d79fea3391ba22d3ae9e1a2113b21d5cfc8fc3534b2c->enter($__internal_0ddea4730ce5a2c92577d79fea3391ba22d3ae9e1a2113b21d5cfc8fc3534b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0ddea4730ce5a2c92577d79fea3391ba22d3ae9e1a2113b21d5cfc8fc3534b2c->leave($__internal_0ddea4730ce5a2c92577d79fea3391ba22d3ae9e1a2113b21d5cfc8fc3534b2c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
  {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
