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
        $__internal_c252946d06d20d4990124d7f52cb04d59163512b19b6256b5c87c5c47a61f797 = $this->env->getExtension("native_profiler");
        $__internal_c252946d06d20d4990124d7f52cb04d59163512b19b6256b5c87c5c47a61f797->enter($__internal_c252946d06d20d4990124d7f52cb04d59163512b19b6256b5c87c5c47a61f797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c252946d06d20d4990124d7f52cb04d59163512b19b6256b5c87c5c47a61f797->leave($__internal_c252946d06d20d4990124d7f52cb04d59163512b19b6256b5c87c5c47a61f797_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82f0df316771f8a3e34c757580c97460bc4c168a0f84adfb94264191854b7dc8 = $this->env->getExtension("native_profiler");
        $__internal_82f0df316771f8a3e34c757580c97460bc4c168a0f84adfb94264191854b7dc8->enter($__internal_82f0df316771f8a3e34c757580c97460bc4c168a0f84adfb94264191854b7dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_82f0df316771f8a3e34c757580c97460bc4c168a0f84adfb94264191854b7dc8->leave($__internal_82f0df316771f8a3e34c757580c97460bc4c168a0f84adfb94264191854b7dc8_prof);

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
