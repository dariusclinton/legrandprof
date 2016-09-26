<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_0cd8e319d39a0b321c36fe24ad3c80f503ff524a951f1e5cbb6d7e2bcaf40e17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_74544df66a95e667986f69337ec8205b811e2fa0327ed8d999d729d5e139cca9 = $this->env->getExtension("native_profiler");
        $__internal_74544df66a95e667986f69337ec8205b811e2fa0327ed8d999d729d5e139cca9->enter($__internal_74544df66a95e667986f69337ec8205b811e2fa0327ed8d999d729d5e139cca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74544df66a95e667986f69337ec8205b811e2fa0327ed8d999d729d5e139cca9->leave($__internal_74544df66a95e667986f69337ec8205b811e2fa0327ed8d999d729d5e139cca9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70c5a6b93ee6c716d3bf19b33f59885d41f183c992929a6a127e8e0d84698189 = $this->env->getExtension("native_profiler");
        $__internal_70c5a6b93ee6c716d3bf19b33f59885d41f183c992929a6a127e8e0d84698189->enter($__internal_70c5a6b93ee6c716d3bf19b33f59885d41f183c992929a6a127e8e0d84698189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_70c5a6b93ee6c716d3bf19b33f59885d41f183c992929a6a127e8e0d84698189->leave($__internal_70c5a6b93ee6c716d3bf19b33f59885d41f183c992929a6a127e8e0d84698189_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
