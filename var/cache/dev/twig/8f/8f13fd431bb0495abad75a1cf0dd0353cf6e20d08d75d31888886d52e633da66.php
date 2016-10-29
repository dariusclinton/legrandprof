<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_62ec2fddbc2f15a4ee161245ff83ed2a65e065c1efff68ad8bf9f050830fa561 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_704b8b9f0364b497fafe305a07b962cb37ad7165e02fd2c4a2372e69ca503d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_704b8b9f0364b497fafe305a07b962cb37ad7165e02fd2c4a2372e69ca503d40->enter($__internal_704b8b9f0364b497fafe305a07b962cb37ad7165e02fd2c4a2372e69ca503d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_704b8b9f0364b497fafe305a07b962cb37ad7165e02fd2c4a2372e69ca503d40->leave($__internal_704b8b9f0364b497fafe305a07b962cb37ad7165e02fd2c4a2372e69ca503d40_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_921049ac97161ad0dfac64ecd2aa96f828ec3b0d929d76306afac004e61aa715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921049ac97161ad0dfac64ecd2aa96f828ec3b0d929d76306afac004e61aa715->enter($__internal_921049ac97161ad0dfac64ecd2aa96f828ec3b0d929d76306afac004e61aa715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_921049ac97161ad0dfac64ecd2aa96f828ec3b0d929d76306afac004e61aa715->leave($__internal_921049ac97161ad0dfac64ecd2aa96f828ec3b0d929d76306afac004e61aa715_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
