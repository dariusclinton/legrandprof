<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_78e5e0f8ce4c2b98d7c455dd26de2b8979879428282611c0452388d8149c2aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_3afd83ca6a29c1b458724285814c4add08c4285d1d8675358d107a89f04b135d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afd83ca6a29c1b458724285814c4add08c4285d1d8675358d107a89f04b135d->enter($__internal_3afd83ca6a29c1b458724285814c4add08c4285d1d8675358d107a89f04b135d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3afd83ca6a29c1b458724285814c4add08c4285d1d8675358d107a89f04b135d->leave($__internal_3afd83ca6a29c1b458724285814c4add08c4285d1d8675358d107a89f04b135d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67fe6c670ef6b55b472e5f7e70b58016e1986fd3c2c929a9659bc966161151d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fe6c670ef6b55b472e5f7e70b58016e1986fd3c2c929a9659bc966161151d3->enter($__internal_67fe6c670ef6b55b472e5f7e70b58016e1986fd3c2c929a9659bc966161151d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_67fe6c670ef6b55b472e5f7e70b58016e1986fd3c2c929a9659bc966161151d3->leave($__internal_67fe6c670ef6b55b472e5f7e70b58016e1986fd3c2c929a9659bc966161151d3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
