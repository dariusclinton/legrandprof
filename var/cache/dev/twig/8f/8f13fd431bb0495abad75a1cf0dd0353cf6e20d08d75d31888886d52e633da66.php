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
        $__internal_8e3b0d9d8083ca42bc1b727e7aa500c2ba028c0649bcd130bdfd52b94d0b0c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3b0d9d8083ca42bc1b727e7aa500c2ba028c0649bcd130bdfd52b94d0b0c9d->enter($__internal_8e3b0d9d8083ca42bc1b727e7aa500c2ba028c0649bcd130bdfd52b94d0b0c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e3b0d9d8083ca42bc1b727e7aa500c2ba028c0649bcd130bdfd52b94d0b0c9d->leave($__internal_8e3b0d9d8083ca42bc1b727e7aa500c2ba028c0649bcd130bdfd52b94d0b0c9d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_571f8aa6c0d4226248839ee5235a6c6548f19de34b2aa778b7970c34bf52c737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571f8aa6c0d4226248839ee5235a6c6548f19de34b2aa778b7970c34bf52c737->enter($__internal_571f8aa6c0d4226248839ee5235a6c6548f19de34b2aa778b7970c34bf52c737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_571f8aa6c0d4226248839ee5235a6c6548f19de34b2aa778b7970c34bf52c737->leave($__internal_571f8aa6c0d4226248839ee5235a6c6548f19de34b2aa778b7970c34bf52c737_prof);

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
